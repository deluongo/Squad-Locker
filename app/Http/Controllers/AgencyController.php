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
        /* ======================================================
        Load Player Data
        ====================================================== */
        $players = Player::all();
        $player = Player::where('id', '=', Auth::user()->id)->first();
        $actice_user_player = Player::where('id', '=', Auth::user()->id)->first();
        /* ======================================================
        Navigation
        ====================================================== */
        //Current Header
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = 'active';
        $activity_stream_heading = '';
        $find_teams_heading = '';

        //List of teams owned
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

        /* ======================================================
        Free Agency Banner Content
        ====================================================== */
        $name = $player->name;
        $position = $player->position;
        $archetype = $player->archetype;
        $archetype2 = $player->archetype2;
        $player_profile_pic = $player->player_profile_pic;
        $user_avatar = $player->player_profile_pic;

        $search_name = '';
        $search_position = ['PG', 'SG', 'SF', 'PF', 'C'];
        $search_overall_min = 60;
        $search_overall_max = 99;
        $search_overall = [];

        $search_archetype = ['Playmaker', 'Lockdown Defender', 'Sharp Shooter', 'Slasher', 'Athletic Finisher', 'Stretch Big', 'Post Scorer', 'Glass Cleaner', 'Point Forward', 'Shot Creator'];
        $search_archetype2 = ['Playmaker', 'Lockdown Defender', 'Sharp Shooter', 'Slasher', 'Athletic Finisher', 'Stretch Big', 'Post Scorer', 'Glass Cleaner', 'Point Forward', 'Shot Creator'];

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

        /* ======================================================
        View Player | Teams & Teammates
        ====================================================== */

        //team array instantiation
        $view_player_teams_owned = [];
        $view_player_teams_on = [];
        $disable_invites_for_these_team_ids = [];
        $teams_view_player_requested_to_join = [];

        //Identify the list of teams an invite can be sent from
        $send_invite_from_one_of_these_teams = [];
        $trigger_accept_request_button_for_these_teams = [];


        /* ======================================================
        Data Object
        ====================================================== */
        $data = ['find_teams_heading' => $find_teams_heading,  'search_type_role' => $search_type_role, 'search_name' => $search_name ,
        'search_archetype' => $search_archetype,  'search_archetype2' => $search_archetype2, 'search_position' => $search_position,
        'search_type' => $search_type, 'search_overall_min' => $search_overall_min, 'search_overall_max' => $search_overall_max, 'search_overall' => $search_overall,
        'search_role' => $search_role, 'search_style' => $search_style, 'name' => $name,  'archetype' => $archetype,
        'position' => $position, 'archetype2' => $archetype2, 'players' => $players, 'team_update_heading' => $team_update_heading,
        'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading,
        'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading,  'user_avatar' => $user_avatar,
        'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'player_profile_pic' => $player_profile_pic,
        'trigger_accept_request_button_for_these_teams' => $trigger_accept_request_button_for_these_teams,
        'send_invite_from_one_of_these_teams' => $send_invite_from_one_of_these_teams
    ];

        return view('agency.show')->with($data);
    }


    public function store(Request $request)
    {

        /* ======================================================
        Load Player Data
        ====================================================== */
        $players = Player::all();
        $player = Player::where('id', '=', Auth::user()->id )->first();

        /* ======================================================
        Navigation
        ====================================================== */
        //Current Header
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = 'active';
        $activity_stream_heading = '';
        $find_teams_heading = '';

        //List of teams owned
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

        /* ======================================================
        Free Agency Banner Content
        ====================================================== */
        $name = $player->name;
        $position = $player->position;
        $archetype = $player->archetype;
        $archetype2 = $player->archetype2;
        $player_profile_pic = $player->player_profile_pic;
        $user_avatar = $player->player_profile_pic;


        /* ======================================================
        View Player | Teams & Teammates
        ====================================================== */

        //team array instantiation
        $view_player_teams_owned = [];
        $view_player_teams_on = [];
        $disable_invites_for_these_team_ids = [];
        $teams_view_player_requested_to_join = [];

        // check pivot table -> status
        foreach($player->teams as $team) {
            if ($team->pivot->status == 1) {
                //List of Teams View Player owns
                $view_player_teams_owned[] = $team;
            }
            elseif($team->pivot->status == 2) {
                //List of Teams View Player is rostered on
                $view_player_teams_on[] = $team;
                //Disable "send invite" if player is rostered
                $disable_invites_for_these_team_ids[] = $team->id;
            }
            elseif($team->pivot->status == 3) {
                //Disable "send invite" if invite was already sent
                $disable_invites_for_these_team_ids[] = $team->id;
            }
            elseif($team->pivot->status == 4) {
                //List of teams this view user has requested to join
                $teams_view_player_requested_to_join[] = $team->id;
            }
        }

        //merge team arrays | used to find list of teammates
        $all_teams = array_merge($view_player_teams_owned, $view_player_teams_on);

        //teammate array instantiation
        $team_members = [];
        $player_names = [];

        //search all teams
        foreach($all_teams as $team) {
            //search all players
            foreach($team->players as $player) {
                //If teammate is not alreaady in the teammate list, add them as a teammate
                if (!in_array($player->name, $player_names)) {
                    //Used for reference
                    $player_names[] = $player->name;
                    //Used to display teammate list on front end
                    $team_members[] = $player;
                }
            }
        }

        /* ======================================================
        Active User | Teams & Teammates
        ====================================================== */

        //Identify the list of teams an invite can be sent from
        $send_invite_from_one_of_these_teams = [];
        $trigger_accept_request_button_for_these_teams = [];

        //Iterate Active User's Team List
        foreach($teams_owned as $team) {
            //If team is not diabled
            if(!in_array($team->id, $disable_invites_for_these_team_ids)) {
                //and team has not received an incoming request
                if(!in_array($team->id, $teams_view_player_requested_to_join)){
                    //Add to SEND INVITE Button's team list
                    $send_invite_from_one_of_these_teams[] = $team;
                }
                //if team has received an incoming request
                else {
                    //Add to ACCEPT REQUEST Button's team list
                    $trigger_accept_request_button_for_these_teams[] = $team;
                }
            }
        }


        /* ======================================================
        Form Submit Handing
        ====================================================== */

        //Filter Form Handeling
        $search_name = $request->input('search_name');

        if ($request->input('search_position') != null) {
            $search_position = $request->input('search_position');
        }

        $search_overall_min = $request->input('search_overall_min');

        $search_overall_max = $request->input('search_overall_max');

        $search_overall = 0;

        $search_archetype = $request->input('search_archetype');


        $search_archetype2 = $request->input('search_archetype2');


        $search_type_role = $request->input('search_type');


        $search_style = $request->input('search_style');


        //Player Invite Handeling
        $search_role = [];
        $search_type = [];
        foreach($search_type_role as $filter){
            array_push($search_type, explode(' | ', $filter)[0]);
            array_push($search_role, explode(' | ', $filter)[1]);
        }

        //Player Invite Processing
        $submit_val = $request->input('submit_type');
        $submit_vals_array = explode("|", $submit_val);
        if($submit_val!="filter"){
          //Form Request Data -> Player & Team ID
          $invite_this_player_id = intval($submit_vals_array[0]);
          $send_invite_from_this_team_id = intval($submit_vals_array[1]);
          //Send Invite
          $send_invite_to_this_player = Player::where('id','=', $invite_this_player_id)->first();
          $send_invite_from_this_team = Team::where('id','=', $send_invite_from_this_team_id)->first();

          # Connect this tag to this book
          # Status reference
          # ---------------------------- #
          # 1 is ownership
          # 2 is on active roster
          # 3 invited, waiting response
          # 4 requested, waiting reponse

          /*-- ------------------ --*/
          /*-- SAVE INVITE STATUS --*/
          /*-- ------------------ --*/

          if ($send_invite_to_this_player->teams()->where('id', $send_invite_from_this_team_id)->pivot->status == 4) {
              $send_invite_to_this_player->teams()->save($send_invite_from_this_team, ['status' => 2]);
          }
          else {
              $send_invite_to_this_player->teams()->save($send_invite_from_this_team, ['status' => 3]);
          }

          \Session::flash('flash_message', "{$player->name} succesfully invited to join {$team->name}!");
        }



        /* ======================================================
        Data Object
        ====================================================== */
        $data = ['find_teams_heading' => $find_teams_heading,  'search_type_role' => $search_type_role, 'search_name' => $search_name ,
        'search_archetype' => $search_archetype,  'search_archetype2' => $search_archetype2, 'search_position' => $search_position,
        'search_type' => $search_type, 'search_overall_min' => $search_overall_min, 'search_overall_max' => $search_overall_max, 'search_overall' => $search_overall,
        'search_role' => $search_role, 'search_style' => $search_style, 'name' => $name,  'archetype' => $archetype,
        'position' => $position, 'archetype2' => $archetype2, 'players' => $players, 'team_update_heading' => $team_update_heading,
        'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading,
        'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading,  'user_avatar' => $user_avatar,
        'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'player_profile_pic' => $player_profile_pic,
        'trigger_accept_request_button_for_these_teams' => $trigger_accept_request_button_for_these_teams,
        'send_invite_from_one_of_these_teams' => $send_invite_from_one_of_these_teams
    ];

        return view('agency.show')->with($data);

        //return view('findteam.show')->with($data);
        //return View::make("findteam.tablediv")->with($data)->render();
    }












}
