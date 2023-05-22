<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserRegisteredEvent;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Throwable;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function processLogin(Request $request)
    {
        try {
            $user = User::query()
                ->where('email', $request->get('email'))
                ->firstOrFail();
//            if (!Hash::check($request->get('password'), $user->password)) {
//                throw new Exception('Invalid password');
//            }

            session()->put('id', $user->id);
            session()->put('name', $user->name);
            session()->put('phone', $user->phone);
            session()->put('level', $user->level);

            return redirect()->route('dashboard');
        } catch (Throwable $e) {
            return redirect()->route('login');
        }
    }




}
