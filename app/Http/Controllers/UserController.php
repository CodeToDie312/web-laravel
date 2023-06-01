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
}
