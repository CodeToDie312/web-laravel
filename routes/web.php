<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\CheckLoginMiddleware;
use Illuminate\Support\Facades\Route;
Route::get('login', [\App\Http\Controllers\AuthController::class,
    'login'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'processLogin'])->name('process_login');
//Route::get('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
//Route::post('register', [\App\Http\Controllers\AuthController::class, 'processRegister'])->name('process_register');
Route::group([
    // 'middleware'=> CheckLoginMiddleware::class
], function(){
    Route::resource('courses', CourseController::class)->except([
        'show',
    ]);
    Route::get('courses/api', [CourseController::class, 'api'])->name('courses.api');
    Route::get('courses/api/name', [CourseController::class, 'apiName'])->name('courses.api.name');
    Route::resource('students', StudentController::class)->except([
        'show',
    ]);
    Route::get('students/api', [StudentController::class, 'api'])->name('students.api');
    Route::get('students/api/name', [StudentController::class, 'apiName'])->name('students.api.name');
//    Route::group([
//        'middleware' => CheckSuperAdminMiddleware::class,
//    ], function(){
//        Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
//        Route::delete('students/{course}', [StudentController::class, 'destroy'])->name('students.destroy');
//    });
    Route::get('teachers/index', [TeacherController::class, 'index'])->name('teachers.list');
    Route::get('teachers/show/{id}', [TeacherController::class, 'detail'])->name('teacher.detail');
    Route::post('teachers/create', [TeacherController::class, 'store'])->name('teacher.create');
    Route::put('teachers/update/{id}', [TeacherController::class,'update'])->name(('teacher.update'));
    Route::delete('teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
});
Route::get('test', function() {
    return view('layout.user');
});
