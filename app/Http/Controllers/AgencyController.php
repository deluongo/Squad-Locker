<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
#use p4\Team; # <--- NEW
use p4\Player; # <--- NEW

class AgencyController extends Controller
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
        $players = Player::all();

        $player = $players->where('name', '=', 'CaptainAwesome650')->first();

        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = 'active';
        $activity_stream_heading = '';
        $find_teams_heading = '';

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

        $search_name = '';
        $search_position = ['PG', 'SG', 'SF', 'PF', 'C'];
        $search_rep_status = ['Rookie', 'Pro', 'All-Star', 'Superstar', 'Legend'];
        $search_rep_level = [1,2,3,4,5];
        $search_affiliation = ['Pro-Am Team', 'Rivit City', 'Sunset Beach', 'Old Town', 'Cross Park Squad'];
        $search_archetype = ['Playmaker', 'Lockdown Defender', 'Sharp Shooter', 'Slasher', 'Athletic Finisher', 'Stretch Big', 'Post Scorer', 'Glass Cleaner', 'Point Forward', 'Shot Creator'];
        $search_type_role = ['On-Ball | Facilitator','On-Ball | Scorer','Off-Ball | Facilitator','Off-Ball | Finisher'];
        $search_style = ['Drible-N-Dime', 'Run-The-Break', 'Pass-To-Assist-King', 'Assist-King', 'Ball-Movement-Coach', 'Screen-And-D', 'Inside-Out-Big',
                    'Defensive-Anchor', 'Boards-N-Outlets', 'Putback-King','Shot-Creator', 'Ankle-Breaking-Driver', 'Blow-By-Dunker', 'Isolation-Specialist',
                    'Post-Move-Master', 'Fast-Break-Finisher', 'Pick-N-Roll-Big', 'Second-Chance-Only', 'Backdoor-Posterizer', 'Catch-N-Shoot', 'Slash-N-Shoot'];
        $search_role = [];
        $search_type = [];
        foreach($search_type_role as $filter){
            array_push($search_type, explode(' | ', $filter)[0]);
            array_push($search_role, explode(' | ', $filter)[1]);
        }

        $data = ['find_teams_heading' => $find_teams_heading,  'search_type_role' => $search_type_role, 'search_name' => $search_name ,
        'search_affiliation' => $search_affiliation, 'search_archetype' => $search_archetype, 'search_position' => $search_position,
        'search_type' => $search_type, 'search_rep_level' => $search_rep_level, 'search_rep_status' => $search_rep_status,
        'search_role' => $search_role, 'search_style' => $search_style, 'name' => $name, 'affiliation' => $affiliation,
        'position' => $position, 'archetype' => $archetype, 'players' => $players, 'team_update_heading' => $team_update_heading,
        'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading,
        'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading,
        'teams_owned' => $teams_owned, 'teams_on' => $teams_on];

        return view('agency.show')->with($data);
    }

    public function post(Request $request)
    {
        $players = Player::all();

        $player = $players->where('name', '=', 'CaptainAwesome650')->first();

        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = 'active';
        $activity_stream_heading = '';
        $find_teams_heading = '';

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

        $search_name = '';
        $search_position = ['PG', 'SG', 'SF', 'PF', 'C'];
        $search_rep_status = ['Rookie', 'Pro', 'All-Star', 'Superstar', 'Legend'];
        $search_rep_level = [1,2,3,4,5];
        $search_affiliation = ['Pro-Am Team', 'Rivit City', 'Sunset Beach', 'Old Town', 'Cross Park Squad'];
        $search_archetype = ['Playmaker', 'Lockdown Defender', 'Sharp Shooter', 'Slasher', 'Athletic Finisher', 'Stretch Big', 'Post Scorer', 'Glass Cleaner', 'Point Forward', 'Shot Creator'];
        $search_type_role = ['On-Ball | Facilitator','On-Ball | Scorer','Off-Ball | Facilitator','Off-Ball | Finisher'];
        $search_style = ['Drible-N-Dime', 'Run-The-Break', 'Pass-To-Assist-King', 'Assist-King', 'Ball-Movement-Coach', 'Screen-And-D', 'Inside-Out-Big',
                    'Defensive-Anchor', 'Boards-N-Outlets', 'Putback-King','Shot-Creator', 'Ankle-Breaking-Driver', 'Blow-By-Dunker', 'Isolation-Specialist',
                    'Post-Move-Master', 'Fast-Break-Finisher', 'Pick-N-Roll-Big', 'Second-Chance-Only', 'Backdoor-Posterizer', 'Catch-N-Shoot', 'Slash-N-Shoot'];
        $search_role = [];

        $search_name = $request->input('search_name');

        if ($request->input('search_position') != null) {
            $search_position = $request->input('search_position');
        }

        if ($request->input('search_rep_status') != null) {
            $search_rep_status = $request->input('search_rep_status');
        }
        if ($request->input('search_rep_level') != null) {
            $search_rep_level = $request->input('search_rep_level');
        }

        if ($request->input('search_affiliation') != null) {
            $search_affiliation = $request->input('search_affiliation');
        }

        if ($request->input('search_archetype') != null) {
            $search_archetype = $request->input('search_archetype');
        }

        if ($request->input('search_type_role') != null) {
            $search_type_role = $request->input('search_type');
        }

        if ($request->input('search_style') != null) {
            $search_style = $request->input('search_style');
        }

        $search_role = [];
        $search_type = [];
        foreach($search_type_role as $filter){
            array_push($search_type, explode(' | ', $filter)[0]);
            array_push($search_role, explode(' | ', $filter)[1]);
        }


        $data = ['find_teams_heading' => $find_teams_heading,  'search_type_role' => $search_type_role, 'search_name' => $search_name,
        'search_affiliation' => $search_affiliation, 'search_archetype' => $search_archetype, 'search_position' => $search_position,
        'search_type' => $search_type, 'search_rep_level' => $search_rep_level, 'search_rep_status' => $search_rep_status,
        'search_role' => $search_role, 'search_style' => $search_style, 'name' => $name, 'affiliation' => $affiliation,
        'position' => $position, 'archetype' => $archetype, 'players' => $players, 'team_update_heading' => $team_update_heading,
        'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading,
        'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading,
        'teams_owned' => $teams_owned, 'teams_on' => $teams_on];

        return view('agency.show')->with($data);
    }


    public function post2(Request $request)
    {
      $players = Player::all();


     $search_name = '';
     $search_position = ['PG', 'SG', 'SF', 'PF', 'C'];
     $search_rep_status = ['Rookie', 'Pro', 'All-Star', 'Superstar', 'Legend'];
     $search_rep_level = [1,2,3,4,5];
     $search_affiliation = ['Pro-Am Team', 'Rivit City', 'Sunset Beach', 'Old Town', 'Cross Park Squad'];
     $search_archetype = ['Playmaker', 'Lockdown Defender', 'Sharp Shooter', 'Slasher', 'Athletic Finisher', 'Stretch Big', 'Post Scorer', 'Glass Cleaner', 'Point Forward', 'Shot Creator'];
     $search_type_role = ['On-Ball | Facilitator','On-Ball | Scorer','Off-Ball | Facilitator','Off-Ball | Finisher'];
     $search_style = ['Drible-N-Dime', 'Run-The-Break', 'Pass-To-Assist-King', 'Assist-King', 'Ball-Movement-Coach', 'Screen-And-D', 'Inside-Out-Big',
                 'Defensive-Anchor', 'Boards-N-Outlets', 'Putback-King','Shot-Creator', 'Ankle-Breaking-Driver', 'Blow-By-Dunker', 'Isolation-Specialist',
                 'Post-Move-Master', 'Fast-Break-Finisher', 'Pick-N-Roll-Big', 'Second-Chance-Only', 'Backdoor-Posterizer', 'Catch-N-Shoot', 'Slash-N-Shoot'];
     $search_role = [];
      $search_name = $request->input('search_name');

      if ($request->input('search_position') != null) {
          $search_position = $request->input('search_position');
      }

      if ($request->input('search_rep_status') != null) {
          $search_rep_status = $request->input('search_rep_status');
      }
      if ($request->input('search_rep_level') != null) {
          $search_rep_level = $request->input('search_rep_level');
      }

      if ($request->input('search_affiliation') != null) {
          $search_affiliation = $request->input('search_affiliation');
      }

      if ($request->input('search_archetype') != null) {
          $search_archetype = $request->input('search_archetype');
      }

      if ($request->input('search_type_role') != null) {
          $search_type_role = $request->input('search_type');
      }

      if ($request->input('search_style') != null) {
          $search_style = $request->input('search_style');
      }

      $search_role = [];
      $search_type = [];
      foreach($search_type_role as $filter){
          array_push($search_type, explode(' | ', $filter)[0]);
          array_push($search_role, explode(' | ', $filter)[1]);
      }

      $data = ['search_type_role' => $search_type_role, 'search_name' => $search_name,
      'search_affiliation' => $search_affiliation, 'search_archetype' => $search_archetype, 'search_position' => $search_position,
      'search_type' => $search_type, 'search_rep_level' => $search_rep_level, 'search_rep_status' => $search_rep_status,
      'search_role' => $search_role, 'search_style' => $search_style, 'players' => $players
      ];

      return view('agency.agency-ajax')->with($data);
      }
}
