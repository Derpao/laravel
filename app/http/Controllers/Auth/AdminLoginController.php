<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLogingForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //attempt to log
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if successful, then redirect to their intended location
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        } else {
            //if unsuccessful , then redirect
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(array('message' => 'Email or Password is incorrect'));
        }


    }


}
