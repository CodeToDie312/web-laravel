<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\join;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Models\Student;


class NewStudentController extends Controller
{
    public function index()
    {
        $result = join::all();
        return view('pages.new_student.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function fetch($id)
    {
        $collection = join::all();
        $result = $collection->find($id)->toArray();
        $course = Course::where('id', '=', $result['course_id'])->pluck('name', 'id')->toArray();
        $course_name = $course[$result['course_id']];
        return view('pages.new_student.add',compact('result', 'course_name'));
    }

    public function trigger(Request $request)
    {
        $data = [];
        $data['name'] = $request->get('name');
        $data['gender'] = $request->get('gender');
        $data['birthdate'] = $request->get('birthdate');
        $data['address'] = $request->get('address');
        $data['course_id'] = $request->get('course_id');
        $result = Student::create($data);
        if($result == true){
            $destroy = join::where('id', $request->get('id'))->first();
            $destroy->delete();
        }
        return redirect()->route('students.list')->with('success','student created successfully.');

    }
}
