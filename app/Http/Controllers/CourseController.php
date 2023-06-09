<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
   
    public function index()
    {
        $result = Course::all();
        return view('pages.course.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pages.course.create');
    }

    public function store(Request $request)
    {
        $result = Course::create($request->all());
        if($result == true){
            return redirect()->route('courses.list')->with('success','Course created successfully.');
        }
    }

    public function edit($id)
    {
        $collection = Course::all();
        $result = $collection->find($id)->toArray();
        return view('pages.course.edit',compact('result'));
    }

    public function update(Request $request, $id)
    {   
    	$teacher = Course::find($id);

        if(!$teacher){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('courses.list');
        }

        $teacher->update($request->all());
        return redirect()->route('courses.list')->with('success');
    }

    //soft delete 
    // public function destroy( Request $request)
    // {
    //     $result = Classroom::where('id', $request->get('id'))->first();
    //     $final = $result->delete();
    //     return redirect()->route('classrooms.list')->with('success','Teacher deleted successfully');
    // }

}
