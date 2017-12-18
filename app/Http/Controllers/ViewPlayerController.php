<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player;
use p4\Team;

class ViewPlayerController extends Controller
{

    /**
    * Display the specified resource.
    *
    * @param  int
    * @return \Illuminate\Http\Response
    */

    /* ======================================================
    Display on load
    ====================================================== */
    public function show($name)
    {
        $player = Player::where('name', '=', $name )->first();
        $active_user_player = Player::where('user_id', '=', Auth::user()->id )->first();
        $active_user_player_id = $active_user_player->id;

        /* ======================================================
        Load Display Values
        ====================================================== */
        if($player) {
            //Profile
            $name = $player->name;
            $affiliation = $player->affiliation;
            $archetype = $player->archetype;
            $archetype2 = $player->archetype2;
            $position = $player->position;
            $tagline = $player->tagline;
            $player_bg_pic = $player->player_bg_pic;
            $player_profile_pic = $player->player_profile_pic;

            //Park
            $rep_level = $player->rep_level;
            $rep_progress = $player->rep_progress;

            //Social
            $twitter = $player->twitter;
            $youtube = $player->youtube;
            $twitch = $player->twitch;

            //Playstyle
            $type = $player->type;
            $role = $player->role;
            $style = $player->style;

            //Stats
            $overall_talent_score = $player->overall_talent_score;
            $team_grade = $player->team_grade;
            $skill_grade = $player->skill_grade;
            $per = $player->per;
            $fg = $player->fg;
            $apg = $player->apg;
            $apg_ppg = $player->apg_ppg;
            $ppg = $player->ppg;
            $rpg = $player->rpg;

            //Colors
            $progress_chart_color = $player->progress_chart_color;
            $progress_bar_color = $player->progress_bar_color;
            $team_grade_color = $player->team_grade_color;
            $skill_grade_color = $player->skill_grade_color;
            $per_color = $player->per_color;
            $fg_color = $player->fg_color;
            $apg_color = $player->apg_color;
            $apg_ppg_color = $player->apg_ppg_color;
            $ppg_color = $player->ppg_color;
            $rpg_color = $player->rpg_color;
        }
        else {
            return 'Player data not found.';
        }

        /* ======================================================
        Navigation Variables
        ====================================================== */
        $user_avatar = Player::where('user_id', '=', Auth::user()->id )->first()->player_profile_pic;
        $my_player_heading = 'active';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = '';

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

        //team array instantiation
        $teams_owned_by_active_user = [];
        $teams_owned = [];
        $teams_on = [];

        // check pivot table -> status
        foreach($active_user_player->teams as $team) {
            if ($team->pivot->status == 1) {
                //List of Teams Active User owns
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 2) {
                //List of Teams Active User is rostered on
                $teams_on[] = $team;
            }
        }

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




        $data = ['team_update_heading' => $team_update_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading,
            'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'my_player_heading' => $my_player_heading,
            'name' => $name, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter,
            'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role,
            'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg,
            'ppg' => $ppg, 'rpg' => $rpg, 'team_grade_color' => $team_grade_color, 'skill_grade_color' => $skill_grade_color, 'per_color' => $per_color,
            'per_color' => $per_color, 'fg_color' => $fg_color, 'apg_color' => $apg_color, 'ppg_color' => $ppg_color, 'rpg_color' => $rpg_color,
            'apg_ppg_color' => $apg_ppg_color, 'progress_chart_color' => $progress_chart_color, 'overall_talent_score' => $overall_talent_score,
            'find_teams_heading' => $find_teams_heading, 'progress_bar_color' => $progress_bar_color, 'user_avatar' => $user_avatar,
            'progress_chart_color' => $progress_chart_color, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'player_bg_pic' => $player_bg_pic,
            'player_profile_pic' => $player_profile_pic, 'team_members' => $team_members, 'all_teams' => $all_teams, 'active_user_player' => $active_user_player,
            'teams_owned_by_active_user' => $teams_owned_by_active_user, 'disable_invites_for_these_team_ids' => $disable_invites_for_these_team_ids,
            'send_invite_from_one_of_these_teams' => $send_invite_from_one_of_these_teams, 'trigger_accept_request_button_for_these_teams' => $trigger_accept_request_button_for_these_teams,
            'view_player_teams_owned' => $view_player_teams_owned, 'view_player_teams_on' => $view_player_teams_on, 'active_user_player_id' => $active_user_player_id,
            'player' => $player, 'archetype2' => $archetype2

        ];

        return view('viewplayer.show')->with($data);
    }


    /* ======================================================
    Display on form submit
    ====================================================== */
    public function post(Request $request, $name)
    {

      $player = Player::where('name', '=', $name )->first();

      if($player) {
          //Profile
          $name = $player->name;
          $affiliation = $player->affiliation;
          $archetype = $player->archetype;
          $position = $player->position;
          $tagline = $player->tagline;
          $player_bg_pic = $player->player_bg_pic;
          $player_profile_pic = $player->player_profile_pic;


          //Park
          $rep_level = $player->rep_level;
          $rep_progress = $player->rep_progress;

          //Social
          $twitter = $player->twitter;
          $youtube = $player->youtube;
          $twitch = $player->twitch;

          //Playstyle
          $type = $player->type;
          $role = $player->role;
          $style = $player->style;

          //Stats
          $overall_talent_score = $player->overall_talent_score;
          $team_grade = $player->team_grade;
          $skill_grade = $player->skill_grade;
          $per = $player->per;
          $fg = $player->fg;
          $apg = $player->apg;
          $apg_ppg = $player->apg_ppg;
          $ppg = $player->ppg;
          $rpg = $player->rpg;

          //Colors
          $progress_chart_color = $player->progress_chart_color;
          $progress_bar_color = $player->progress_bar_color;
          $team_grade_color = $player->team_grade_color;
          $skill_grade_color = $player->skill_grade_color;
          $per_color = $player->per_color;
          $fg_color = $player->fg_color;
          $apg_color = $player->apg_color;
          $apg_ppg_color = $player->apg_ppg_color;
          $ppg_color = $player->ppg_color;
          $rpg_color = $player->rpg_color;
      }
      else {
          return 'Player data not found.';
      }

      //Navigation Active
      $my_player_heading = 'active';
      $update_heading = '';
      $my_team_heading = '';
      $team_update_heading = '';
      $free_agency_heading = '';
      $activity_stream_heading = '';
      $find_teams_heading = '';

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

      $all_teams = array_merge($teams_owned, $teams_on);

      $team_members = [];
      $player_names = [];

      foreach($all_teams as $team) {
          foreach($team->players as $player) {
              if (!in_array($player->name, $player_names)) {
                  $player_names[] = $player->name;
                  $team_members[] = $player;
              }
          }
      }

      /* ======================================================
      Handle Magic Form Data
      ====================================================== */

      // validate the variables ======================================================
      // if any of these variables don't exist, add an error to our $errors array

      //if (empty($request->input('')) {
      //    $ = "";
      //}



      $data = ['team_update_heading' => $team_update_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading,
          'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'my_player_heading' => $my_player_heading,
          'name' => $name, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter,
          'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role,
          'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg,
          'ppg' => $ppg, 'rpg' => $rpg, 'team_grade_color' => $team_grade_color, 'skill_grade_color' => $skill_grade_color, 'per_color' => $per_color,
          'per_color' => $per_color, 'fg_color' => $fg_color, 'apg_color' => $apg_color, 'ppg_color' => $ppg_color, 'rpg_color' => $rpg_color,
          'apg_ppg_color' => $apg_ppg_color, 'progress_chart_color' => $progress_chart_color, 'overall_talent_score' => $overall_talent_score,
          'find_teams_heading' => $find_teams_heading, 'progress_bar_color' => $progress_bar_color,
          'progress_chart_color' => $progress_chart_color, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'player_bg_pic' => $player_bg_pic,
          'player_profile_pic' => $player_profile_pic, 'team_members' => $team_members, 'all_teams' => $all_teams
      ];

      return view('viewplayer.show')->with($data);
    }
}
