<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\join;

class LandingpageController extends Controller
{
    public function index()
    {
        $course = Course::where('id', '<', 5)->get()->toArray();
        $teacher = Teacher::where('id', '<', 5)->get()->toArray();
        for($i = 0 ; $i <= count($course) ; $i++){
            $course1 = $course[0];
            $course2 = $course[1];
            $course3 = $course[2];
            $course4 = $course[3];
        }
        for($i=0; $i <= count($teacher); $i++){
            $teacher1 = $teacher[0];
            $teacher2 = $teacher[1];
            $teacher3 = $teacher[2];
            $teacher4 = $teacher[3];
        }
        return view('home', compact('course1', 'course2', 'course3', 'course4', 'teacher1', 'teacher2', 'teacher3', 'teacher4'));
    }

    public function form()
    {
        $course = Course::all()->pluck('name', 'id')->toArray();
        $teacher = Teacher::all()->pluck('name', 'id')->toArray();
        return view('form', compact('course', 'teacher'));
    }

    public function search(Request $request)
    {
        $param = $request->query('teacher');
        $teacher = Teacher::where('name', '=', $param)->first()->toArray();
        $result['name']  = $teacher['name'];
        $result['gender']  = $teacher['gender'] === 0 ? 'male': 'female';
        $result['address']  = $teacher['address'];
        $result['birthdate']  = $teacher['birthdate'];
        $result['desciption'] = $teacher['desciption'];
        return view('teacherdetail', compact('result'));
    }

    public function store(Request $request){

        $result = join::create($request->all());
        if($result == false){
            dd('1');
        }
        return redirect()->route('index')->with('success');
    }
   
}
