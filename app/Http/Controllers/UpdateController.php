<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player; # <--- NEW

class UpdateController extends Controller
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
        $player = Player::where('name', '=', Auth::user()->name )->first();

        $notification = null;

        if($player) {
            //Account Settings
            $email = $player->email;
            $username = $player->username;
            $password = $player->password;

            //Profile
            $name = $player->name;
            $affiliation = $player->affiliation;
            $archetype = $player->archetype;
            $position = $player->position;
            $tagline = $player->tagline;
            //$bg_image = $player->bg_image;
            //$profile_pic = $player->profile_pic;

            //Park
            $rep_level = $player->rep_level;
            $rep_progress = $player->rep_progress;
            $rep_status = $player->rep_status;
            $status_level = $player->status_level;

            //Social
            $twitter = $player->twitter;
            $youtube = $player->youtube;
            $twitch = $player->twitch;

            //Playstyle
            $type = $player->type;
            $role = $player->role;
            $style = $player->style;

            //Stats
            $team_grade = $player->team_grade;
            $skill_grade = $player->skill_grade;
            $per = $player->per;
            $fg = $player->fg;
            $apg = $player->apg;
            $apg_ppg = $player->apg_ppg;
            $ppg = $player->ppg;
            $rpg = $player->rpg;
        }
        else {
            $notification = 'Player data not found.';
        }


        //Navigation Active
        $my_player_heading = '';
        $update_heading = 'active';
        $my_team_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $team_update_heading = '';
        $find_teams_heading = '';

        $player = Player::where('name', '=', Auth::user()->name )->first();

        foreach($player->teams as $team) {
            if ($team->pivot->status == 2) {
                $teams_owned[] = $team;
            }
            elseif($team->pivot->status == 1) {
                $teams_on[] = $team;
            }
        }

        $data = ['find_teams_heading' => $find_teams_heading, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'email' => $email , 'username' => $username, 'passowrd' => $password, 'name' => $name, 'rep_status' => $rep_status, 'status_level' => $status_level, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role, 'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on];
        return view('update.show')->with($data);
    }


        /* ======================================================
        Display on form submit
        ====================================================== */
        public function post(Request $request)
        {
            $player = Player::where('name', '=', 'CaptainAwesome650')->first();

            /* ======================================================
            Retrieve Default/Stored DB Values
            ====================================================== */
            if($player) {
                //Account Settings
                $email = $player->email;
                $username = $player->username;
                $password = $player->password;

                //Profile
                $name = $player->name;
                $affiliation = $player->affiliation;
                $archetype = $player->archetype;
                $position = $player->position;
                $tagline = $player->tagline;
                //$bg_image = $player->bg_image;
                //$profile_pic = $player->profile_pic;

                //Park
                $rep_level = $player->rep_level;
                $rep_progress = $player->rep_progress;
                $rep_status = $player->rep_status;
                $status_level = $player->status_level;

                //Social
                $twitter = $player->twitter;
                $youtube = $player->youtube;
                $twitch = $player->twitch;

                //Playstyle
                $type = $player->type;
                $role = $player->role;
                $style = $player->style;

                //Stats
                $team_grade = $player->team_grade;
                $skill_grade = $player->skill_grade;
                $per = $player->per;
                $fg = $player->fg;
                $apg = $player->apg;
                $apg_ppg = $player->apg_ppg;
                $ppg = $player->ppg;
                $rpg = $player->rpg;
            }

            /* ======================================================
            Server Side Validation
            ====================================================== */

            //if (!$request->input('email') == $email){'unique:players'};
            //if (!$request->input('username') == $username){'username' => 'unique:players'};
            // Ensure Unique Inputs
            if ($request->input('email') != $email){
                $uni_email = "|unique:players";
            }
            else {
                $uni_email = '';
            }
            if ($request->input('username') != $username){
                $uni_username = "|unique:players";
            }
            else {
                $uni_username = '';
            }
            if ($request->input('name') != $name){
                $uni_name = "|unique:players";
            }
            else {
                $uni_name = '';
            }

            $this->validate($request, [
                // Account Settings

                'email' => "required|email{$uni_name}",
                'username' => "required|alpha_dash{$uni_name}",
                'name' => "required|alpha_dash{$uni_name}",


                // Player Profile
                'twitter' => 'active_url',
                'youtube' => 'active_url',
                'twitch' => 'active_url',

                // Player Stats
                'fg' => 'numeric|max:100|min:0'

            ]);

            /* ======================================================
            Store Form Results
            ====================================================== */
            //Account Settings
            if (!$request->input('email') == null) {
                $email = $request->input('email');
            }
            if (!$request->input('username') == null) {
                $username = $request->input('username');
            }
            if (!$request->input('password') == null) {
                $password = $request->input('password');
            }

            //Profile
            if (!$request->input('name') == null) {
                $name = $request->input('name');
            }
            if (!$request->input('affiliation') == null) {
                $affiliation = $request->input('affiliation');
            }
            if (!$request->input('archetype') == null) {
                $archetype = $request->input('archetype');
            }
            if (!$request->input('position') == null) {
                $position = $request->input('position');
            }
            if (!$request->input('tagline') == null) {
                $tagline = $request->input('tagline');
            }
            //$bg_image = $player->bg_image;
            //$profile_pic = $player->profile_pic;

            //Park
            $rep_progress = $request->input('rep_progress');
            $rep_status = $request->input('rep_status');
            $status_level = $request->input('status_level');
            $rep_level = "{$rep_status} {$status_level}";

            //Social
            $twitter = $request->input('twitter');
            $youtube = $request->input('youtube');
            $twitch = $request->input('twitch');

            //Playstyle
            if (!$request->input('type') == null) {
                $type = $request->input('type');
            }
            if (!$request->input('role') == null) {
                $role = $request->input('role');
            }
            if (!$request->input('style') == null) {
                $style = $request->input('style');
            }

            //Stats
            $per = $request->input('per');
            $fg = $request->input('fg');
            $apg = $request->input('apg');
            $apg_ppg = $request->input('apg_ppg');
            $ppg = $request->input('ppg');
            $rpg = $request->input('rpg');

            $overall_talent_score = (int) round( ( 100 * (($fg/100)*$ppg + $apg_ppg*$apg/1.5 + 2*$rpg ) / 20 ) );


            /* ======================================================
            Context Colors
            ====================================================== */
            ### Teammate Grade ###
            if ($team_grade == 'A+' || $team_grade == 'A' || $team_grade == 'A-') {
                $team_grade_color = "success";
            }
            elseif ($team_grade == 'B+' || $team_grade == 'B' || $team_grade == 'B-') {
                $team_grade_color = "warning";
            }
            else {
                $team_grade_color ="danger";
            }
            ### Skill Grade ###
            if ($skill_grade == 'A+' || $skill_grade ==  'A' || $skill_grade ==  'A-') {
                $skill_grade_color = "success";
            }
            elseif ($skill_grade == 'B+' || $skill_grade ==  'B' || $skill_grade ==  'B-') {
                $skill_grade_color = "warning";
            }
            else {
                $skill_grade_color ="danger";
            }
            ### PER ###
            if ($per >= 20 ) {
                $per_color = "success";
            }
            elseif (10 < $per && $per < 20) {
                $per_color = "warning";
            }
            else {
                $per_color ="danger";
            }
            ### FG% ###
            if ($fg >= 60 ) {
                $fg_color = "success";
            }
            elseif ( 45 < $fg && $fg < 60) {
                $fg_color = "warning";
            }
            else {
                $fg_color ="danger";
            }
            ### APG ###
            if ($apg >= 3) {
                $apg_color = "success";
            }
            elseif ( 3 > $apg && $apg > 1 ) {
                $apg_color = "warning";
            }
            else {
                $apg_color ="danger";
            }
            ### APG/PPG ###
            if ($apg_ppg >= 2 ) {
                $apg_ppg_color = "success";
            }
            elseif ( 1 < $apg_ppg && $apg_ppg< 2) {
                $apg_ppg_color = "warning";
            }
            else {
                $apg_ppg_color ="danger";
            }
            ### PPG ###
            if ($ppg >= 6) {
                $ppg_color = "success";
            }
            elseif (4 < $ppg && $ppg< 6 ) {
                $ppg_color = "warning";
            }
            else {
                $ppg_color ="danger";
            }
            ### RPG ###
            if ($rpg >= 3) {
                $rpg_color = "success";
            }
            elseif (4 > $rpg && $rpg> 2) {
                $rpg_color = "warning";
            }
            else {
                $rpg_color ="danger";
            }
            ### Progress Chart###
            if ($overall_talent_score >= 66) {
                $progress_chart_color = "#abe37d";
                $profile_pic_color = "success";

            }
            elseif (66 > $overall_talent_score && $overall_talent_score > 33) {
                $progress_chart_color = "#FADB7D";
                $profile_pic_color = "warning";

            }
            else {
                $progress_chart_color ="#FAAE7E";
                $profile_pic_color = "danger";
            }
            ### Progress Bar ###
            if ($rep_progress >= 66) {
                $progress_bar_color = "success";

            }
            elseif (66 > $rep_progress && $rep_progress> 33) {
                $progress_bar_color = "warning";

            }
            else {
                $progress_bar_color = "danger";
            }

            /* ======================================================
            Player Type | Role
            ====================================================== */

            $facilitator1_array = ['Dribble-N-Dime', 'Run-The-Break', 'Assist-King'];
            $scorer_array = ['Shot-Creator', 'Ankle-Breaking-Driver', 'Blow-By-Dunker', 'Isolation-Specialist', 'Post-Move-Master', 'Fast-Break-Finisher'];
            $facilitator2_array = ['Pass-To-Assist-King', 'Ball-Movement-Coach', 'Screen-And-D', 'Inside-Out-Big', 'Defensive-Anchor', 'Boards-N-Outlets', 'Putback-King'];
            $finisher_array = ['Pick-N-Roll-Big', 'Second-Chance-Only', 'Backdoor-Posterizer', 'Catch-N-Shoot', 'Slash-N-Shoot'];

            $on_ball_array = array_merge($facilitator1_array, $scorer_array);
            $off_ball_array = array_merge($facilitator2_array, $finisher_array);

            if (in_array($style, $scorer_array)) {
                $role = "Scorer";
            }
            elseif (in_array($style, $finisher_array)) {
                $role = "Finisher";
            }
            else {
                $role = "Facilitator";
            }

            if (in_array($style, $on_ball_array)) {
                $type = "On-Ball";
            }
            else {
                $type = "Off-Ball";
            }

            /* ======================================================
            Update Database
            ====================================================== */
            if($player) {
                //Account Settings
                $player->email = $email;
                $player->username = $username;
                $player->password = $password;

                //Profile
                $player->name = $name;
                $player->affiliation = $affiliation;
                $player->archetype = $archetype;
                $player->position = $position;
                $player->tagline = $tagline;
                //$bg_image = $player->bg_image;
                //$profile_pic = $player->profile_pic;

                //Park
                $player->rep_level = $rep_level;
                $player->rep_progress = $rep_progress;
                $player->rep_status = $rep_status;
                $player->status_level = $status_level;

                //Social
                $player->twitter = $twitter;
                $player->youtube = $youtube;
                $player->twitch = $twitch;

                //Playstyle
                $player->type = $type;
                $player->role = $role;
                $player->style = $style;

                //Stats
                $player->overall_talent_score = $overall_talent_score;
                $player->team_grade = $team_grade;
                $player->skill_grade = $skill_grade;
                $player->per = $per;
                $player->fg = $fg;
                $player->apg = $apg;
                $player->apg_ppg = $apg_ppg;
                $player->ppg = $ppg;
                $player->rpg = $rpg;

                // Colors
                $player->profile_pic_color = $profile_pic_color;
                $player->progress_chart_color = $progress_chart_color;
                $player->progress_bar_color = $progress_bar_color;
                $player->team_grade_color = $team_grade_color;
                $player->skill_grade_color = $skill_grade_color;
                $player->per_color = $per_color;
                $player->fg_color = $fg_color;
                $player->apg_color = $apg_color;
                $player->apg_ppg_color = $apg_ppg_color;
                $player->ppg_color = $ppg_color;
                $player->rpg_color = $rpg_color;

                # Save the changes
                $player->save();

                $notification = "Update for $name is complete. Check your profile to view changes.";
            }

            else {

                # Instantiate a new Book Model object
                $player = new Player();

                //Account Settings
                $player->email = $email;
                $player->username = $username;
                $player->password = $password;

                //Profile
                $player->name = $name;
                $player->affiliation = $affiliation;
                $player->archetype = $archetype;
                $player->position = $position;
                $player->tagline = $tagline;
                //$bg_image = $player->bg_image;
                //$profile_pic = $player->profile_pic;

                //Park
                $player->rep_level = $rep_level;
                $player->rep_progress = $rep_progress;
                $player->rep_status = $rep_status;
                $player->status_level = $status_level;

                //Social
                $player->twitter = $twitter;
                $player->youtube = $youtube;
                $player->twitch = $twitch;

                //Playstyle
                $player->type = $type;
                $player->role = $role;
                $player->style = $style;

                //Stats
                $player->overall_talent_score = $overall_talent_score;
                $player->team_grade = $team_grade;
                $player->skill_grade = $skill_grade;
                $player->per = $per;
                $player->fg = $fg;
                $player->apg = $apg;
                $player->apg_ppg = $apg_ppg;
                $player->ppg = $ppg;
                $player->rpg = $rpg;

                // Colors
                $player->profile_pic_color = $profile_pic_color;
                $player->progress_chart_color = $progress_chart_color;
                $player->progress_bar_color = $progress_bar_color;
                $player->team_grade_color = $team_grade_color;
                $player->skill_grade_color = $skill_grade_color;
                $player->per_color = $per_color;
                $player->fg_color = $fg_color;
                $player->apg_color = $apg_color;
                $player->apg_ppg_color = $apg_ppg_color;
                $player->ppg_color = $ppg_color;
                $player->rpg_color = $rpg_color;

                # Save the changes
                $player->save();

                $notification = "Player details for $name have been uploaded. Check your profile to view changes.";

            }

            //Navigation Active
            $my_player_heading = '';
            $update_heading = 'active';
            $my_team_heading = '';
            $team_update_heading = '';
            $free_agency_heading = '';
            $activity_stream_heading = '';
            $find_teams_heading = '';

            $player = Player::where('name', '=', Auth::user()->name )->first();

            foreach($player->teams as $team) {
                if ($team->pivot->status == 2) {
                    $teams_owned[] = $team;
                }
                elseif($team->pivot->status == 1) {
                    $teams_on[] = $team;
                }
            }


            $data = ['find_teams_heading' => $find_teams_heading, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'email' => $email , 'username' => $username, 'passowrd' => $password, 'name' => $name, 'rep_status' => $rep_status, 'status_level' => $status_level, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role, 'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on];
            return view('update.show')->with($data);
        }


}
