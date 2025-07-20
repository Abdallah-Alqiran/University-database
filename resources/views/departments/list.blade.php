@extends('layouts.template')


@section('title')
    Home
@endsection

@section('content')

@section('head')
Departments Data
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="w-100">
        <h1 class="text-info text-center">List All Department</h1>
        <table class="table table-dart">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Location</td>
                <td>Action</td>
            </tr>
            @foreach ($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
                <td>{{ $department->location }}</td>
                <td>
                    <a href="{{ route('departments.delete', $department->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <td> <a href="{{ route('departments.create') }}" class="btn btn-primary">Add</a></td>
    </div>
</div>

@endsection
@endsection