@extends('layouts.head')
@extends('layouts.body')


@section('head')
Add Course
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-8">
        <h1 class="text-info text-center">Edit Doctor</h1>

        <form method="POST" action="{{ route('doctors.update', $doctor->id) }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input required type="text" class="form-control" id="name" name="name" value="{{ $doctor->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input required type="text" class="form-control" id="email" name="email" value="{{ $doctor->email }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input required type="text" class="form-control" id="phone" name="phone" value="{{ $doctor->phone }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input required type="number" class="form-control" id="age" name="age" value="{{ $doctor->age }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Salary</label>
                <input required type="number" step="any" class="form-control" id="salary" name="salary" value="{{ $doctor->salary }}">
            </div>
            <div>
                <label class="form-label">Select Gender</label>
                <select class="form-select" name="gender">
                    <option selected>Choose Gender</option>
                    <option value="male" {{ $doctor->gender == "male"? 'selected': '' }}>Male</option>
                    <option value="female" {{ $doctor->gender == "female"? 'selected': '' }}>Female</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary m-4" name="btn">Edit</button>
        </form>
    </div>
</div>

@endsection