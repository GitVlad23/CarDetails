<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register_form()
    {
        return view('auth/register');
    }

    public function register_process(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|string',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if($user)
        {
            auth('web')->login($user);
        }

        return redirect()->route('home');
    }

    public function login_form()
    {
        return view('auth/login');
    }

    public function login_process(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required'
        ]);

        if(@auth('web')->attempt($data))
        {
            return redirect()->route('home');
        }

        return redirect('/auth/login')->withErrors([
            'email' => 'Пользователь не найден, либо данные введены не правильно. Харе выдавать себя за другого!'
        ]);
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect()->route('home');
    }
}
