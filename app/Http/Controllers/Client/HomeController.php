<?php

namespace App\Http\Controllers\Client;

use App\Http\Models\Course;
use App\Http\Models\Subject;
use App\Http\Models\Task;
use App\Http\Models\User;
use App\Http\Requests\ReportRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.role');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user()->load('courses');

        return view('client.index', compact('user'));
    }

    public function show($id)
    {
        $course = Course::find($id);
        $subjects = $course->subjects->load('tasks');
        $users = $course->users;

        return view('client.course-detail', compact(['course', 'subjects', 'users']));
    }

    public function showTask($id)
    {
        $task = Task::find($id);
        $tasks = Task::where('subject_id', $task->subject->id)->get();

        return view('client.task-detail', compact(['task', 'tasks']));
    }

    public function report(ReportRequest $request, $id)
    {
        $user = Auth::user();
        $user->tasks()->attach($id, [
            'report' => $request->report
        ]);

        return redirect()->route('courses.task', $id);
    }
}
