@extends('layouts.head')
@extends('layouts.body')
@extends('layouts.template')


@section('title')
    Home
@endsection

@section('content')

@section('head')
Doctors Data
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-8">
        <h1 class="text-info text-center">List All Doctors</h1>
        <table class="table table-dart">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Age</td>
                <td>Salary</td>
                <td>Gender</td>
                <td>Action</td>
            </tr>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{ $doctor->age }}</td>
                <td>{{ $doctor->salary }}</td>
                <td>{{ $doctor->gender }}</td>
                <td> 
                    <a href="{{ route('doctors.delete', $doctor->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <td> <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add</a></td>
    </div>
</div>


@endsection
@endsection