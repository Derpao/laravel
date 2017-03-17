<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

//use Illuminate\Support\Facades\Auth;
use Auth;


class LiveController extends Controller
{
    public function __construct()
    {

    }

    public function live1()
    {
        return view('live1');
    }

    public function live2()
    {
        return view('live2');
    }
}
