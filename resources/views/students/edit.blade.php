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
        <h1 class="text-info text-center">Edit Student</h1>

        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input required type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input required type="text" class="form-control" id="email" name="email" value="{{ $student->email }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input required type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input required type="number" class="form-control" id="age" name="age" value="{{ $student->age }}">
            </div>
            <div>
                <label class="form-label">Select Gender</label>
                <select class="form-select" name="getnder">
                    <option selected>Choose Gender</option>
                    <option value="male" {{ $student->gender == "male"? 'selected': '' }}>Male</option>
                    <option value="female" {{ $student->gender == "female"? 'selected': '' }}>Female</option>
                </select>
            </div>

            <div id="course-id">
                @if($student->courses->count())
                @foreach($student->courses as $course)
                <div class="mb-3">
                    <label class="form-label">Course ID</label>
                    <input type="number" name="course_id[]" class="form-control" value="{{ $course->id }}">
                </div>
                @endforeach
                @else
                <div class="mb-3">
                    <label class="form-label">Course ID</label>
                    <input type="number" name="course_id[]" class="form-control">
                </div>
                @endif
            </div>

            <button type="button" class="btn btn-success mb-3" onclick="addCourseId()">
                +
            </button>


            <button type="submit" class="btn btn-primary m-4" name="btn">Edit</button>
        </form>
    </div>
</div>


@endsection
@endsection


<script>
    function addCourseId() {
        const container = document.getElementById('course-id');
        const newInput = document.createElement('div');
        newInput.classList.add('mb-3');

        newInput.innerHTML = `
            <label class="form-label">Student ID</label>
            <input type="number" name="course_id[]" class="form-control" required>
        `;

        container.appendChild(newInput);
    }
</script>