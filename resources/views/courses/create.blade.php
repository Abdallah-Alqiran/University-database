@extends('layouts.head')
@extends('layouts.body')


@section('head')
Add Course
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-8">
        <h1 class="text-info text-center">Add New Course</h1>

        <form method="POST" action="{{ route('courses.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" required class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Hours</label>
                <input type="number" required class="form-control" id="hours" name="hours">
            </div>
            <div class="mb-3">
                <label class="form-label">Cost</label>
                <input type="number" required class="form-control" id="cost" name="cost">
            </div>
            <button type="submit" class="btn btn-primary m-4" name="btn">Create</button>
        </form>
    </div>
</div>


@endsection