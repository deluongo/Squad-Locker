<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Team; # <--- NEW
use p4\Player; # <--- NEW

class FindTeamController extends Controller
{
    public function show()
    {
        $teams = Team::all();

        $player = Player::where('name', '=', 'CaptainAwesome650')->first();

        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = 'active';
        $activity_stream_heading = '';

        $name = $player->name;
        $affiliation = $player->affiliation;
        $position = $player->position;
        $archetype = $player->archetype;

        $data = ['name' => $name, 'affiliation' => $affiliation, 'position' => $position, 'archetype' => $archetype, 'teams' => $teams,  'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading];
        return view('findteam.show')->with($data);
    }
}
