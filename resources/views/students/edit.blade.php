@extends('layouts.head')
@extends('layouts.body')


@section('head')
Add Course
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-8">
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
                    <option value="male" {{ $student->gender == "male"? 'selected': '' }} >Male</option>
                    <option value="female" {{ $student->gender == "female"? 'selected': '' }} >Female</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary m-4" name="btn">Edit</button>
        </form>
    </div>
</div>


@endsection