<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;

class StudentController extends Controller
{

    public function index()
    {
        $result = Student::all();
        return view('pages.student.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $course = Course::all()->pluck('name', 'id')->toArray();
        return view('pages.student.create', compact('course'));
    }

    public function store(Request $request)
    {
        $result = Student::create($request->all());
        if($result == false){
            dd('1');
        }
        return redirect()->route('students.list')->with('success','student created successfully.');
    }

    public function edit($id)
    {
        $collection = Student::all();
        $result = $collection->find($id)->toArray();
        $course = Course::all()->pluck('name', 'id')->toArray();
        return view('pages.student.edit',compact('result', 'course'));
    }

    public function update(Request $request, $id)
    {   
    	$student = Student::find($id);

        if(!$student){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('student.list');
        }

        $student->update($request->all());
        return redirect()->route('students.list')->with('success');
    }

    public function destroy( Request $request)
    {
        $result = Student::where('id', $request->get('id'))->first();
        $final = $result->delete();
        return redirect()->route('students.list')->with('success','student deleted successfully');
    }
}
