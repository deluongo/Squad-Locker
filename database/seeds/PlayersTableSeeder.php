<?php

use Illuminate\Database\Seeder;
use p4\User;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {

        $user_id = User::where('name','=','jamal')->pluck('id')->first();

        DB::table('players')->insert([

            //User Table Key
            'user_id' => $user_id,

            //Housekeeping
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

            //Profile
            'name' => 'jamal',
            'style' => 'Assist-King',
            'position' => 'PF',
            'affiliation' => 'Rivit City',
            'tagline' => 'Im totally giving this kid an A+',
            'player_profile_pic' => 'http://wp-images.emusic.com/assets/2012/02/ahmad-jamal-its-magic.jpg',
            'player_bg_pic' => 'https://ae01.alicdn.com/kf/HTB1SHJsIVXXXXa8aXXXq6xXFXXXL/-font-b-Harvard-b-font-University-Crimson-Flag-NCAA-3ft-x-5ft-Polyester-Banner-Flying.jpg',


            //'bg_image' => 'asset("/img/photos/pg2k.jpg")',
            //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

            //Social
            'twitter' => 'https://twitter.com/DevonLuongo',
            'youtube' => 'https://www.youtube.com/user/deluongo',
            'twitch' => 'https://www.twitch.tv/deluongo',

            //Park
            'rep_level' => 'Rookie 1',
            'rep_progress' => 0,
            'rep_status' => 'Rookie',
            'status_level' => 1,


            //Playstyle
            'type' => 'On-Ball',
            'role' => 'Shot-Creator',
            'archetype' => 'Shot Creator',

            //Stats
            'overall_talent_score' => 29,
            'team_grade' => 'A+',
            'skill_grade' => 'A+',
            'per' => 12.8,
            'fg' => 45,
            'apg' => 1.0,
            'apg_ppg' => 0.5,
            'ppg' => 2.0,
            'rpg' => 3.1,

            //Colors
            'progress_chart_color' => '#abe37d',
            'progress_bar_color' => 'success',
            'profile_pic_color' => 'danger',
            'team_grade_color' => 'success',
            'skill_grade_color' => 'success',
            'per_color' => 'warning',
            'fg_color' => 'warning',
            'apg_color' => 'warning',
            'apg_ppg_color' => 'danger',
            'ppg_color' => 'warning',
            'rpg_color' => 'success'
        ]);

        $user_id = User::where('name','=','jill')->pluck('id')->first();

        DB::table('players')->insert([

            //User Table Key
            'user_id' => $user_id,

            //Housekeeping
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),


            //Profile
            'name' => 'jill',
            'style' => 'Assist-King',
            'position' => 'PF',
            'affiliation' => 'Sunset Beach',
            'tagline' => 'Jamal, we should give him special desitinction, huh?',
            'player_profile_pic' => 'https://s24.postimg.org/qvlf2nrb9/TF_Player_Profile.jpg',
            'player_bg_pic' => 'https://s24.postimg.org/e9ax0negl/arun.jpg',
            //'bg_image' => 'asset("/img/photos/pg2k.jpg")',
            //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

            //Social
            'youtube' => 'https://www.youtube.com/user/jamal',
            'twitter' => 'https://twitter.com/jamal',
            'twitch' => 'https://www.twitch.tv/jamal',

            //Park
            'rep_level' => 'Pro 2',
            'rep_progress' => 40,
            'rep_status' => 'Pro',
            'status_level' => 2,


            //Playstyle
            'type' => 'Off-Ball',
            'role' => 'Facilitator',
            'archetype' => 'Glass Cleaner',

            //Stats
            'overall_talent_score' => 20,
            'team_grade' => 'B-',
            'skill_grade' => 'A-',
            'per' => 12.1,
            'fg' => 34,
            'apg' => 4.1,
            'apg_ppg' => 4.3,
            'ppg' => 0.9,
            'rpg' => 6.4,

            //Colors
            'progress_chart_color' => '#FADB7D',
            'progress_bar_color' => 'warning',
            'profile_pic_color' => 'danger',
            'team_grade_color' => 'warning',
            'skill_grade_color' => 'success',
            'per_color' => 'warning',
            'fg_color' => 'danger',
            'apg_color' => 'success',
            'apg_ppg_color' => 'success',
            'ppg_color' => 'danger',
            'rpg_color' => 'success'
        ]);

     $user_id = User::where('name','=','CaptainAwesome650')->pluck('id')->first();

     DB::table('players')->insert([

         //User Table Key
         'user_id' => $user_id,

         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),


         //Profile
         'name' => 'CaptainAwesome650',
         'style' => 'Ball-Movement-Coach',
         'position' => 'SG',
         'affiliation' => 'Rivit City',
         'tagline' => '"Bro...play defense..." *THROWS MOUTHPIRECE*',
         //'bg_image' => 'asset("/img/photos/pg2k.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Social
         'youtube' => 'https://www.youtube.com/user/devonluongo',
         'twitter' => 'https://twitter.com/DevonLuongo',
         'twitch' => 'https://www.twitch.tv/devonluongo',

         //Park
         'rep_level' => 'Legend 4',
         'rep_progress' => 60,
         'rep_status' => 'Legend',
         'status_level' => 4,


         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Playmaker',

         //Stats
         'overall_talent_score' => 85,
         'team_grade' => 'A+',
         'skill_grade' => 'A+',
         'per' => 28.2,
         'fg' => 75,
         'apg' => 2.5,
         'apg_ppg' => 1.2,
         'ppg' => 4.6,
         'rpg' => 3.1,

         //Colors
         'progress_chart_color' => '#abe37d',
         'progress_bar_color' => 'success',
         'profile_pic_color' => 'success',
         'team_grade_color' => 'success',
         'skill_grade_color' => 'success',
         'per_color' => 'success',
         'fg_color' => 'success',
         'apg_color' => 'success',
         'apg_ppg_color' => 'warning',
         'ppg_color' => 'success',
         'rpg_color' => 'success'
     ]);

     $user_id = User::where('name','=','Susan')->pluck('id')->first();

     DB::table('players')->insert([

         'user_id' => $user_id,

         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Profile
         'name' => 'Susan',
         'style' => 'Blow-By-Dunker',
         'position' => 'SF',
         'affiliation' => 'Rivit City',
         'tagline' => 'The Professor',
         //'bg_image' => 'asset("/img/photos/pg2k.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Social
         'youtube' => 'https://www.youtube.com/user/susanbuck',
         'twitter' => 'https://twitter.com/susanbuck',
         'twitch' => 'https://www.twitch.tv/susanbuck',

         //Park
         'rep_level' => 'Superstar 3',
         'rep_progress' => 60,
         'rep_status' => 'Superstar',
         'status_level' => 3,


         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Slasher',

         //Stats
         'overall_talent_score' => 73,
         'team_grade' => 'B-',
         'skill_grade' => 'A',
         'per' => 11.1,
         'fg' => 34,
         'apg' => 1.1,
         'apg_ppg' => 0.3,
         'ppg' => 3.3,
         'rpg' => 1.1,

         //Colors
         'progress_chart_color' => '#abe37d',
         'progress_bar_color' => 'success',
         'profile_pic_color' => 'success',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'warning',
         'rpg_color' => 'warning'
     ]);

     $user_id = User::where('name','=','PrettyBoiFredo')->pluck('id')->first();

     DB::table('players')->insert([

         'user_id' => $user_id,

         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Profile
         'name' => 'PrettyBoiFredo',
         'style' => 'Catch-N-Shoot',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         'player_profile_pic' => '/img/avatars/prettyboyfredo.jpg',
         'player_bg_pic' => '/img/photos/pg2k.jpg',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'youtube' => 'https://www.youtube.com/user/prettyboyfredo',
         'twitter' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Sharp Shooter',

         //Stats
         'overall_talent_score' => 50,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 13.8,
         'fg' => 68.2,
         'apg' => 1.5,
         'apg_ppg' => 0.6,
         'ppg' => 2.2,
         'rpg' => 1.0,

         //Colors
         'progress_chart_color' => '#FAAE7E',
         'progress_bar_color' => 'danger',
         'profile_pic_color' => 'warning',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'success',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'warning',
         'rpg_color' => 'warning'
     ]);

     $user_id = User::where('name','=','HillaryClinton')->pluck('id')->first();

     DB::table('players')->insert([

         'user_id' => $user_id,

         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Profile
         'name' => 'HillaryClinton',
         'style' => 'Backdoor-Posterizer',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Rookie 5',
         'rep_progress' => 40,
         'rep_status' => 'Rookie',
         'status_level' => 5,

         //Social
         'youtube' => 'https://www.youtube.com/user/HillaryClinton',
         'twitter' => 'https://twitter.com/HillaryClinton',
         'twitch' => 'https://www.twitch.tv/HillaryClinton',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Scorer',
         'archetype' => 'Sharp Shooter',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'F',
         'skill_grade' => 'F',
         'per' => 0.0,
         'fg' => 0.0,
         'apg' => 20.0,
         'apg_ppg' => 99.9,
         'ppg' => 0.0,
         'rpg' => 0.0,

         //Colors
         'progress_chart_color' => '#FAAE7E',
         'progress_bar_color' => 'danger',
         'profile_pic_color' => 'danger',
         'team_grade_color' => 'danger',
         'skill_grade_color' => 'danger',
         'per_color' => 'danger',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'success',
         'ppg_color' => 'danger',
         'rpg_color' => 'danger'
     ]);

     $user_id = User::where('name','=','AishaCurry30')->pluck('id')->first();

     DB::table('players')->insert([

         'user_id' => $user_id,

         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Profile
         'name' => 'AishaCurry30',
         'style' => 'Catch-N-Shoot',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'My husbad is the man #SC30 #Top10',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 40,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'youtube' => 'https://www.youtube.com/user/prettyboyfredo',
         'twitter' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Scorer',
         'archetype' => 'Sniper',

         //Stats
         'overall_talent_score' => 54,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 14.8,
         'fg' => 79.2,
         'apg' => 2.7,
         'apg_ppg' => 0.5,
         'ppg' => 5.9,
         'rpg' => 0.8,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'warning',
         'profile_pic_color' => 'success',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'success',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

/*
     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'YESSSSeer@gmail.com',
         'username' => 'YESSSSeer',
         'password' => 'toopretty',

         //Profile
         'name' => 'YESSSSeer',
         'style' => 'Drible-N-Dime',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Sharp Shooter',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 21.8,
         'fg' => 68.2,
         'apg' => 1.5,
         'apg_ppg' => 2.1,
         'ppg' => 2.2,
         'rpg' => 1.1,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'JLN345534@gmail.com',
         'username' => 'JLN345534',
         'password' => 'toopretty',

         //Profile
         'name' => 'JLN345534',
         'style' => 'Drible-N-Dime',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Sharp Shooter',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 19.8,
         'fg' => 1.7,
         'apg' => 1.7,
         'apg_ppg' => 2.1,
         'ppg' => 6.8,
         'rpg' => 1.1,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'SnapYAfangersss@gmail.com',
         'username' => 'SnapYAfangersss',
         'password' => 'toopretty',

         //Profile
         'name' => 'SnapYAfangersss',
         'style' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Catch-N-Shoot',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 18.8,
         'fg' => 25.5,
         'apg' => 1.7,
         'apg_ppg' => 2.1,
         'ppg' => 6.8,
         'rpg' => 1.2,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'danger',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'YATiddle@gmail.com',
         'username' => 'YATiddle',
         'password' => 'toopretty',

         //Profile
         'name' => 'YATiddle',
         'style' => 'Run-The-Break',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Sharp Shooter',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 17.8,
         'fg' => 25.5,
         'apg' => 1.7,
         'apg_ppg' => 2.1,
         'ppg' => 6.8,
         'rpg' => 1.2,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);


     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'LamarOdellBack@gmail.com',
         'username' => 'LamarOdellBack',
         'password' => 'toopretty',

         //Profile
         'name' => 'LamarOdellBack',
         'style' => 'Pass-To-Assist-King',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Scorer',
         'archetype' => 'Sharp Shooter',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 15.8,
         'fg' => 27.5,
         'apg' => 1.9,
         'apg_ppg' => 2.5,
         'ppg' => 6.8,
         'rpg' => 5.3,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'success',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'success',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'YungDRUPAL@gmail.com',
         'username' => 'YungDRUPAL',
         'password' => 'toopretty',

         //Profile
         'name' => 'YungDRUPAL',
         'style' => 'Pass-To-Assist-King',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Scorer',
         'archetype' => 'Playmaker',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 14.8,
         'fg' => 29.5,
         'apg' => 1.9,
         'apg_ppg' => 2.5,
         'ppg' => 6.7,
         'rpg' => 1.4,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'YungJeezy@gmail.com',
         'username' => 'YungJeezy',
         'password' => 'toopretty',

         //Profile
         'name' => 'YungJeezy',
         'style' => 'Assist-King',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Scorer',
         'archetype' => 'Playmaker',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 14.8,
         'fg' => 29.5,
         'apg' => 2.1,
         'apg_ppg' => 2.5,
         'ppg' => 6.7,
         'rpg' => 1.4,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'StillKANG@gmail.com',
         'username' => 'StillKANG',
         'password' => 'toopretty',

         //Profile
         'name' => 'StillKANG',
         'style' => 'Assist-King',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Playmaker',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 13.8,
         'fg' => 32.1,
         'apg' => 2.1,
         'apg_ppg' => 2.5,
         'ppg' => 6.6,
         'rpg' => 2.3,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'success',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'BAYarrrrea@gmail.com',
         'username' => 'BAYarrrrea',
         'password' => 'toopretty',

         //Profile
         'name' => 'BAYarrrrea',
         'style' => 'Ball-Movement-Coach',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Playmaker',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 12.8,
         'fg' => 32.3,
         'apg' => 2.3,
         'apg_ppg' => 2.5,
         'ppg' => 6.6,
         'rpg' => 2.3,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'success', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'success',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'SouljaBoi@gmail.com',
         'username' => 'SouljaBoi',
         'password' => 'toopretty',

         //Profile
         'name' => 'SouljaBoi',
         'style' => 'Ball-Movement-Coach',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Lockdown Defender',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 11.8,
         'fg' => 36.5,
         'apg' => 2.3,
         'apg_ppg' => 3.1,
         'ppg' => 6.1,
         'rpg' => 1.6,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'TELLem324@gmail.com',
         'username' => 'TELLem324',
         'password' => 'toopretty',

         //Profile
         'name' => 'TELLem324',
         'style' => 'Screen-And-D',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Lockdown Defender',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 13.1,
         'fg' => 36.5,
         'apg' => 2.3,
         'apg_ppg' => 3.1,
         'ppg' => 6.1,
         'rpg' => 1.6,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'Jump3rs1@gmail.com',
         'username' => 'Jump3rs1',
         'password' => 'toopretty',

         //Profile
         'name' => 'Jump3rs1',
         'style' => 'Screen-And-D',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Lockdown Defender',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 99.8,
         'fg' => 39.2,
         'apg' => 2.7,
         'apg_ppg' => 3.1,
         'ppg' => 6.1,
         'rpg' => 1.7,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'Jump3rs56@gmail.com',
         'username' => 'Jump3rs56',
         'password' => 'toopretty',

         //Profile
         'name' => 'Jump3rs56',
         'style' => 'Inside-Out-Big',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Slasher',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 3.8,
         'fg' => 39.2,
         'apg' => 2.7,
         'apg_ppg' => 3.1,
         'ppg' => 5.9,
         'rpg' => 1.7,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'success',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'success',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'LSK@gmail.com',
         'username' => 'LSK',
         'password' => 'toopretty',

         //Profile
         'name' => 'LSK',
         'style' => 'Defensive-Anchor',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Slasher',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 13.8,
         'fg' => 40.2,
         'apg' => 2.7,
         'apg_ppg' => 4.1,
         'ppg' => 5.9,
         'rpg' => 1.8,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'LuckyCharms@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'SwisherSweet',
         'style' => 'Defensive-Anchor',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Slasher',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 18.1,
         'fg' => 40.2,
         'apg' => 2.7,
         'apg_ppg' => 4.1,
         'ppg' => 5.7,
         'rpg' => 1.9,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => '2chaaaains',
         'style' => 'Boards-N-Outlets',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Athletic Finisher',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 11.1,
         'fg' => 40.2,
         'apg' => 2.7,
         'apg_ppg' => 4.1,
         'ppg' => 5.7,
         'rpg' => 1.9,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'LILyachty',
         'style' => 'Boards-N-Outlets',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Athletic Finisher',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 19.1,
         'fg' => 45.2,
         'apg' => .9,
         'apg_ppg' => 4.1,
         'ppg' => 5.4,
         'rpg' => 2.9,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'success', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'success',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'success',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'PReign',
         'style' => 'Putback-King',
         'position' => 'SF',
         'affiliation' => 'Sunset Beach',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Athletic Finisher',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 14.1,
         'fg' => 45.2,
         'apg' => .9,
         'apg_ppg' => 4.6,
         'ppg' => 5.4,
         'rpg' => 3.9,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'PJenkyJumper',
         'style' => 'Putback-King',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Athletic Finisher',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 4.1,
         'fg' => 45.2,
         'apg' => .9,
         'apg_ppg' => 4.5,
         'ppg' => 5.4,
         'rpg' => 1.9,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'SweatyOLDguy',
         'style' => 'Shot-Creator',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Stretch Big',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 20.1,
         'fg' => 55.2,
         'apg' => .9,
         'apg_ppg' => 4.3,
         'ppg' => 5.1,
         'rpg' => 2.1,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'LATERlooser',
         'style' => 'Shot-Creator',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Facilitator',
         'archetype' => 'Stretch Big',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 3.1,
         'fg' => 55.2,
         'apg' => .9,
         'apg_ppg' => 0.8,
         'ppg' => 5.1,
         'rpg' => 2.2,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'danger',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'LighteningIT007',
         'style' => 'Ankle-Breaking-Driver',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Stretch Big',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 3.6,
         'fg' => 55.2,
         'apg' => 1.4,
         'apg_ppg' => 0.8,
         'ppg' => 5.1,
         'rpg' => 2.,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'success', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'success',
         'skill_grade_color' => 'success',
         'per_color' => 'success',
         'fg_color' => 'success',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'success',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => '2FRESH4U',
         'style' => 'Ankle-Breaking-Driver',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2.3,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Stretch Big',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 3.9,
         'fg' => 58.2,
         'apg' => 1.4,
         'apg_ppg' => 0.8,
         'ppg' => 4.2,
         'rpg' => 2.4,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'JakkinUPPPPPPP',
         'style' => 'Blow-By-Dunker',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Post Scorer',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 4.9,
         'fg' => 59.2,
         'apg' => 1.4,
         'apg_ppg' => 0.8,
         'ppg' => 4.3,
         'rpg' => 2.4,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'danger',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'success',
         'ppg_color' => 'success',
         'rpg_color' => 'success'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => '30CurryLighter',
         'style' => 'Blow-By-Dunker',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Post Scorer',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => .9,
         'fg' => 60.2,
         'apg' => 1.4,
         'apg_ppg' => 0.8,
         'ppg' => 4.3,
         'rpg' => 2.4,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'success', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'success',
         'skill_grade_color' => 'success',
         'per_color' => 'success',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'ChefCurryBoi99',
         'style' => 'Isolation-Specialist',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Post Scorer',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 5.9,
         'fg' => 60.2,
         'apg' => 1.4,
         'apg_ppg' => 0.8,
         'ppg' => 4.4,
         'rpg' => 2.6,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'danger'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'DumpTrucksOnDatA$$',
         'style' => 'Isolation-Specialist',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Glass Cleaner',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 5.9,
         'fg' => 60.2,
         'apg' => 1.4,
         'apg_ppg' => 1.4,
         'ppg' => 4.4,
         'rpg' => 2.7,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'ChaCh1Ng',
         'style' => 'Post-Move-Master',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Glass Cleaner',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 15.9,
         'fg' => 61.2,
         'apg' => 1.5,
         'apg_ppg' => 1.4,
         'ppg' => 4.5,
         'rpg' => 4.7,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'danger',
         'skill_grade_color' => 'success',
         'per_color' => 'danger',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'NotSoFastGUy',
         'style' => 'Post-Move-Master',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Glass Cleaner',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 11.8,
         'fg' => 62.2,
         'apg' => 1.5,
         'apg_ppg' => 1.4,
         'ppg' => 4.5,
         'rpg' => 5.7,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'danger'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'MakeItRain888',
         'style' => 'Fast-Break-Finisher',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Point Forward',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 11.2,
         'fg' => 63.2,
         'apg' => 1.5,
         'apg_ppg' => 1.2,
         'ppg' => 4.5,
         'rpg' => 5.1,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'danger',
         'skill_grade_color' => 'success',
         'per_color' => 'danger',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'PBallHard',
         'style' => 'Pick-N-Roll-Big',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Point Forward',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 9.8,
         'fg' => 64.2,
         'apg' => 1.5,
         'apg_ppg' => 1.2,
         'ppg' => 4.5,
         'rpg' => 5.1,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'JumpShotKiller84',
         'style' => 'Second-Chance-Only',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Point Forward',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 24.8,
         'fg' => 65.2,
         'apg' => 1.5,
         'apg_ppg' => 1.2,
         'ppg' => 4.6,
         'rpg' => 5.2,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'GetAtMe16',
         'style' => 'Slash-N-Shoot',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Shot Creator',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 14.6,
         'fg' => 66.2,
         'apg' => 1.5,
         'apg_ppg' => 1.2,
         'ppg' => 4.8,
         'rpg' => 5.2,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'warning',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'warning'
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'prettyboifredo@gmail.com',
         'username' => 'prettyboifredo',
         'password' => 'toopretty',

         //Profile
         'name' => 'NoNameMonster',
         'style' => 'Backdoor-Posterizer',
         'position' => 'SF',
         'affiliation' => 'Old Town',
         'tagline' => 'Too pretty for my shirt BOI!',
         //'bg_image' => 'asset("/img/photos/steph2face.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,
         'rep_status' => 'Superstar',
         'status_level' => 2,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'On-Ball',
         'role' => 'Scorer',
         'archetype' => 'Shot Creator',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 14.8,
         'fg' => 67.2,
         'apg' => 1.5,
         'apg_ppg' => 0.8,
         'ppg' => 2.2,
         'rpg' => 1.0,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger', 'profile_pic_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'danger'
     ]);
*/
    }
}
