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
        <h1 class="text-info text-center">Add New Student</h1>

        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input required type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input required type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input required type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input required type="number" class="form-control" id="age" name="age">
            </div>
            <div>
                <label class="form-label">Select Gender</label>
                <select class="form-select" name="getnder">
                    <option selected>Choose Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary m-4" name="btn">Create</button>
        </form>
    </div>
</div>


@endsection
@endsection