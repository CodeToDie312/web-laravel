<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Guest\LandingpageController;
use App\Http\Controllers\NewStudentController;
use App\Http\Middleware\CheckLoginMiddleware;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware'=>'web'
], function(){
    Route::get('login', [\App\Http\Controllers\AuthController::class,'login'])->name('login');
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'processLogin'])->name('process_login');

    //frontend route 
    Route::get('/', [LandingpageController::class, 'index'])->name('index');
    Route::get('form', [LandingpageController::class, 'form'])->name('form');
    Route::get('search', [LandingpageController::class, 'search'])->name('search');
    Route::post('join_student/store', [LandingpageController::class, 'store'])->name('join.store');
});

// Route Teacher 
Route::group([
    'middleware' => 'teacher'
], function(){
    // Route::get('/calendar', [CalendarController::class, 'index'])->name('show.calendar');
    // Route::post('/add_calendar', [CalendarController::class, 'add'])->name('add.calendar');
    // Route::get('/salary', [TeacherSalaryController::class, 'index'])->name('salary.teacher.show');
});

// Route Admin Permission
Route::group([
    'middleware' => 'admin'
], function(){

    Route::get('/admin', [HomeController::class, 'index'])->name('dashboard');

    //route user 
    Route::get('/users',[UserController::class, 'index'])->name('users.list');
    Route::get('users/show/{id}', [UserController::class, 'edit'])->name('users.detail');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
    Route::put('users/update/{id}', [UserController::class,'update'])->name(('users.update'));

    //route teacher
    Route::get('teachers/index', [TeacherController::class, 'index'])->name('teachers.list');
    Route::get('teachers/show/{id}', [TeacherController::class, 'edit'])->name('teacher.detail');
    Route::get('teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('teachers/store', [TeacherController::class, 'store'])->name('teacher.store');
    Route::put('teachers/update/{id}', [TeacherController::class,'update'])->name(('teacher.update'));
    Route::delete('teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

    //route students

    Route::get('students/index', [StudentController::class, 'index'])->name('students.list');
    Route::get('students/show/{id}', [StudentController::class, 'edit'])->name('students.detail');
    Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('students/store', [StudentController::class, 'store'])->name('students.store');
    Route::put('students/update/{id}', [StudentController::class,'update'])->name(('students.update'));
    Route::delete('students/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

    //route course

    Route::get('courses/index', [CourseController::class, 'index'])->name('courses.list');
    Route::get('courses/show/{id}', [CourseController::class, 'edit'])->name('courses.detail');
    Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('courses/store', [CourseController::class, 'store'])->name('courses.store');
    Route::put('courses/update/{id}', [CourseController::class,'update'])->name(('courses.update'));
    Route::delete('courses/delete/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

    // //route classroom
    Route::get('classrooms/index', [ClassroomController::class, 'index'])->name('classrooms.list');
    Route::get('classrooms/show/{id}', [ClassroomController::class, 'edit'])->name('classrooms.detail');
    Route::get('classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');
    Route::post('classrooms/store', [ClassroomController::class, 'store'])->name('classrooms.store');
    Route::put('classrooms/update/{id}', [ClassroomController::class,'update'])->name(('classrooms.update'));
    Route::delete('classrooms/delete/{id}', [ClassroomController::class, 'destroy'])->name('classrooms.destroy');

    //new student
    Route::get('new_student/index', [NewStudentController::class, 'index'])->name('new_student.list');
    Route::get('new_student/fetch/{id}', [NewStudentController::class, 'fetch'])->name('new_student.detail');
    Route::post('new_student/trigger', [NewStudentController::class, 'trigger'])->name('new_student.trigger');
});
Route::get('test', function() {
    return view('layout.user');
});
