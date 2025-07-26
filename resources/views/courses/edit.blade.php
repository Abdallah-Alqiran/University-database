@extends('layouts.template')


@section('title')
Home
@endsection

@section('content')
@section('head')
Add Course
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="w-100">
        <h1 class="text-info text-center">Edit Course</h1>

        <form method="POST" action="{{ route('courses.update', $course->id) }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" required class="form-control" id="name" name="name" value='{{ $course->name }}'>
            </div>
            <div class="mb-3">
                <label class="form-label">Hours</label>
                <input type="number" required class="form-control" id="hours" name="hours" value='{{ $course->hours }}'>
            </div>
            <div class="mb-3">
                <label class="form-label">Cost</label>
                <input type="number" required class="form-control" id="cost" name="cost" value='{{ $course->cost }}'>
            </div>
            <div class="mb-3">
                <label class="form-label">doctor Id</label>
                <input type="number" class="form-control" id="doctor_id" name="doctor_id" value='{{ $course->doctor->id ?? '' }}'>
            </div>
            <div class="mb-3">
                <label class="form-label">Student Id</label>
                <input type="number" class="form-control" id="student_id" name="student_id" value='{{ $course->student->id ?? '' }}'>
            </div>
            <button type="submit" class="btn btn-primary m-4" name="btn">Edit</button>
        </form>
    </div>
</div>


@endsection
@endsection