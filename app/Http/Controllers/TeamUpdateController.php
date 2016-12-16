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

    public function show($name)
    {
        /* ======================================================
        Database Query - Get Players/Teams Associated w/ Active User
        ====================================================== */
        $player = Player::where('name', '=', Auth::user()->name )->first();
        $team = Team::where('name', '=', $name )->first();

        /* ======================================================
        Authenticate User - Confirm Active User Has Ownership Privledges
        ====================================================== */
        ### Compile List Of Active Users' Teams ###
        foreach($player->teams as $c_team) {
            if (($c_team->pivot->status == 1)) {
               $authenticated_ownership[] = $c_team->name;
            }
         }
        ### Return Error Page - IF Unauthorized ###
        if(!in_array($team->name, $authenticated_ownership)) {
         return "You do not have the authority to edit this team.";
        }
        ### Placeholder ###
        else {
        $notification = null;

        /* ======================================================
        Ensure Page Load - Defaul Player Variables
        ====================================================== */
        $player2 = '';
        $player3 = '';
        $player4 = '';
        $player5 = '';
        $player6 = '';
        $player7 = '';
        $player8 = '';
        $player9 = '';
        $player10 = '';
        $team_background_pic = 'https://s24.postimg.org/y4buaoxjp/Team_Banner.jpg';
        $team_profile_pic = 'https://s29.postimg.org/8c0h81293/Team_Profile.jpg';

        /* ======================================================
        If Team Exists - Retrieve Current Data
        ====================================================== */
        if($team) {
            ### Owner ###
            $gamertag = $team->gamertag;
            ### Team  Name ###
            $name = $team->name;
            $abbreviation = $team->abbreviation;
            ### Record ###
            $wins = $team->wins;
            $losses = $team->losses;
            ### Profile ###
            $tagline = $team->tagline;
            $team_background_pic = $team->team_bg_pic;
            $team_profile_pic = $team->team_profile_pic;
            ### Social ###
            $twitter = $team->twitter;
            $youtube = $team->youtube;
            $twitch = $team->twitch;
            ### Type ###
            $type = $team->type;
            $affiliation = $team->affiliation;
            ### Play Style ###
            $movement = $team->movement;
            $tempo = $team->tempo;
            $offense =$team->offense;
            $defense =$team->defense;
            ### Default Grade ###
            $team_grade = $team->team_grade;
            $skill_grade = $team->skill_grade;
            ### Empty -  Used In Post Method ###
            $num_players = $team->num_players;
            ### Notification Filter ###
            $new_team = 'no';
        }
        else {
            $notification = 'Team data not found.';
        }

        /* ======================================================
        Default Variables - Players
        ====================================================== */
        $team_members = [];
        $player1 = $gamertag;
        $i = 2;
        foreach($team->players as $player) {
            if ($player->pivot->status == 2) {
                $team_members[] = $player;
                ${'player'.$i} = $player->name;
                $i += 1;
            }
        }
        $num_players = count($team_members);

        /* ======================================================
        Navigation Variables
        ====================================================== */
        ### LH Menu Tabs - Illuminate Current Page ###
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = 'active';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = '';
        ### MyTeams Tab - Get list of Active Users' teams ###
        //$player = Player::where('name', '=', Auth::user()->name )->first();
        $teams_on = [];
        $teams_owned = [];
        foreach($player->teams as $team) {
            ### Teams Owned ###
            if ($team->pivot->status == 1) {
                $teams_owned[] = $team;
            }
            ### Teams Owned ###
            elseif($team->pivot->status == 2) {
                $teams_on[] = $team;
            }
        }

        /* ======================================================
        Interface Variables
        ====================================================== */
        $profile_pic = $player->player_profile_pic;
        $background_pic = $player->player_bg_pic;
        $player_profile_pic = $player->player_profile_pic;

        /* ======================================================
        Show Form
        ====================================================== */
        $data = ['num_players' => $num_players, 'find_teams_heading' => $find_teams_heading, 'gamertag' => $gamertag, 'movement' => $movement, 'tempo' => $tempo,
                'offense' => $offense, 'defense' => $defense, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading,
                'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
                'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'tagline' => $tagline, 'name' => $name,
                'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'type' => $type, 'affiliation' => $affiliation,
                'abbreviation' => $abbreviation, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'wins' => $wins, 'losses' => $losses,
                'player1' => $player1, 'player2' => $player2, 'player3' => $player3, 'player4' => $player4, 'player5' => $player5, 'player6' => $player6,
                'player7' => $player7, 'player8' => $player8, 'player9' => $player9, 'player10' => $player10, 'team_members' => $team_members,
                'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'new_team' => $new_team,
                'profile_pic' => $profile_pic, 'background_pic' => $background_pic, 'team_profile_pic' => $team_profile_pic, 'team_background_pic' => $team_background_pic,
                'player' => $player, 'player_profile_pic' => $player_profile_pic
         ];

        return view('teamupdate.show')->with($data);
        }
    }


    /* ======================================================
    Display on form submit
    ====================================================== */
    public function post(Request $request)
    {

        /* ======================================================
        Database Query - Get Players/Teams Associated w/ Active User
        ====================================================== */
        $player = Player::where('name', '=', Auth::user()->name )->first();
        $team = Team::where('name', '=', $request->input('name'))->first();

        /* ======================================================
        Default Variables - Ensure Page Load
        ====================================================== */
        ### Owner ###
        $gamertag = $player->name;
        ### Team  Name ###
        $name = '';
        $abbreviation = '';
        ### Record ###
        $wins = '';
        $losses = '';
        ### Profile ###
        $tagline = '';
        $team_background_pic = 'https://s24.postimg.org/y4buaoxjp/Team_Banner.jpg';
        $team_profile_pic = 'https://s29.postimg.org/8c0h81293/Team_Profile.jpg';
        $affiliation = $player->affiliation;
        ### Social ###
        $twitter = $player->twitter;
        $youtube = $player->youtube;
        $twitch = $player->twitch;
        ### Play Style ###
        $movement = '';
        $tempo = '';
        $type = '';
        $offense = '';
        $defense = '';
        ### Players ###
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
        ### Empty -  Used In Post Method ###
        $team_members = [];
        $num_players = 0;
        ### Default Grades ###
        $skill_grade = $player->skill_grade;
        $team_grade = $player->team_grade;
        ### Notification Filter ###
        $new_team = 'yes';

        /* ======================================================
        Validation - Server Side
        ====================================================== */
        ### Only Apply When Replacing Current Value ###
        if ($request->input('name') != $team->name) {
            $uni_name = "|unique:teams";
        }
        else {
            $uni_name = '';
        }
        ### Validation Rules ###
        $this->validate($request, [
            ### Name ###
            'name' => "required|alpha_dash{$uni_name}",
            'abbreviation' => "required|alpha_dash",
            ### Record ###
            'wins' => "required|numeric",
            'losses' => "required|numeric",
            ### Profile ###
            'affiliation' => "required",
            'tagline' => "required",
            'team_profile_pic' => "active_url",
            'player_profile_pic' => "active_url",
            ### Social ###
            'twitter' => 'active_url',
            'youtube' => 'active_url',
            'twitch' => 'active_url',
            ### Style ###
            'type' => "required",
            'movement' => "required",
            'tempo' => "required",
            'offense' => "required",
            'defense' =>"required",
            ### Players ###
            'player1' => 'exists:players,name',
            'player2' => 'exists:players,name',
            'player3' => 'exists:players,name',
            'player4' => 'exists:players,name',
            'player5' => 'exists:players,name',
            'player6' => 'exists:players,name',
            'player7' => 'exists:players,name',
            'player8' => 'exists:players,name',
            'player9' => 'exists:players,name',
            'player10' => 'exists:players,name'
        ]);

        /* ======================================================
        Database Query - Load Current Team Values
        ====================================================== */
        if($team) {

            ### Owner ###
            $gamertag = $team->gamertag;
            ### Team  Name ###
            $name = $team->name;
            $abbreviation = $team->abbreviation;
            ### Record ###
            $wins = $team->wins;
            $losses = $team->losses;
            ### Profile ###
            $tagline = $team->tagline;
            $team_background_pic = $team->team_bg_pic;
            $team_profile_pic = $team->team_profile_pic;
            ### Social ###
            $twitter = $team->twitter;
            $youtube = $team->youtube;
            $twitch = $team->twitch;
            ### Type ###
            $type = $team->type;
            $affiliation = $team->affiliation;
            ### Play Style ###
            $movement = $team->movement;
            $tempo = $team->tempo;
            $offense =$team->offense;
            $defense =$team->defense;
            ### Default Grade ###
            $team_grade = $team->team_grade;
            $skill_grade = $team->skill_grade;
            ### Empty -  Used In Post Method ###
            $num_players = $team->num_players;
            ### Notification Filter ###
            $new_team = 'no';
        }

        /* ======================================================
        Store Form Results
        ====================================================== */
        ### Team  Name ###
        $name = $request->input('name');
        $abbreviation = $request->input('abbreviation');
        //$gamertag = $request->input('gamertag');
        ### Record ###
        $wins = $request->input('wins');
        $losses = $request->input('losses');
        ### Social ###
        $twitter = $request->input('twitter');
        $youtube = $request->input('youtube');
        $twitch = $request->input('twitch');
        ### Profile ###
        $tagline = $request->input('tagline');
        $team_profile_pic = $request->input('team_profile_pic');
        $team_background_pic= $request->input('team_background_pic');
        ### Type ###
        $type = $request->input('type');
        $affiliation = $request->input('affiliation');
        ### Play Style ###
        $movement = $request->input('movement');
        $tempo = $request->input('tempo');
        $offense = $request->input('offense');
        $defense = $request->input('defense');
        ### Players ###
        $player2 = $request->input('player2');
        $player3 = $request->input('player3');
        $player4 = $request->input('player4');
        $player5 = $request->input('player5');
        $player6 = $request->input('player6');
        $player7 = $request->input('player7');
        $player8 = $request->input('player8');
        $player9 = $request->input('player9');
        $player10 = $request->input('player10');
        /* ======================================================
        Attatch Players to Teams, Update Team Stats
        ====================================================== */
        ### Determine Number of  Users Submitted ###
        $num_players = 1;
        for ($i = 2; $i <= 10; $i++) {
            if (${'player'.$i} != '') {
                $num_players += 1;
            }
        }
        ### Attatch authenticated user as team owner (Status = 1) ###
        $owner = $player;
        if($team) {
            if(!$owner->teams->contains($team->id)) {
                $owner->teams()->attach($team->id, array('status' => 1));
            }
        }
        ### Add Owner Stats ###
        $per = $owner->per;
        $fg = $owner->fg;
        $apg = $owner->apg;
        $ppg = $owner->ppg;
        $apg_ppg = $owner->apg_ppg;
        $rpg = $owner->rpg;
        ### Attatch additional players as teammates (Status = 2) ###
        for ($i = 2; $i < $num_players+1; $i++) {
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
                    $apg_ppg += $player->apg_ppg;
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

        /* ======================================================
        Calculate Team Stats
        ====================================================== */
        ### Initiate Team Members Array ###
        $team_members = [];
        ### Get Player Objects for All Roster Spots ###
        $i = 2;
        foreach($team->players as $player) {
            if ($player->pivot->status == 2) {
                $team_members[] = $player;
                ${'player'.$i} = $player->name;
                $i += 1;
            }
        }
        ### Confirm Num Players Matches ###
        $num_players = count($team_members) + 1;
        ### Calculate Team Stats ###
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

        /* ======================================================
        Update Stats
        ====================================================== */
        if($team) {
            ### Owner ###
            $team->gamertag = $gamertag;
            ### Team  Name ###
            $team->name = $name;
            $team->abbreviation = $abbreviation;
            ### Record ###
            $team->wins = $wins;
            $team->losses = $losses;
            ### Social ###
            $team->twitter = $twitter;
            $team->youtube = $youtube;
            $team->twitch = $twitch;
            ### Profile ###
            $team->tagline = $tagline;
            $team->team_bg_pic = $team_background_pic;
            $team->team_profile_pic = $team_profile_pic;
            ### Type ###
            $team->type = $type;
            $team->affiliation = $affiliation;
            ### Play Style ###
            $team->tempo = $tempo;
            $team->movement = $movement;
            $team->offense = $offense;
            $team->defense = $defense;
            ### Players ###
            $team->num_players = $num_players;
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
            ### Default Grade ###
            $team->team_grade = 'C';
            $team->skill_grade = 'C';
            ### Contextual Colors ###
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
            ### Stats ###
            $team->per = $per;
            $team->fg = $fg;
            $team->apg = $apg;
            $team->apg_ppg = $apg_ppg;
            $team->ppg = $ppg;
            $team->rpg = $rpg;
            ### Save the changes ###
            $team->save();
            ### Notification Details###
            $notification = "Team $team->name has been successfully updated. Check your team's profile to view changes.";
            $new_team ='no';
        }

        else {

            # Instantiate a new Book Model object
            $team = new Team();

            ### Owner ###
            $team->gamertag = $gamertag;
            ### Team  Name ###
            $team->name = $name;
            $team->abbreviation = $abbreviation;
            ### Record ###
            $team->wins = $wins;
            $team->losses = $losses;
            ### Social ###
            $team->twitter = $twitter;
            $team->youtube = $youtube;
            $team->twitch = $twitch;
            ### Profile ###
            $team->tagline = $tagline;
            $team->team_bg_pic = $team_background_pic;
            $team->team_profile_pic = $team_profile_pic;
            ### Type ###
            $team->type = $type;
            $team->affiliation = $affiliation;
            ### Play Style ###
            $team->tempo = $tempo;
            $team->movement = $movement;
            $team->offense = $offense;
            $team->defense = $defense;
            ### Players ###
            $team->num_players = $num_players;
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
            ### Default Grade ###
            $team->team_grade = 'C';
            $team->skill_grade = 'C';
            ### Contextual Colors ###
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
            ### Stats ###
            $team->per = $per;
            $team->fg = $fg;
            $team->apg = $apg;
            $team->apg_ppg = $apg_ppg;
            $team->ppg = $ppg;
            $team->rpg = $rpg;
            ### Save the changes ###
            $team->save();

            $notification = "Player details for $team have been uploaded. Check your team's profile to view changes.";
            $new_team = 'yes';
        }

        /* ======================================================
        Navigation Variables
        ====================================================== */
        ### LH Menu Tabs - Illuminate Current Page ###
        $my_player_heading = '';
        $update_heading = '';
        $my_team_heading = '';
        $team_update_heading = 'active';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = '';
        ### MyTeams Tab - Get list of Active Users' teams ###
        $teams_on = [];
        $teams_owned = [];
        //$player = Player::where('name', '=', Auth::user()->name )->first();
        foreach($player->teams as $team) {
            ### Teams Owned ###
            if ($team->pivot->status == 1) {
                $teams_owned[] = $team;
            }
            ### Teams Owned ###
            elseif($team->pivot->status == 2) {
                $teams_on[] = $team;
            }
        }

        /* ======================================================
        Interface Variables
        ====================================================== */
        $profile_pic = $player->player_profile_pic;
        $player_profile_pic = $player->player_profile_pic;

        /* ======================================================
        Remove Players from Teams
        ====================================================== */
        if($request->input('delete') == 'yes') {

           //Attatch authenticated user as team owner (Status = 1)
           if($player->teams->contains($team->id)) {
               $owner->teams()->updateExistingPivot($team->id, array('status' => 86));
               Team::where('id', '=', $team->id)->delete();
           }

           return view('teamupdate.delete')->with(['find_teams_heading' => $find_teams_heading, 'name' => $name, 'abbreviation' => $abbreviation,
                   'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'affiliation' => $affiliation, 'type' => $type,
                   'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade,
                   'activity_stream_heading' => $activity_stream_heading, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'profile_pic' => $profile_pic,
                   'team_profile_pic' => $team_profile_pic, 'team_background_pic' => $team_background_pic
           ]);
        }


        /* ======================================================
        Submit Form
        ====================================================== */
        $data = ['num_players' => $num_players, 'find_teams_heading' => $find_teams_heading, 'gamertag' => $gamertag, 'movement' => $movement, 'tempo' => $tempo,
                'offense' => $offense, 'defense' => $defense, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading,
                'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading,
                'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'tagline' => $tagline, 'name' => $name,
                'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'type' => $type, 'affiliation' => $affiliation,
                'abbreviation' => $abbreviation, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'wins' => $wins, 'losses' => $losses,
                'player1' => $player1, 'player2' => $player2, 'player3' => $player3, 'player4' => $player4, 'player5' => $player5, 'player6' => $player6,
                'player7' => $player7, 'player8' => $player8, 'player9' => $player9, 'player10' => $player10, 'team_members' => $team_members,
                'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on,  'new_team' => $new_team,
                'profile_pic' => $profile_pic, 'team_profile_pic' => $team_profile_pic, 'team_background_pic' => $team_background_pic,
                'player' => $player, 'player_profile_pic' => $player_profile_pic
            ];

        return view('teamupdate.show')->with($data);

    }
}
