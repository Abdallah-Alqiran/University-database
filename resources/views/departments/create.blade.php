@extends('layouts.head')
@extends('layouts.body')


@section('head')
Add Course
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-8">
        <h1 class="text-info text-center">Add New Department</h1>
        <form method="POST" action="{{ route('departments.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input required type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input required type="text" class="form-control" id="location" name="location">
            </div>

            <button type="submit" class="btn btn-primary m-4" name="btn">Create</button>

        </form>
    </div>
</div>


@endsection