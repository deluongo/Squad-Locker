<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player;
use p4\Team;

class PlayerController extends Controller
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

    /**
    * Display the specified resource.
    *
    * @param  int
    * @return \Illuminate\Http\Response
    */

    /* ======================================================
    Display on load
    ====================================================== */
    public function show()
    {
        $player = Player::where('name', '=', Auth::user()->name )->first();

        if($player) {
            //Profile
            $name = $player->name;
            $affiliation = $player->affiliation;
            $archetype = $player->archetype;
            $position = $player->position;
            $tagline = $player->tagline;
            $player_bg_pic = $player->player_bg_pic;
            $player_profile_pic = $player->player_profile_pic;
            //$bg_image = $player->bg_image;
            //$profile_pic = $player->profile_pic;

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
        Track Active Heading
        ====================================================== */
        $my_player_heading = 'active';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = '';

        /* ======================================================
        Pass Team Relationships
        ====================================================== */

        //Team relatinship arrays
        $teams_owned = [];
        $teams_on = [];
        $invited = [];

        //Fill arrays
        foreach($player->teams as $team) {
           if ($team->pivot->status == 3) {
               $invited[] = $team;
           }
            elseif ($team->pivot->status == 1) {
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 2) {
                $teams_on[] = $team;
            }
        }

        //All active teams
        $all_teams = array_merge($teams_owned, $teams_on);
        //All teammembers as objects
        $team_members = [];
        //All teammembers as names
        $player_names = [];

        //Fill arrays
        foreach($all_teams as $team) {
            foreach($team->players as $player) {
                if (!in_array($player->name, $player_names)) {
                    $player_names[] = $player->name;
                    $team_members[] = $player;
                }
            }
        }


        $chart_data = [];
        foreach($invited as $team) {
           //$id = $team->id;
           $chart_name = 'Chart'.$team->id;

           $chart_per = $team->per / 14 * 100;
           $chart_ppg = $team->ppg / 12 * 100;
           $chart_apg = $team->apg / 3 * 100;
           $chart_fg = $team->fg;
           $chart_apg_ppg = $team->apg_ppg * 100;
           $chart_rpg = $team->rpg / 3 * 100;

           //$min = min($chart_per, $chart_ppg, $chart_apg, $chart_fg, $chart_apg_ppg, $chart_rpg);
           //$max = max($chart_per, $chart_ppg, $chart_apg, $chart_fg, $chart_apg_ppg, $chart_rpg);

           //$chart_per = ($chart_per - $min) / ($max - $min);
           //$chart_ppg = ($chart_ppg - $min) / ($max - $min);
           //$chart_apg = ($chart_apg - $min) / ($max - $min);
           //$chart_fg = ($chart_fg - $min) / ($max - $min);
           //$chart_apg_ppg = ($chart_apg_ppg - $min) / ($max - $min);
           //$chart_rpg = ($chart_rpg - $min) / ($max - $min);

           //$$chart_name = array($team->per, $team->ppg, $team->apg, $team->fg, $team->apg_ppg, $team->rpg);
           $$chart_name = array($chart_per, $chart_ppg, $chart_apg, $chart_fg, $chart_apg_ppg, $chart_rpg);

           //$Chart3 = array(1,2,3,4,5,6);
           $chart_data[$chart_name] = $$chart_name;
        }

        /* ======================================================
        Data Object
        ====================================================== */
        $invite_accepted = 'no';
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
            'player_profile_pic' => $player_profile_pic, 'team_members' => $team_members, 'all_teams' => $all_teams, 'invited' => $invited,
            'invite_accepted' => $invite_accepted,
        ];

        //$chart_name => $chart_
        $data = array_merge($data, $chart_data);

        return view('player.show')->with($data);
    }

    /* ======================================================
    Display on form submit
    ====================================================== */
    public function post_extra(Request $request)
    {
        $player = Player::where('name', '=', Auth::user()->name )->first();

        if($player) {
            //Profile
            $name = $player->name;
            $affiliation = $player->affiliation;
            $archetype = $player->archetype;
            $position = $player->position;
            $tagline = $player->tagline;
            $player_bg_pic = $player->player_bg_pic;
            $player_profile_pic = $player->player_profile_pic;
            //$bg_image = $player->bg_image;
            //$profile_pic = $player->profile_pic;

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

        /* ======================================================
        Pass Team Relationships
        ====================================================== */

        //Team relatinship arrays
        $teams_owned = [];
        $teams_on = [];
        $invited = [];

        /* ======================================================
        Navigation - List of teams
        ====================================================== */
        foreach($player->teams as $team) {
           if ($team->pivot->status == 3) {
               $invited[] = $team;
           }
            elseif ($team->pivot->status == 1) {
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 2) {
                $teams_on[] = $team;
            }
        }



        //All active teams
        $all_teams = array_merge($teams_owned, $teams_on);
        //All teammembers as objects
        $team_members = [];
        //All teammembers as names
        $player_names = [];

        //Fill arrays
        foreach($all_teams as $team) {
            foreach($team->players as $player) {
                if (!in_array($player->name, $player_names)) {
                    $player_names[] = $player->name;
                    $team_members[] = $player;
                }
            }
        }


        /* ======================================================
        Attatch Players to Teams
        ====================================================== */

        //Attatch authenticated user as team owner (Status = 1)
        if(!$owner->teams->contains($team->id)) {
            $owner->teams()->attach($team->id, array('status' => 1));
        }

        /* ======================================================
        AJAX FORM DATA
        ====================================================== */

        $invite_accepted = $request->input('acceptInvite');

        /* ======================================================
        Data Object
        ====================================================== */


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
            'player_profile_pic' => $player_profile_pic, 'team_members' => $team_members, 'all_teams' => $all_teams, 'invited' => $invited,
            'Chart3' => $Chart3, 'invite_accepted' => $invite_accepted
        ];

        return view('player.show')->with($data);

    }

    public function post(Request $request)
    {
      $player = Player::where('name', '=', Auth::user()->name )->first();

      $invite_accepted = $request->input('acceptInvite');
      $team_id = $request->input('inviTeam');

      $team = Team::where('id', '=', $team_id)->first();

      //Cleaner way? Help?
      //if(!$player->teams()->where('id', '=', $team_id)->pivot->status == 1) {
      //   $player->teams()->attach($team->id, array('status' => 2));
      //   $test_status1 = 'here';
      //

      //return $this->belongsToMany('App\Role')->withPivot('additional', 'attributes', 'here');
      //ser::find(1)->roles()->updateExistingPivot($roleId, $attributes);

      foreach($team->players as $player) {
         $test_status1 = $player->pivot->status;
            if (!($player->pivot->status == 2)) {
            $player->teams()->updateExistingPivot($team->id, array('status' => 2));
         }

      }

      //
      //

      //$test_status2 = $player->teams()->where('id', '=', $team_id)->pivot->status;
      $test_status2 = $team_id;
      # Return the view with the books
      return view('player.search-ajax')->with(
        ['invite_accepted' => $invite_accepted]
        //
      );

    }
}
