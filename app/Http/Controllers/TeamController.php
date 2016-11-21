<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Team; # <--- NEW
use p4\Player; # <--- NEW

class TeamController extends Controller
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
        $team = Team::where('gamertag', '=', Auth::user()->name)->first();

        if($team) {
            //Account Settings
            $name = $team->name;
            $abbreviation = $team->abbreviation;
            $wins = $team->wins;
            $losses = $team->losses;
            $type = $team->type;
            $affiliation = $team->affiliation;
            $type = $team->type;
            $tagline = $team->tagline;

            $team_grade = $team->team_grade;
            $skill_grade = $team->skill_grade;

            $movement = $team->movement;
            $tempo = $team->tempo;
            $offense =$team->offense;
            $defense =$team->defense;

            $player1 = $team->player1;
            $player2 = $team->player2;
            $player3 = $team->player3;
            $player4 = $team->player4;
            $player5 = $team->player5;
            $player6 = $team->player6;
            $player7 = $team->player7;
            $player8 = $team->player8;
            $player9 = $team->player9;
            $player10 = $team->player10;

            //Social
            $twitter = $team->twitter;
            $youtube = $team->youtube;
            $twitch = $team->twitch;
        }
        else {
            return 'Team data not found.';
        }

        $per = 0;
        $fg = 0;
        $apg = 0;
        $apg_ppg = 0;
        $ppg = 0;
        $rpg = 0;
        $num_players = 0;

        for ($i = 1; $i <= 10; $i++) {
            if (${'player'.$i} != '') {
                $player = Player::where('name', '=', ${'player'.$i})->first();
                if($player) {
                    $per += $player->per;
                    $fg += $player->fg;
                    $apg += $player->apg;
                    $ppg += $player->ppg;
                    $rpg +=$player->rpg;

                    $num_players += 1;

                    ${'player'.$i.'_name'} = $player->name;
                    ${'player'.$i.'_per'} = $player->per;
                    ${'player'.$i.'_team_grade'} = $player->team_grade;
                    ${'player'.$i.'_skill_grade'} = $player->skill_grade;
                }

            }
        }

        # Team Stats
        $per = number_format(round($per / $num_players, 1), 1, '.', '');
        $fg = number_format(round($fg / $num_players, 1), 1, '.', '');
        $apg = number_format(round($apg * 3 / $num_players, 1), 1, '.', '');
        $ppg = number_format(round($ppg * 3 / $num_players, 1), 1, '.', '');
        $rpg = number_format(round($rpg * 3 / $num_players, 1), 1, '.', '');
        $apg_ppg = number_format(round($apg/$ppg, 1), 1, '.', '');

        # Progress Bar
        $progress_bar = ( 1 / ( 1 + pow( ($losses/$wins), 2 ) ) ) * 100;

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
        ### Progress Bar ###
        if ($progress_bar >= 66) {
            $progress_chart_color = "#abe37d";
            $progress_bar_color = "success";
        }
        elseif (66 > $progress_bar && $progress_bar> 33) {
            $progress_chart_color = "#FADB7D";
            $progress_bar_color = "warning";
        }
        else {
            $progress_chart_color ="#FAAE7E";
            $progress_bar_color = "danger";
        }




        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = 'active';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';

        $data = ['num_players' => $num_players, 'movement' => $movement, 'tempo' => $tempo, 'offense' => $offense, 'defense' => $defense, 'abbreviation' => $abbreviation,
                'team_update_heading' => $team_update_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'type' => $type,
                'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'my_player_heading' => $my_player_heading,
                'name' => $name, 'tagline' => $tagline, 'affiliation' => $affiliation, 'wins' => $wins, 'losses' => $losses, 'twitter' => $twitter,
                'youtube' => $youtube, 'twitch' => $twitch, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg,
                'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg, 'player1_name' => $player1_name, 'player1_team_grade' => $player1_team_grade,
                'player1_skill_grade' => $player1_skill_grade, 'player1_per' => $player1_per, 'player2_name' => $player2_name, 'player2_team_grade' => $player2_team_grade,
                'player2_skill_grade' => $player2_skill_grade, 'player2_per' => $player2_per, 'team_grade_color' => $team_grade_color, 'skill_grade_color' => $skill_grade_color, 'per_color' => $per_color,
                'per_color' => $per_color, 'fg_color' => $fg_color, 'apg_color' => $apg_color, 'ppg_color' => $ppg_color, 'rpg_color' => $rpg_color, 'apg_ppg_color' => $apg_ppg_color,
                'progress_bar' => $progress_bar, 'progress_bar_color' => $progress_bar_color, 'progress_chart_color' => $progress_chart_color
            ];

        return view('team.show')->with($data);

    }
}
