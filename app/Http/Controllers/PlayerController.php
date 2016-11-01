<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show()
    {
        return view('player.show');
    }

    public function show2()
    {
        return view('player.player-nav-js');
    }
}
