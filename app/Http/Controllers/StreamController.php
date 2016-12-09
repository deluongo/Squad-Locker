<?php

namespace p4\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player;

class StreamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = 'active';
        $find_teams_heading = '';

        /* ======================================================
        Navigation - List of teams
        ====================================================== */
        $teams_owned = [];
        $teams_on = [];
        
        $player = Player::where('name', '=', Auth::user()->name )->first();
        // Passes lists of teams owned.
        foreach($player->teams as $team) {
            if ($team->pivot->status == 1) {
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 2) {
                $teams_on[] = $team;
            }
        }

        $data = ['find_teams_heading' => $find_teams_heading, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on];
        return view('stream.show')->with($data);
    }
}
