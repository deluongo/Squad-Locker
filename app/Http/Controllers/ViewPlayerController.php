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

        $user_avatar = Player::where('name', '=', Auth::user()->name)->first()->player_profile_pic;

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
            'player_profile_pic' => $player_profile_pic, 'team_members' => $team_members, 'all_teams' => $all_teams,
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
