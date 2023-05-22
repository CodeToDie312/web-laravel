<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Course;

class ClassroomController extends Controller
{
   
    public function index()
    {
        $result = Classroom::all();
        return view('pages.classroom.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $course = Course::all()->pluck('name', 'id')->toArray();
        return view('pages.classroom.create', compact('course'));
    }

    public function store(Request $request)
    {
        $result = Classroom::create($request->all());
        if($result == true){
            return redirect()->route('classrooms.list')->with('success','Teacher created successfully.');
        }
    }

    public function edit($id)
    {
        $collection = Classroom::all();
        $result = $collection->find($id)->toArray();
        $course = Course::all()->pluck('name', 'id')->toArray();
        return view('pages.classroom.edit',compact('result', 'course'));
    }

    public function update(Request $request, $id)
    {   
    	$teacher = Classroom::find($id);

        if(!$teacher){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('classrooms.list');
        }

        $teacher->update($request->all());
        return redirect()->route('classrooms.list')->with('success');
    }

    //soft delete 
    // public function destroy( Request $request)
    // {
    //     $result = Classroom::where('id', $request->get('id'))->first();
    //     $final = $result->delete();
    //     return redirect()->route('classrooms.list')->with('success','Teacher deleted successfully');
    // }

}
