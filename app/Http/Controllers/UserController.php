<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $result = User::where('level', '=', '1')->get();
        return view('pages.user.index',compact('result'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pages.user.create');
    }

    public function store(Request $request)
    {
        $result = User::create($request->all());
        if($result === false){
            echo('fail');
        }
        return redirect()->route('users.list')->with('success','Teacher created successfully.');
    }

    public function destroy( Request $request)
    {
        $result = User::where('id', $request->get('id'))->first();
        $final = $result->delete();
        return redirect()->route('users.list')->with('success','Teacher deleted successfully');
    }
}
