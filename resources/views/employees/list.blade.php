@extends('layouts.head')
@extends('layouts.body')


@section('head')
Employees Data
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-8">
        <h1 class="text-info text-center">List All Employees</h1>
        <table class="table table-dart">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Age</td>
                <td>Gender</td>
                <td>Salary</td>
                <td>Position</td>
                <td>Action</td>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{$employee->phone}}</td>
                <td>{{ $employee->age }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->position }}</td>
                <td>
                    <a href="{{ route('employees.delete', $employee->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <td> <a href="{{ route('employees.create') }}" class="btn btn-primary">Add</a></td>
    </div>
</div>

@endsection()