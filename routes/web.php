<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckLoginMiddleware;
use Illuminate\Support\Facades\Route;
Route::get('/', [HomeController::class, 'index']);
Route::get('login', [\App\Http\Controllers\AuthController::class,
    'login'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'processLogin'])->name('process_login');
//Route::get('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
//Route::post('register', [\App\Http\Controllers\AuthController::class, 'processRegister'])->name('process_register');
Route::group([
    // 'middleware'=> CheckLoginMiddleware::class
], function(){
    Route::get('teachers/index', [TeacherController::class, 'index'])->name('teachers.list');
    Route::get('teachers/show/{id}', [TeacherController::class, 'edit'])->name('teacher.detail');
    Route::post('teachers/create', [TeacherController::class, 'store'])->name('teacher.create');
    Route::put('teachers/update/{id}', [TeacherController::class,'update'])->name(('teacher.update'));
    Route::delete('teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

    //route students

    Route::get('students/index', [StudentController::class, 'index'])->name('students.list');
    Route::get('students/show/{id}', [StudentController::class, 'detail'])->name('students.detail');
    Route::post('students/create', [StudentController::class, 'store'])->name('students.create');
    Route::put('students/update/{id}', [StudentController::class,'update'])->name(('students.update'));
    Route::delete('students/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

    //route course

    Route::get('courses/index', [CourseController::class, 'index'])->name('courses.list');
    Route::get('courses/show/{id}', [CourseController::class, 'detail'])->name('courses.detail');
    Route::post('courses/create', [CourseController::class, 'store'])->name('courses.create');
    Route::put('courses/update/{id}', [CourseController::class,'update'])->name(('courses.update'));
    Route::delete('courses/delete/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

    // //route classroom
    Route::get('classrooms/index', [ClassroomController::class, 'index'])->name('classrooms.list');
    Route::get('classrooms/show/{id}', [ClassroomController::class, 'detail'])->name('classrooms.detail');
    Route::post('classrooms/create', [ClassroomController::class, 'store'])->name('classrooms.create');
    Route::put('classrooms/update/{id}', [ClassroomController::class,'update'])->name(('classrooms.update'));
    Route::delete('classrooms/delete/{id}', [ClassroomController::class, 'destroy'])->name('classrooms.destroy');

});
Route::get('test', function() {
    return view('layout.user');
});
