@extends('layouts.template')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container mt-5">
    <h1 class="text-center bg-primary text-white py-3 rounded">Which Data Do you want to view</h1>
    
    <ul class="list-group mt-4">
        <a href="{{ route('students.index') }}" class="list-group-item list-group-item-action">Students</a>
        <a href="{{ route('doctors.index') }}" class="list-group-item list-group-item-action">Doctors</a>
        <a href="{{ route('employees.index') }}" class="list-group-item list-group-item-action">Employees</a>
        <a href="{{ route('courses.index') }}" class="list-group-item list-group-item-action">Courses</a>
        <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-action">Department</a>
    </ul>
</div>
@endsection