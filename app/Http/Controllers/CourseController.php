<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('doctor')->get();
        return view('courses.list')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'hours' => $request->hours,
            'cost' => $request->cost,
            'doctor_id' => $request->doctor_id,
        ]);

        $course->students()->attach($request->student_id); // this works with array

        return redirect()->route('courses.index')->with('courses', $course);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Course::findOrFail($id);
        return view('courses.edit')->with('course', $edit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Course::findOrFail($id)->update($request->all());

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Course::findOrFail($id)->delete();

        return redirect()->route('courses.index');
    }
}
