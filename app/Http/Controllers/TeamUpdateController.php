<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player;
use p4\Team; # <--- NEW


class TeamUpdateController extends Controller
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
        $team = Team::where('gamertag', '=', Auth::user()->name )->first();

        $notification = null;

        if($team) {

            //Owner
            $gamertag = $team->gamertag;

            //Account Settings
            $name = $team->name;
            $abbreviation = $team->abbreviation;
            $wins = $team->wins;
            $losses = $team->losses;
            $type = $team->type;
            $affiliation = $team->affiliation;
            $type = $team->type;
            $tagline = $team->tagline;

            $movement = $team->movement;
            $tempo = $team->tempo;
            $offense =$team->offense;
            $defense =$team->defense;

            $team_grade = $team->team_grade;
            $skill_grade = $team->skill_grade;

            $num_players = $team->num_players;
            //Social
            $twitter = $team->twitter;
            $youtube = $team->youtube;
            $twitch = $team->twitch;



        }
        else {
            $notification = 'Team data not found.';
        }

        $player1 = $gamertag;
        $player2 = '';
        $player3 = '';
        $player4 = '';
        $player5 = '';
        $player6 = '';
        $player7 = '';
        $player8 = '';
        $player9 = '';
        $player10 = '';

        //Team Members
        $team_members = [];

        $i = 2;
        foreach($team->players as $player) {
            if ($player->pivot->status == 2) {
                $team_members[] = $player;
                ${'player'.$i} = $player->name;
                $i += 1;
            }
        }

        $num_players = count($team_members);



        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = 'active';
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

        $data = ['num_players' => $num_players, 'find_teams_heading' => $find_teams_heading, 'gamertag' => $gamertag, 'movement' => $movement, 'tempo' => $tempo,
                'offense' => $offense, 'defense' => $defense, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading,
                'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
                'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'tagline' => $tagline, 'name' => $name,
                'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'type' => $type, 'affiliation' => $affiliation,
                'abbreviation' => $abbreviation, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'wins' => $wins, 'losses' => $losses,
                'player1' => $player1, 'player2' => $player2, 'player3' => $player3, 'player4' => $player4, 'player5' => $player5, 'player6' => $player6,
                'player7' => $player7, 'player8' => $player8, 'player9' => $player9, 'player10' => $player10, 'team_members' => $team_members,
                'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on
         ];
        return view('teamupdate.show')->with($data);
    }


        /* ======================================================
        Display on form submit
        ====================================================== */
        public function post(Request $request)
        {

            $team = Team::where('name', '=', 'StraightFundamental')->first();

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

                $movement = $team->movement;
                $tempo = $team->tempo;
                $offense =$team->offense;
                $defense =$team->defense;

                $team_grade = $team->team_grade;
                $skill_grade = $team->skill_grade;

                $num_players = $team->num_players;
                //Social
                $twitter = $team->twitter;
                $youtube = $team->youtube;
                $twitch = $team->twitch;

                //Gamertag
                $gamertag = $team->gamertag;
            }


            if ($request->input('gamertag') != $gamertag) {
                $uni_tag = "|unique:players";
            }

            else {
                $uni_tag = '';
            }

            $this->validate($request, [
                // Account Settings

                'name' => "required|alpha_dash",
                'gamertag' => "required|alpha_dash{$uni_tag}",
                'tagline' => "required",

                'abbreviation' => "required|alpha_dash",
                'wins' => "required|numeric",
                'losses' => "required|numeric",
                // Player Profile
                'twitter' => 'active_url',
                'youtube' => 'active_url',
                'twitch' => 'active_url',

            ]);

            //Park
            $name = $request->input('name');
            $abbreviation = $request->input('abbreviation');
            $wins = $request->input('wins');
            $losses = $request->input('losses');
            $affiliation = $request->input('affiliation');
            $type = $request->input('type');

            $movement = $request->input('movement');
            $tempo = $request->input('tempo');
            $offense = $request->input('offense');
            $defense = $request->input('defense');

            $player1 = $request->input('player1');
            $player2 = $request->input('player2');
            $player3 = $request->input('player3');
            $player4 = $request->input('player4');
            $player5 = $request->input('player5');
            $player6 = $request->input('player6');
            $player7 = $request->input('player7');
            $player8 = $request->input('player8');
            $player9 = $request->input('player9');
            $player10 = $request->input('player10');

            #$rep_level = "{$rep_status} {$status_level}";

            //Social
            $twitter = $request->input('twitter');
            $youtube = $request->input('youtube');
            $twitch = $request->input('twitch');

            //Gamertag
            $gamertag = $request->input('gamertag');

            /*
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
            */
            $num_players = 0;
            if ($player1 != '') {
                $num_players += 1;
            }
            if ($player2 != '') {
                $num_players += 1;
            }
            if ($player3 != '') {
                $num_players += 1;
            }
            if ($player4 != '') {
                $num_players += 1;
            }
            if ($player5 != '') {
                $num_players += 1;
            }
            if ($player6 != '') {
                $num_players += 1;
            }
            if ($player7 != '') {
                $num_players += 1;
            }
            if ($player8 != '') {
                $num_players += 1;
            }
            if ($player9 != '') {
                $num_players += 1;
            }
            if ($player10 != '') {
                $num_players += 1;
            }

            $per = 0;
            $fg = 0;
            $apg = 0;
            $apg_ppg = 0;
            $ppg = 0;
            $rpg = 0;

            $owner = Player::where('name', '=', $gamertag)->first();



            if(!$owner->teams->contains($team->id)) {
                $owner->teams()->attach($team->id, array('status' => 1));
            }

            for ($i = 2; $i <= $num_players+1; $i++) {
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
                        #$player->teams()->sync($team);
                        if(!$player->teams->contains($team->id)){
                            $player->teams()->attach($team->id, array('status' => 2));
                        }
                    }
                }
            }

            //Team Members
            $team_members = [];

            $i = 2;
            foreach($team->players as $player) {
                if ($player->pivot->status == 2) {
                    $team_members[] = $player;
                    ${'player'.$i} = $player->name;
                    $i += 1;
                }
            }

            $num_players = count($team_members);

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

            if($team) {

                //Owner
                $team->gamertag = $gamertag;

                //Account Settings
                $team->name = $name;
                $team->abbreviation = $abbreviation;
                $team->wins = $wins;
                $team->losses = $losses;
                $team->affiliation = $affiliation;
                $team->type = $type;

                $team->movement = $movement;
                $team->tempo = $tempo;
                $team->offense = $offense;
                $team->defense = $defense;

                $team->player1 = $gamertag;
                $team->player2 = $player2;
                $team->player3 = $player3;
                $team->player4 = $player4;
                $team->player5 = $player5;
                $team->player6 = $player6;
                $team->player7 = $player7;
                $team->player8 = $player8;
                $team->player9 = $player9;
                $team->player10 = $player10;

                $team->num_players = $num_players;
                //Social
                $team->twitter = $twitter;
                $team->youtube = $youtube;
                $team->twitch = $twitch;

                //Stats
                $team->per = $per;
                $team->fg = $fg;
                $team->apg = $apg;
                $team->apg_ppg = $apg_ppg;
                $team->ppg = $ppg;
                $team->rpg = $rpg;

                // Colors
                $team->progress_chart_color = $progress_chart_color;
                $team->progress_bar_color = $progress_bar_color;
                $team->team_grade_color = $team_grade_color;
                $team->skill_grade_color = $skill_grade_color;
                $team->per_color = $per_color;
                $team->fg_color = $fg_color;
                $team->apg_color = $apg_color;
                $team->apg_ppg_color = $apg_ppg_color;
                $team->ppg_color = $ppg_color;
                $team->rpg_color = $rpg_color;

                # Save the changes
                $team->save();

                $notification = "Update for $name is complete. Check your team's profle to view changes.";
            }

            else {

                # Instantiate a new Book Model object
                $team = new Team();

                //Owner
                $team->gamertag = $gamertag;

                //Account Settings
                $team->name = $name;
                $team->abbreviation = $abbreviation;
                $team->wins = $wins;
                $team->losses = $losses;
                $team->affiliation = $affiliation;
                $team->type = $type;

                $team->player1 = $player1;
                $team->player2 = $player2;
                $team->player3 = $player3;
                $team->player4 = $player4;
                $team->player5 = $player5;
                $team->player6 = $player6;
                $team->player7 = $player7;
                $team->player8 = $player8;
                $team->player9 = $player9;
                $team->player10 = $player10;

                $team->num_players = $num_players;
                //Social
                $team->twitter = $twitter;
                $team->youtube = $youtube;
                $team->twitch = $twitch;

                //Stats
                $team->per = $per;
                $team->fg = $fg;
                $team->apg = $apg;
                $team->apg_ppg = $apg_ppg;
                $team->ppg = $ppg;
                $team->rpg = $rpg;

                // Colors
                $team->progress_chart_color = $progress_chart_color;
                $team->progress_bar_color = $progress_bar_color;
                $team->team_grade_color = $team_grade_color;
                $team->skill_grade_color = $skill_grade_color;
                $team->per_color = $per_color;
                $team->fg_color = $fg_color;
                $team->apg_color = $apg_color;
                $team->apg_ppg_color = $apg_ppg_color;
                $team->ppg_color = $ppg_color;
                $team->rpg_color = $rpg_color;

                # Save the changes
                $team->save();

                $notification = "Player details for $team have been uploaded. Check your team's profile to view changes.";

            }

            //Navigation Active
            $my_player_heading = '';
            $update_heading = '';
            $team_update_heading = 'active';
            $my_team_heading = '';
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

            $data = ['num_players' => $num_players, 'find_teams_heading' => $find_teams_heading, 'gamertag' => $gamertag, 'movement' => $movement, 'tempo' => $tempo,
                    'offense' => $offense, 'defense' => $defense, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading,
                    'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
                    'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'tagline' => $tagline, 'name' => $name,
                    'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'type' => $type, 'affiliation' => $affiliation,
                    'abbreviation' => $abbreviation, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'wins' => $wins, 'losses' => $losses,
                    'player1' => $player1, 'player2' => $player2, 'player3' => $player3, 'player4' => $player4, 'player5' => $player5, 'player6' => $player6,
                    'player7' => $player7, 'player8' => $player8, 'player9' => $player9, 'player10' => $player10, 'team_members' => $team_members,
                    'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on];

            return view('teamupdate.show')->with($data);

    }
}
