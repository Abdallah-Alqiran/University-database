<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::group(["prefix" => "students", "as" => "students."], function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');

    Route::get('/create', [StudentController::class, 'create'])->name("create");
    Route::post('/store', [StudentController::class, 'store'])->name(name: 'store');
    Route::get('/{id}/delete', [StudentController::class, 'destroy'])->name('delete');
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [StudentController::class, 'update'])->name('update');
});

Route::group(["prefix" => "doctors", "as" => "doctors."], function () {
    Route::get('/', [DoctorController::class, 'index'])->name('index');

    Route::get('/create', [DoctorController::class, 'create'])->name('create');
    Route::post('/store', [DoctorController::class, 'store'])->name('store');
    Route::get('/{id}/delete', [DoctorController::class, 'destroy'])->name('delete');
    Route::get('/{id}/edit', [DoctorController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [DoctorController::class, 'update'])->name('update');
});

Route::group(["prefix" => "employees", "as" => "employees."], function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('index');

    Route::get('/create', [EmployeeController::class, 'create'])->name('create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('store');
    Route::get('/{id}/delete', [EmployeeController::class, 'destroy'])->name('delete');
    Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [EmployeeController::class, 'update'])->name('update');
});

Route::group(["prefix" => "courses", "as" => "courses."], function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');

    Route::get('/create', [CourseController::class, 'create'])->name('create');
    Route::post('/store', [CourseController::class, 'store'])->name('store');
    Route::get('/{id}/delete', [CourseController::class, 'destroy'])->name('delete');
    Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [CourseController::class, 'update'])->name('update');
});

Route::group(["prefix" => "departments", "as" => "departments."], function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('index');

    Route::get('/create', [DepartmentController::class, 'create'])->name('create');
    Route::post('/store', [DepartmentController::class, 'store'])->name('store');
    Route::get('/{id}/delete', [DepartmentController::class, 'destroy'])->name('delete');
    Route::get('/{id}/edit', [DepartmentController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [DepartmentController::class, 'update'])->name('update');
});



