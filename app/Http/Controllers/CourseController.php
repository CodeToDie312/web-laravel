<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\DestroyRequest;
use App\Http\Requests\Course\StoreRequest;
use App\Http\Requests\Course\UpdateRequest;
use App\Models\Course;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

class CourseController extends Controller
{
    public function index()
    {
        $result = Course::all();
        //dd($result);
        return view('pages.course.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pages.course.create');
    }

    public function store(StoreRequest $request)
    {
        Course::create($request->all());
        return redirect()->route('pages.course.index')->with('success','Course created successfully.');
    }

    public function show(Course $result)
    {
        return view('pages.course.show',compact('result'));
    }

    public function edit(Course $result)
    {
        return view('pages.course.edit',compact('result'));
    }

    public function update(UpdateRequest $request, Course $result)
    {   
        $result->update($request->all());
  
        return redirect()->route('pages.course.index')->with('success','Course updated successfully');
    }

    public function destroy( Course $course)
    {
        $course->delete();
  
        return redirect()->route('pages.course.index')->with('success','Course deleted successfully');
    }
}
