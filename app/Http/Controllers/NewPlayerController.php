<?php
namespace p4\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player; # <--- NEW
class NewPlayerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /* ======================================================
    Authorize User
    ====================================================== */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* ======================================================
   Show Form
   ====================================================== */
    public function show()
    {
        /* ======================================================
        Database Query - Get Players Associated w/ Active User
        ====================================================== */
        $player = Player::where('name', '=', Auth::user()->name )->first();

        /* ======================================================
        Default Variables - Ensure Page Load
        ====================================================== */
        $notification = null;
        ### Player Profile ###
        $name = null;
        $affiliation = null;
        $archetype = null;
        $position = null;
        $tagline = null;
        $background_pic = 'https://s3.amazonaws.com/thinkific/courses/course_card_image_000/004/5921439502331.original.jpg?1439502331';
        $profile_pic = 'http://cdn.idigitaltimes.com/sites/idigitaltimes.com/files/2016/06/01/nba-2k16-champs-tournament.JPG';
        ### Park ###
        $rep_level = null;
        $rep_progress = null;
        $rep_status = null;
        $status_level = null;
        ### Social ###
        $twitter = 'http://';
        $youtube = 'http://';
        $twitch = 'http://';
        ### Playstyle ###
        $type = null;
        $role = null;
        $style = null;
        ### Stats ###
        $team_grade = null;
        $skill_grade = null;
        $per = null;
        $fg = null;
        $apg = null;
        $apg_ppg = null;
        $ppg = null;
        $rpg = null;

        /* ======================================================
        Database Values - Replace Default Values w/ Player Data
        ====================================================== */
        if($player) {
            ### Account Settings ###
            $name = $player->name;
            ### Profile ###
            $affiliation = $player->affiliation;
            $archetype = $player->archetype;
            $position = $player->position;
            $tagline = $player->tagline;
            ### Images ###
            $background_pic = $player->player_profile_pic;
            $profile_pic = $player->player_bg_pic;
            ### Park ###
            $rep_level = $player->rep_level;
            $rep_progress = $player->rep_progress;
            $rep_status = $player->rep_status;
            $status_level = $player->status_level;
            ### Social ###
            $twitter = $player->twitter;
            $youtube = $player->youtube;
            $twitch = $player->twitch;
            ### Playstyle ###
            $type = $player->type;
            $role = $player->role;
            $style = $player->style;
            ### Stats ###
            $team_grade = $player->team_grade;
            $skill_grade = $player->skill_grade;
            $per = $player->per;
            $fg = $player->fg;
            $apg = $player->apg;
            $apg_ppg = $player->apg_ppg;
            $ppg = $player->ppg;
            $rpg = $player->rpg;

            $new_player = 'no';
        }
        else {
            $notification = 'Player data not found. All fields are required.';
            $new_player = 'yes';
            $name = Auth::user()->name;
        }

        /* ======================================================
        Navigation Vars - Remember Active Page
        ====================================================== */
        ### For Highlighting ###
        $my_player_heading = '';
        $update_heading = 'active';
        $my_team_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $team_update_heading = '';
        $find_teams_heading = '';
        ### For Teams Dropdown ###
        $teams_on = [];
        $teams_owned = [];

        /* ======================================================
        Show Form
        ====================================================== */
        $data = ['profile_pic' => $profile_pic, 'background_pic' => $background_pic, 'find_teams_heading' => $find_teams_heading, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'name' => $name, 'rep_status' => $rep_status, 'status_level' => $status_level, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role, 'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'new_player' => $new_player];
        return view('newplayer.show')->with($data);
    }


    /* ======================================================
    Submit Form
    ====================================================== */
    public function post(Request $request)
    {
        //Test Var
        //echo 'WTF';

        /* ======================================================
        Database Query - Get Players Associated w/ Active User
        ====================================================== */
        $player = Player::where('name', '=', Auth::user()->name )->first();
        $name = null;

        /* ======================================================
        Player Data - Load From Database
        ====================================================== */
        if($player) {
            ### Account Settings ###
            $name = $player->name;
            ### Profile ###
            $affiliation = $player->affiliation;
            $archetype = $player->archetype;
            $position = $player->position;
            $tagline = $player->tagline;
            ### Social ###
            $twitter = $player->twitter;
            $youtube = $player->youtube;
            $twitch = $player->twitch;
            ### Images ###
            $profile_pic = $player->player_profile_pic;
            $background_pic = $player->player_bg_pic;
            ### Park Rank ###
            $rep_level = $player->rep_level;
            $rep_progress = $player->rep_progress;
            $rep_status = $player->rep_status;
            $status_level = $player->status_level;
            ### Playstyle ###
            $type = $player->type;
            $role = $player->role;
            $style = $player->style;
            ### Stats ###
            $team_grade = $player->team_grade;
            $skill_grade = $player->skill_grade;
            $per = $player->per;
            $fg = $player->fg;
            $apg = $player->apg;
            $apg_ppg = $player->apg_ppg;
            $ppg = $player->ppg;
            $rpg = $player->rpg;
            ### Error Notification Filter ###
            $new_player = 'no';
        }

        else {
            ### Error Notification Filter ###
            $new_player = 'yes';
        }

        /* ======================================================
        Validation - Server Side
        ====================================================== */
        ### Only Apply When Replacing Current Value ###
        if ($request->input('name') != $name){
            $uni_name = "|unique:players";
        }
        else {
            $uni_name = '';
        }
        ### Validation Rules ###
        $this->validate($request, [
            /* ======================================================
            Page 1
            ====================================================== */
            ### Account Settings ###
            'name' => "required|alpha_dash{$uni_name}",
            ### Social ###
            'twitter' => 'required|active_url',
            'youtube' => 'required|active_url',
            'twitch' => 'required|active_url',
            ### Images ###
            'background_pic' => 'active_url',
            'profile_pic' => 'active_url',
            /* ======================================================
            Page 2
            ====================================================== */
            ### Profile ###
            'position' => 'required',
            'archetype' => 'required',
            'affiliation' => 'required',
            'tagline' => 'required|alpha_dash',
            ### Park Rank ###
            'rep_status' => 'required',
            'status_level' => 'required',
            'rep_progress' => 'required',
            'style' => 'required',
            /* ======================================================
            Page 3
            ====================================================== */
            'per' => 'required',
            'ppg' => 'required',
            'apg' => 'required',
            'apg_ppg' => 'required',
            'fg' => 'required|numeric|max:100|min:0',
            'rpg' => 'required',
        ]);

        /* ======================================================
        Store Form Results
        ====================================================== */
        ### Account Settings ###
        if (!$request->input('name') == null) {
            $name = $request->input('name');
        }
        ### Profile ###
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
        ### Images ###
        if (!$request->input('background_pic') == null) {
            $background_pic = $request->input('background_pic');
        }
        if (!$request->input('profile_pic') == null) {
            $profile_pic = $request->input('profile_pic');
        }
        ### Park ###
        $rep_progress = $request->input('rep_progress');
        $rep_status = $request->input('rep_status');
        $status_level = $request->input('status_level');
        $rep_level = "{$rep_status} {$status_level}";
        ### Social ###
        $twitter = $request->input('twitter');
        $youtube = $request->input('youtube');
        $twitch = $request->input('twitch');
        ### Playstyle ###
        if (!$request->input('type') == null) {
            $type = $request->input('type');
        }
        if (!$request->input('role') == null) {
            $role = $request->input('role');
        }
        if (!$request->input('style') == null) {
            $style = $request->input('style');
        }
        ### Stats ###
        $per = $request->input('per');
        $fg = $request->input('fg');
        $apg = $request->input('apg');
        $apg_ppg = $request->input('apg_ppg');
        $ppg = $request->input('ppg');
        $rpg = $request->input('rpg');
        $overall_talent_score = (int) round( ( 100 * (($fg/100)*$ppg + $apg_ppg*$apg/1.5 + 2*$rpg ) / 20 ) );
        //Default Team Grade

        ##### TEMPORARY #####
        $team_grade = 'C';
        $skill_grade = 'C';
        //$email = Auth::user()->email;
        //$password = Auth::user()->email;
        $user_id = Auth::user()->id;


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
            ### Key ###
            $player->user_id = $user_id;
            ### Account Settings ###
            $player->name = $name;
            ### Profile ###
            $player->affiliation = $affiliation;
            $player->archetype = $archetype;
            $player->position = $position;
            $player->tagline = $tagline;
            ### Images ###
            $player->player_bg_pic = $background_pic;
            $player->player_profile_pic = $profile_pic;
            ### Park Rank ###
            $player->rep_level = $rep_level;
            $player->rep_progress = $rep_progress;
            $player->rep_status = $rep_status;
            $player->status_level = $status_level;
            ### Social ###
            $player->twitter = $twitter;
            $player->youtube = $youtube;
            $player->twitch = $twitch;
            ### Playstyle ###
            $player->type = $type;
            $player->role = $role;
            $player->style = $style;
            ### Stats ###
            $player->overall_talent_score = $overall_talent_score;
            $player->team_grade = $team_grade;
            $player->skill_grade = $skill_grade;
            $player->per = $per;
            $player->fg = $fg;
            $player->apg = $apg;
            $player->apg_ppg = $apg_ppg;
            $player->ppg = $ppg;
            $player->rpg = $rpg;
            ### Colors ###
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
            ### Save The Changes ###
            $player->save();
            $notification = "Update for $name is complete. Check your profile to view changes.";
            ### Notification Filter ###
            $new_player = 'no';
        }
        else {
            ### Instantiate New Player Model ###
            $player = new Player();
            ### Key ###
            $player->user_id = $user_id;
            ### Account Settings ###
            $player->name = $name;
            ### Profile ###
            $player->affiliation = $affiliation;
            $player->archetype = $archetype;
            $player->position = $position;
            $player->tagline = $tagline;
            ### Images ###
            $player->player_bg_pic = $background_pic;
            $player->player_profile_pic = $profile_pic;
            ### Park Status ###
            $player->rep_level = $rep_level;
            $player->rep_progress = $rep_progress;
            $player->rep_status = $rep_status;
            $player->status_level = $status_level;
            ### Social ###
            $player->twitter = $twitter;
            $player->youtube = $youtube;
            $player->twitch = $twitch;
            ### Playstyle ###
            $player->type = $type;
            $player->role = $role;
            $player->style = $style;
            ### Stats ###
            $player->overall_talent_score = $overall_talent_score;
            $player->team_grade = $team_grade;
            $player->skill_grade = $skill_grade;
            $player->per = $per;
            $player->fg = $fg;
            $player->apg = $apg;
            $player->apg_ppg = $apg_ppg;
            $player->ppg = $ppg;
            $player->rpg = $rpg;
            ### Colors ###
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
            ### Save Changes ###
            $player->save();

            $notification = "Player details for $name have been uploaded. Check your profile to view changes.";

            $new_player = 'added';
        }

        /* ======================================================
        Navigation Vars - Remember Active Page
        ====================================================== */
        ### Highlighting Variables ###
        $my_player_heading = '';
        $update_heading = 'active';
        $my_team_heading = '';
        $team_update_heading = '';
        $free_agency_heading = '';
        $activity_stream_heading = '';
        $find_teams_heading = '';
        ### Teams Tab Variables ###
        $teams_on = [];
        $teams_owned = [];

        /* ======================================================
        Show Form
        ====================================================== */
        $data = ['profile_pic' => $profile_pic, 'background_pic' => $background_pic, 'find_teams_heading' => $find_teams_heading, 'team_update_heading' => $team_update_heading, 'my_player_heading' => $my_player_heading, 'update_heading' => $update_heading, 'my_team_heading' => $my_team_heading, 'free_agency_heading' => $free_agency_heading, 'activity_stream_heading' => $activity_stream_heading, 'notification' => $notification, 'name' => $name, 'rep_status' => $rep_status, 'status_level' => $status_level, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role, 'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg, 'teams_owned' => $teams_owned, 'teams_on' => $teams_on, 'new_player' => $new_player];
        //return view('newplayer.show')->with($data);
        return redirect('player')->with('status', 'Profile updated!');
    }
}
