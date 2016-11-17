<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Team; # <--- NEW


class TeamUpdateController extends Controller
{
    public function show()
    {
        $team = Team::where('name', '=', 'StraightFundamental')->first();

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
            $notification = 'Team data not found.';
        }


        //Navigation Active
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = 'active';
        $free_agency_heading = '';
        $activity_stream_heading = '';

        $data = ['gamertag' => $gamertag, 'movement' => $movement, 'tempo' => $tempo, 'offense' => $offense, 'defense' => $defense, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'tagline' => $tagline, 'name' => $name, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'type' => $type, 'affiliation' => $affiliation, 'abbreviation' => $abbreviation, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'wins' => $wins, 'losses' => $losses, 'player1' => $player1, 'player2' => $player2, 'player3' => $player3, 'player4' => $player4, 'player5' => $player5, 'player6' => $player6, 'player7' => $player7, 'player8' => $player8, 'player9' => $player9, 'player10' => $player10];
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

            $team = Team::where('name', '=', 'StraightFundamental')->first();

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

                //Social
                $team->twitter = $twitter;
                $team->youtube = $youtube;
                $team->twitch = $twitch;

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

                //Social
                $team->twitter = $twitter;
                $team->youtube = $youtube;
                $team->twitch = $twitch;


                # Save the changes
                $team->save();

                $notification = "Player details for $team have been uploaded. Check your team's profile to view changes.";

            }
            echo $notification;
            //Navigation Active
            $my_player_heading = '';
            $update_heading = '';
            $team_update_heading = 'active';
            $my_team_heading = '';
            $free_agency_heading = '';
            $activity_stream_heading = '';

            $data = ['gamertag' => $gamertag, 'movement' => $movement, 'tempo' => $tempo, 'offense' => $offense, 'defense' => $defense, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'tagline' => $tagline, 'name' => $name, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'type' => $type, 'affiliation' => $affiliation, 'abbreviation' => $abbreviation, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'wins' => $wins, 'losses' => $losses, 'player1' => $player1, 'player2' => $player2, 'player3' => $player3, 'player4' => $player4, 'player5' => $player5, 'player6' => $player6, 'player7' => $player7, 'player8' => $player8, 'player9' => $player9, 'player10' => $player10];
            return view('teamupdate.show')->with($data);

    }
}
