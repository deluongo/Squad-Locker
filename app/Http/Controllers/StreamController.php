<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function show()
    {
        return view('stream.show');
    }
}
