<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function show()
    {
        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = 'active';
        $activity_stream_heading = '';

        $data = ['team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading];
        return view('agency.show')->with($data);
    }
}
