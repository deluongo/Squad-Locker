<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function showv2()
    {
        return view('register.showv2');
    }

    public function submit()
    {
        return view('register.submit');
    }

}
