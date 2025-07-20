@extends('layouts.template')


@section('title')
Home
@endsection

@section('content')
@section('head')
Courses Data
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="w-100">
        <h1 class="text-info text-center">List All Courses</h1>
        <table class="table table-dart">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>hours</td>
                <td>cost</td>
                <td>Explain By: 🗝️</td>
                <td>Action</td>
            </tr>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->hours }}</td>
                <td>{{$course->cost}}</td>
                <td> @if($course->doctor) {{$course->doctor->name}} @else <span class="text-danger fw-bold">No Doctor</span> @endif</td>
                <td>
                    <a href="{{ route('courses.delete', $course->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <td> <a href="{{ route('courses.create') }}" class="btn btn-primary">Add</a></td>
    </div>
</div>

@endsection
@endsection