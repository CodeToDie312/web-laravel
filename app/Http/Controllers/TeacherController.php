<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\Teacher\StoreRequest;
use App\Http\Requests\Teacher\UpdateRequest;
use App\Models\Coefficient;

class TeacherController extends Controller
{
    public function index()
    {
        $result = Teacher::latest()->paginate(5);
        return view('teacher.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(StoreRequest $request)
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
        $coefficient = Coefficient::all()->pluck('coefficient'); //lấy hệ số lương từ database

        if(!empty($coefficient)){
            $invoice = $request->get('salary') * $coefficient;
            $data['salary'] = $invoice;
        }

        Teacher::create($data);
        return redirect()->route('teacher.index')->with('success','Teacher created successfully.');
    }

    public function show(Teacher $result)
    {
        return view('teacher.show',compact('result'));
    }

    public function edit(Teacher $result)
    {
        return view('teacher.edit',compact('result'));
    }

    public function update(UpdateRequest $request, Teacher $result)
    {   
        $result->update($request->all());
  
        return redirect()->route('teacher.index')->with('success','Teacher updated successfully');
    }

    public function destroy( Teacher $teacher)
    {
        $teacher->delete();
  
        return redirect()->route('teacher.index')->with('success','Teacher deleted successfully');
    }

}
