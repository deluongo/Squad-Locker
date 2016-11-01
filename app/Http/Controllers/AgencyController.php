<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function show()
    {
        return view('agency.show');
    }
}
