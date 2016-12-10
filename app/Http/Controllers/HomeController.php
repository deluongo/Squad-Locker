<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\http\Response;
use Illuminate\Support\Facades\Redirect;
use p4\Player;

class HomeController extends Controller
{

    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Player::where('name', '=', Auth::user()->name )->first()){
        return Redirect::to('player');
     }
     else {
        return Redirect::to('newplayer');
     }
    }
}
