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
            if ($team->pivot->status == 2) {
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 1) {
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

        return view('player.show')->with($data);
    }

    /* ======================================================
    Display on form submit
    ====================================================== */
    public function post(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'per' => 'numeric',
            'fg%' => 'numeric',
            'apg' => 'numeric',
            'apg_ppg' => 'numeric',
            'ppg' => 'numeric',
            'rpg' => 'numeric',
        ]);

        $name = $request->input('name');
        $per = $request->input('per');
        $fg = $request->input('fg');
        $apg = $request->input('apg');
        $apg_ppg = $request->input('apg_ppg');
        $ppg = $request->input('ppg');
        $rpg = $request->input('rpg');

        DB::table('players')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'name' => $name,
             'per' => $per,
             'fg' => $fg,
             'apg' => $apg,
             'apg_ppg' => $apg_ppg,
             'ppg' => $ppg,
             'rpg' => $rpg,
         ]);

         # First get a book to update
        $player = Player::where('name', '=', 'CaptainAwesome650')->first();

        # If we found the book, update it
        if($player) {

             # Update values
            $player->name = $name;
            $player->per = $per;
            $player->fg = $fg;
            $player->apg = $apg;
            $player->apg_ppg = $apg_ppg;
            $player->ppg = $ppg;
            $player->rpg = $rpg;

            # Save the changes
            $player->save();

            echo "Update complete; check the database to see if your update worked...";
        }

        else {
            # Instantiate a new Book Model object
            $player = new Player();

            # Update values
            $player->name = $name;
            $player->per = $per;
            $player->fg = $fg;
            $player->apg = $apg;
            $player->apg_ppg = $apg_ppg;
            $player->ppg = $ppg;
            $player->rpg = $rpg;

            $book->save();

            echo 'Added: '.$player->name;
        }

        if ($team_grade == 'A+' || 'A' || 'A-' || 'B+') {
            $team_grade_color = "success";
        }
        else {
            $team_grade_color = '';
        }

        $per = number_format($per, 1, '.', '');
        $fg = number_format($fg, 1, '.', '');
        $apg = number_format($apg, 1, '.', '');
        $apg_ppg = number_format($apg_ppg, 1, '.', '');
        $ppg = number_format($ppg, 1, '.', '');
        $rpg = number_format($rpg, 1, '.', '');



        //Navigation Active
        $my_player_heading = 'active';
        $update_heading = '';
        $my_team_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = '';

        $teams_owned = [];
        $teams_on = [];

        foreach($player->teams as $team) {
            if ($team->pivot->status == 2) {
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 1) {
                $teams_on[] = $team;
            }
        }

        /* ======================================================
        Attatch Players to Teams
        ====================================================== */

        //Attatch authenticated user as team owner (Status = 1)
        if(!$owner->teams->contains($team->id)) {
            $owner->teams()->attach($team->id, array('status' => 1));
        }

        //Loop through all players added to team
        for ($i = 2; $i <= $num_players+1; $i++) {
            if (${'player'.$i} != '') {
               //Load player object
                $player = Player::where('name', '=', ${'player'.$i})->first();
                //Add player stats to team stats
                if($player) {
                    //Player stats
                    $per += $player->per;
                    $fg += $player->fg;
                    $apg += $player->apg;
                    $ppg += $player->ppg;
                    $rpg +=$player->rpg;
                    //Track each loop
                    $num_players += 1;


                    //If player not already attatched to team
                    if(!$player->teams->contains($team->id)){
                       //Attatch player as team member (Status = 2)
                        $player->teams()->attach($team->id, array('status' => 2));
                    }
                }
            }
        }

        $data = ['update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
            'activity_stream_heading' => $activity_stream_heading, 'name' => $name, 'per' => $per, 'fg' => $fg, 'apg' => $apg,
            'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg, 'find_teams_heading' => $find_teams_heading];
        return view('player.show')->with($data);

    }
}
