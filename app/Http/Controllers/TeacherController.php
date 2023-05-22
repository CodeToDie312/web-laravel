<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\Teacher\StoreRequest;
use App\Http\Requests\Teacher\UpdateRequest;
use App\Models\Coefficient;
use App\Models\Course;
use App\Models\Classroom;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $result = Teacher::all();
        return view('pages.teacher.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $course = Course::all()->pluck('name', 'id')->toArray();
        $classroom = Classroom::all()->pluck('name', 'id')->toArray();
        return view('pages.teacher.create', compact('course','classroom'));
    }

    public function store(Request $request)
    {
        $data= [];
        $data['name'] = $request->get('name');
        $data['gender'] = $request->get('gender');
        $data['birthdate'] = $request->get('birthdate');
        $data['address'] = $request->get('address');
        $data['status'] = $request->get('status');
        $data['name'] = $request->get('name');
        $data['classroom_id'] = $request->get('classroom_id');
        $data['course_id'] = $request->get('course_id');

        //tính lương với lương đầu vào nhân với hệ số cố định
        $coefficient = Coefficient::all()->pluck('coefficient')->toArray(); //lấy hệ số lương từ database
        if(!empty($coefficient)){
            $invoice = (int)$request->get('salary') * $coefficient[0];
            $data['salary'] = $invoice;
        }

        $result = Teacher::create($data);
        return redirect()->route('teachers.list')->with('success','Teacher created successfully.');
    }

    public function edit($id)
    {
        $collection = Teacher::all();
        $result = $collection->find($id)->toArray();
        $course = Course::all()->pluck('name', 'id')->toArray();
        $classroom = Classroom::all()->pluck('name', 'id')->toArray();
        return view('pages.teacher.edit',compact('result', 'course', 'classroom'));
    }

    public function update(Request $request, $id)
    {   
    	$teacher = Teacher::find($id);

        if(!$teacher){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('teacher.list');
        }

        $teacher->update($request->all());
        return redirect()->route('teachers.list')->with('success');
    }

    public function destroy( Request $request)
    {
        $result = Teacher::where('id', $request->get('id'))->first();
        $final = $result->delete();
        return redirect()->route('teachers.list')->with('success','Teacher deleted successfully');
    }

}
