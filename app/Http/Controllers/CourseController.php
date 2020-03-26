<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;
use App\Http\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::where('creator_id', (Auth::user()->id))->get();

        return view('admin.index', compact('courses'));
    }


    public function create()
    {
        //
    }


    public function store(CourseRequest $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'creator_id' => Auth::user()->id,
            'time' => $request->time,
        ]);

        return view('admin.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $courses = Course::findOrFail($id);

        return view('admin.courses.edit-form', compact('courses'));
    }


    public function update(CourseRequest $request, $id)
    {
        Course::findOrFail($id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => config('constant.image.null'),
                'creator_id' => Auth::user()->id,
                'time' => $request->time,
            ]);

        return redirect()->route('courses.index');
    }


    public function destroy($id)
    {
        Course::findOrFail($id)
            ->delete();

        return redirect()->route('courses.index');

    }
}
