<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;
use App\Http\Models\Course;

class CourseController extends Controller
{

    public function index()
    {
        $course = Course::all();

        return $course;
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
            'creator_id' => $request->creator_id,
            'time' => $request->time,
        ]);

        return $course;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(CourseRequest $request, $id)
    {
        $course = Course::find($id);
        if ($course) {
            $course = Course::find($id)
                ->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'image' => $request->image,
                    'creator_id' => $request->creator_id,
                    'time' => $request->time,
                ]);

            return $course;
        } else {

            return null;
        }
    }


    public function destroy($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course = Course::find($id)->delete();

            return $course;
        }

        return null;
    }
}
