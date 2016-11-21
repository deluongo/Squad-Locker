<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }

    public function post(Request $request)
    {
        $user = User::where('username', '=', $request->input('username'))->first();

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


        //Profile
        $search_name='';
        if (!$request->input('search_style') == null) {
            $search_style = $request->input('search_style');
        }
        if (!$request->input('search_type') == null) {
            $search_type = $request->input('search_type');
        }
        if (!$request->input('search_role') == null) {
            $search_role = $request->input('search_role');
        }
        if (!$request->input('search_affiliation') == null) {
            $search_affiliation = $request->input('search_affiliation');
        }
        if (!$request->input('search_archetype') == null) {
            $search_archetype = $request->input('search_archetype');
        }
        if (!$request->input('search_position') == null) {
            $search_position = $request->input('search_position');
        }
        if (!$request->input('search_rep_status') == null) {
            $search_rep_status = $request->input('search_rep_status');
        }
        if (!$request->input('search_rep_level') == null) {
            $search_rep_level = $request->input('search_rep_level');
        }

        $data = [ 'search_name' => $search_name , 'search_affiliation' => $search_affiliation, 'search_archetype' => $search_archetype, 'search_position' => $search_position, 'search_type' => $search_type, 'search_rep_level' => $search_rep_level, 'search_rep_status' => $search_rep_status, 'search_role' => $search_role, 'search_style' => $search_style, 'name' => $name, 'affiliation' => $affiliation, 'position' => $position, 'archetype' => $archetype, 'players' => $players, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading];
        return view('player.show')->with($data);
    }
}
