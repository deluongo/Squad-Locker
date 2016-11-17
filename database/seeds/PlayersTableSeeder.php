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
         'team_grade' => 'A+',
         'skill_grade' => 'B+',
         'per' => 28.2,
         'fg' => 75,
         'apg' => 2.5,
         'apg_ppg' => 1.2,
         'ppg' => 4.6,
         'rpg' => 3.1
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
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 16.4,
         'fg' => 25,
         'apg' => 1.5,
         'apg_ppg' => 0.8,
         'ppg' => 6.8,
         'rpg' => 1.3
     ]);

    }
}
