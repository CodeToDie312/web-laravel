<?php

namespace App\Http\Controllers;

use App\Enums\StudentStatusEnum;
use App\Models\Course;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    private Builder $model;

    public function __construct()
    {
        $this->model = (new Student())->query();
        $routeName   = Route::currentRouteName();
        $arr         = explode('.', $routeName);
        $arr         = array_map('ucfirst', $arr);
        $title       = implode(' - ', $arr);

        $arrStudentStatus = StudentStatusEnum::getArrayView();

        View::share('title', $title);
        View::share('arrStudentStatus', $arrStudentStatus);
    }

    public function index()
    {

        return view('student.index');
    }
    public function api()
    {
        return DataTables::of($this->model->with('course'))
            ->editColumn('gender', function ($object) {
                return $object->gender_name;
            })
            ->editColumn('status', function ($object) {
                return StudentStatusEnum::getKeyByValue($object->status);
            })
            ->addColumn('age', function ($object) {
                return $object->age;
            })
            ->addColumn('course_name', function ($object) {
                return $object->course->name;
            })
            ->addColumn('edit', function ($object) {
                return route('students.edit', $object);
            })
            ->addColumn('destroy', function ($object) {
                return route('students.destroy', $object);
            })
            ->filterColumn('course_name', function ($query, $keyword) {
                if ($keyword !== 'null') {
                    $query->whereHas('course', function ($q) use ($keyword) {
                        return $q->where('id', $keyword);
                    });
                }
            })
            ->filterColumn('status', function ($query, $keyword) {
                if ($keyword !== '0') {
                    $query->where('status', $keyword);
                }
            })
            ->make(true);
    }


    public function create()
    {
        $courses = Course::query()->get();
        return view('student.create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $arr           = $request->validated();
        $this->model->create($arr);

        return redirect()->route('students.index')->with('success', 'Đã thêm thành công');
    }
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', [
            'each' => $student,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $object = $this->model->find($student);
        $object->fill($request->validated());
        $object->save();
        return redirect()->route('students.index');
    }


    public function destroy(Student $student)
    {
        Student::destroy( $student);
//        $this->model->find($courseId)->delete();
//        $this->model->where('id', $courseId)->delete();
        $arr            = [];
        $arr['status']  = true;
        $arr['message'] = '';
        return response($arr, 200);
    }
}