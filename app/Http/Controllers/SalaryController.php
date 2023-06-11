<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Coefficient;
use Exception;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index(){
        if(session('level') == 1){
            $param = session('name');
            try{
                
                $result = Teacher::where('name', '=', $param)->first();
                $caseOfTeacher = $result->getAttribute('case');
                
                //Tinh luong 
                $coefficient = Coefficient::all()->pluck('coefficient')->toArray(); //lấy hệ số lương từ database
                if(!empty($coefficient)){
                    $invoice = (($caseOfTeacher * 1500000) * $coefficient[0]); // fix cung 150k 1 buổi;
                }
                
                $data = $result->getAttributes();
                $data['salary'] = $invoice;
                return view('pages.salary.index', compact('data'));
            } catch (Exception){
                throw new Exception($message = "Teacher not found in serve");
            }
        }
        return view('pages.salary.index');
    }

    public function search(Request $request) {

        $param = $request->get('teacher');
        $result = Teacher::where('name', '=', $param)->first();
        $caseOfTeacher = $result->getAttribute('case');
        
        //Tinh luong 
        $coefficient = Coefficient::all()->pluck('coefficient')->toArray(); //lấy hệ số lương từ database
        if(!empty($coefficient)){
            $invoice = (($caseOfTeacher* 1500000) * $coefficient[0]); // fix cung 150k 1 buổi;
        }
        $data = $result->getAttributes();
        $data['salary'] = $invoice;
        return view('pages.salary.index', compact('data'));
    }
}
