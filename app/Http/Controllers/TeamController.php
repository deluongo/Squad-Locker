<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function show()
    {
        return view('team.show');
    }
}
