<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\Authentication\LoginRequest;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('pages.managers.authentication.login');
    }

    public function login(LoginRequest $request)
    {
        if (auth('manager')->attempt($request->safe()->only(['username', 'password']), $request->validated('remember', false))) {
            return redirect()->route('manager.dashboard.index');
        }
        return redirect()->back()->withInput()->withErrors(['login' => 'نام کاربری یا رمز عبور اشتباه است']);
    }
}
