<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player; # <--- NEW

class PlayerController extends Controller
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
    public function show()
    {
        $player = Player::where('name', '=', 'CaptainAwesome650')->first();

        if($player) {
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
            return 'Player data not found.';
        }

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

        }
        elseif (66 > $overall_talent_score && $overall_talent_score > 33) {
            $progress_chart_color = "#FADB7D";

        }
        else {
            $progress_chart_color ="#FAAE7E";
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

        //Navigation Active
        $my_player_heading = 'active';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';

        $data = ['team_update_heading' => $team_update_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading,
            'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'my_player_heading' => $my_player_heading,
            'name' => $name, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter,
            'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role,
            'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg,
            'ppg' => $ppg, 'rpg' => $rpg, 'team_grade_color' => $team_grade_color, 'skill_grade_color' => $skill_grade_color, 'per_color' => $per_color,
            'per_color' => $per_color, 'fg_color' => $fg_color, 'apg_color' => $apg_color, 'ppg_color' => $ppg_color, 'rpg_color' => $rpg_color,
            'apg_ppg_color' => $apg_ppg_color, 'progress_chart_color' => $progress_chart_color, 'overall_talent_score' => $overall_talent_score
        ];

        return view('player.show')->with($data);
    }

    public function show2()
    {
        return view('player.player-nav-js');
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


        //Navigation Active
        $my_player_heading = 'active';
        $update_heading = '';
        $my_team_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';

        $data = ['update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
            'activity_stream_heading' => $activity_stream_heading, 'name' => $name, 'per' => $per, 'fg' => $fg, 'apg' => $apg,
            'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg];
        return view('player.show')->with($data);

    }
}
