<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthFilterRequest;
use App\Http\Requests\SignupFilterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(AuthFilterRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('index'));
        } else {

            return view('auth.login');
        }
    }

    public function signup()
    {

        return view('auth.signup');
    }

    public function signupPost(SignupFilterRequest $request)
    {
        $user = User::create($request->validated());

        Auth::login($user);

        $request->session()->regenerate();
        return redirect()->intended(route('index'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}
