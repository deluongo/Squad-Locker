<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Account Settings
         'email' => 'deluongo@gmail.com',
         'username' => 'deluongo',
         'password' => 'bluebear',


         //Profile
         'name' => 'CaptainAwesome650',
         'archetype' => 'Playmaker',
         'position' => 'PG',
         'affiliation' => 'Rivit City',
         'tagline' => '"Bro...play defense..." *THROWS MOUTHPIRECE*',
         //'bg_image' => 'asset("/img/photos/pg2k.jpg")',
         //'profile_pic' => 'asset("/img/avatars/prettyboyfredo.jpg")',

         //Social
         'twitter' => 'https://www.youtube.com/user/deluongo',
         'youtube' => 'https://twitter.com/DevonLuongo',
         'twitch' => 'https://www.twitch.tv/deluongo',

         //Park
         'rep_level' => 'All-Star 4',
         'rep_progress' => 60,
         'rep_status' => 'All-Star',
         'status_level' => 4,


         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'style' => 'Assist-King',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'A+',
         'skill_grade' => 'B+',
         'per' => 28.2,
         'fg' => 75,
         'apg' => 2.5,
         'apg_ppg' => 1.2,
         'ppg' => 4.6,
         'rpg' => 3.1,

         //Colors
         'progress_chart_color' => '#abe37d',
         'progress_bar_color' => 'success',
         'team_grade_color' => 'success',
         'skill_grade_color' => 'danger',
         'per_color' => 'success',
         'fg_color' => 'success',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'warning',
         'ppg_color' => 'warning',
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
         'name' => 'PrettyBoiFredo',
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 23.8,
         'fg' => 68.2,
         'apg' => 1.5,
         'apg_ppg' => 2.1,
         'ppg' => 2.2,
         'rpg' => 1.0,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger',
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
         'email' => 'YESSSSeer@gmail.com',
         'username' => 'YESSSSeer',
         'password' => 'toopretty',

         //Profile
         'name' => 'YESSSSeer',
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'email' => 'HillaryClinton@gmail.com',
         'username' => 'HillaryClinton',
         'password' => 'toopretty',

         //Profile
         'name' => 'HillaryClinton',
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 16.8,
         'fg' => 27.5,
         'apg' => 1.9,
         'apg_ppg' => 2.1,
         'ppg' => 6.8,
         'rpg' => 5.3,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'success',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'email' => 'AishaCurry30@gmail.com',
         'username' => 'AishaCurry30',
         'password' => 'toopretty',

         //Profile
         'name' => 'AishaCurry30',
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

         //Stats
         'overall_talent_score' => 0,
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 14.8,
         'fg' => 39.2,
         'apg' => 2.7,
         'apg_ppg' => 4.1,
         'ppg' => 5.9,
         'rpg' => 1.8,

         //Colors
         'progress_chart_color' => '#FADB7D',
         'progress_bar_color' => 'success',
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
         'email' => 'LSK@gmail.com',
         'username' => 'LSK',
         'password' => 'toopretty',

         //Profile
         'name' => 'LSK',
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'success',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'success',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'success',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
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
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
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
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Driver',

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
         'progress_bar_color' => 'danger',
         'team_grade_color' => 'warning',
         'skill_grade_color' => 'success',
         'per_color' => 'warning',
         'fg_color' => 'danger',
         'apg_color' => 'danger',
         'apg_ppg_color' => 'danger',
         'ppg_color' => 'success',
         'rpg_color' => 'danger'
     ]);

    }
}
