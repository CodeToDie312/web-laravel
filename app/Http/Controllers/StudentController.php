<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{

    public function index()
    {
        $result = Student::latest()->paginate(5);
        return view('pages.student.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pages.student.create');
    }

    public function store(StoreRequest $request)
    {
        Student::create($request->all());
        return redirect()->route('pages.student.index')->with('success','Student created successfully.');
    }

    public function show(Student $result)
    {
        return view('pages.student.show',compact('result'));
    }

    public function edit(Student $result)
    {
        return view('pages.student.edit',compact('result'));
    }

    public function update(UpdateRequest $request, Student $result)
    {   
        $result->update($request->all());
  
        return redirect()->route('pages.student.index')->with('success','Student updated successfully');
    }

    public function destroy( Student $student)
    {
        $student->delete();
  
        return redirect()->route('pages.student.index')->with('success','Student deleted successfully');
    }
}
