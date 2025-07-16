@extends('layouts.head')
@extends('layouts.body')


@section('head')
Students Data
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-8">
        <h1 class="text-info text-center">List All Students</h1>
        <table class="table table-dart">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Age</td>
                <td>Gender</td>
                <td>Action</td>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{$student->phone}}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->gender }}</td>
                <td> 
                    <a href="{{ route('students.delete', $student->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <td> <a href="{{ route('students.create') }}" class="btn btn-primary">Add</a></td>
    </div>
</div>

@endsection