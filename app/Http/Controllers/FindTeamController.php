<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Team; # <--- NEW
use p4\Player; # <--- NEW

class FindTeamController extends Controller
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
        $teams = Team::all();

        $player = Player::where('name', '=', 'CaptainAwesome650')->first();

        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = 'active';

        $player = Player::where('name', '=', Auth::user()->name )->first();

        $teams_owned = [];
        $teams_on = [];

        foreach($player->teams as $team) {
            if ($team->pivot->status == 1) {
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 2) {
                $teams_on[] = $team;
            }
        }

        $name = $player->name;
        $affiliation = $player->affiliation;
        $position = $player->position;
        $archetype = $player->archetype;

        $search_movement = ['Ball-Movement', 'Isolation', '7 Seconds', 'Run & Gun', 'Player Movement'];
        $search_tempo  = ['Fast', 'Uptempo', 'Deliberate', 'Patient', 'Slow'];
        $search_affiliation_type = ['Pro-Am Team', 'Rivit City', 'Sunset Beach', 'Old Town', 'Cross Park Squad'];
        $search_offense = ['Motion', 'Triangle', 'Free Lance', 'Inside Out', '7 Seconds'];
        $search_defense = ['Team-D', 'Man', 'No-Help', 'Zone', 'Cross-Match'];
        $search_members = [1,2,3,4,5,6,7,8];
        $search_type = ['MyPark Squad', 'Pro-Am Team'];

        $player_profile_pic = $player->player_profile_pic;
        $data = ['search_type' => $search_type, 'search_members' => $search_members, 'search_movement' => $search_movement,
               'search_tempo' => $search_tempo, 'search_affiliation_type' => $search_affiliation_type,
               'search_offense' => $search_offense, 'search_defense' => $search_defense, 'find_teams_heading' => $find_teams_heading,
               'name' => $name, 'affiliation' => $affiliation, 'position' => $position, 'archetype' => $archetype, 'teams' => $teams,
               'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading,
               'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
               'activity_stream_heading' => $activity_stream_heading, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on,
               'player_profile_pic' => $player_profile_pic,
           ];

        return view('findteam.show')->with($data);
    }

    public function post(Request $request)
    {

        $teams = Team::all();

        $player = Player::where('name', '=', 'CaptainAwesome650')->first();

        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = 'active';

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

        $name = $player->name;
        $affiliation = $player->affiliation;
        $position = $player->position;
        $archetype = $player->archetype;

        $search_movement = $request->input('search_movement');
        $search_tempo  = $request->input('search_tempo');
        $search_affiliation_type = $request->input('search_affiliation_type');
        $search_offense = $request->input('search_offense');
        $search_defense = $request->input('search_defense');
        $search_members = $request->input('search_members');

        $search_type = [];
        if (in_array('Pro-Am Team', $search_affiliation_type)) {
            array_push($search_type, 'Pro-Am Team');
        }
        if ((in_array('MyPark Squad', $search_affiliation_type) AND sizeof($search_affiliation_type) >1) || (!in_array('MyPark Squad', $search_affiliation_type) AND sizeof($search_affiliation_type) > 0) ) {
            array_push($search_type, 'MyPark Squad');
        }

        $player_profile_pic = $player->player_profile_pic;
        $data = ['search_type' => $search_type, 'search_members' => $search_members, 'search_movement' => $search_movement,
            'search_tempo' => $search_tempo, 'search_affiliation_type' => $search_affiliation_type,
            'search_offense' => $search_offense, 'search_defense' => $search_defense, 'find_teams_heading' => $find_teams_heading,
            'name' => $name, 'affiliation' => $affiliation, 'position' => $position, 'archetype' => $archetype, 'teams' => $teams,
            'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading,
            'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
            'activity_stream_heading' => $activity_stream_heading, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on,
            'player_profile_pic' => $player_profile_pic
        ];

        return view('findteam.show')->with($data);
    }
}
