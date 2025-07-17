@extends('layouts.template')


@section('title')
    Home
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center bg-primary text-white py-3 rounded">Which Data Do you want to view</h1>

        <ul class="list-group mt-4">
            <a href="{{ route('students.index') }}" class="list-group-item">Students</a>
            <a href="{{ route('doctors.index') }}" class="list-group-item">Doctors</a>
            <a href="{{ route('employees.index') }}" class="list-group-item">Employees</a>
            <a href="{{ route('courses.index') }}" class="list-group-item">Courses</a>
            <a href="{{ route('departments.index') }}" class="list-group-item">Department</a>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
@endsection