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

         //Profile
         'name' => 'CaptainAwesome650',
         'archetype' => 'Playmaker',
         'position' => 'PG',
         'affiliation' => 'Rivit City',
         'tagline' => '"Bro...play defense..." *THROWS MOUTHPIRECE*',

         //Social
         'twitter' => 'https://www.youtube.com/user/deluongo',
         'youtube' => 'https://twitter.com/DevonLuongo',
         'twitch' => 'https://www.twitch.tv/deluongo',

         //Park
         'rep_level' => 'All-Star 4',
         'rep_progress' => 60,

         //Playstyle
         'type' => 'Off-Ball',
         'role' => 'Facilitator',
         'style' => 'Assist-King',

         //Stats
         'team_grade' => 'A+',
         'skill_grade' => 'B+',
         'per' => 28.2,
         'fg' => .625,
         'apg' => 2.4,
         'apg_ppg' => 1.2,
         'ppg' => 4.6,
         'rpg' => 3.1
     ]);

     DB::table('players')->insert([
         //Housekeeping
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),

         //Profile
         'name' => 'PrettyBoiFredo',
         'archetype' => 'Sharp Shooter',
         'position' => 'SF',
         'affiliation' => 'Sunset',
         'tagline' => 'Too pretty for my shirt BOI!',

         //Park
         'rep_level' => 'Superstar 2',
         'rep_progress' => 20,

         //Social
         'twitter' => 'https://www.youtube.com/user/prettyboyfredo',
         'youtube' => 'https://twitter.com/Prettyboyfredo',
         'twitch' => 'https://www.twitch.tv/prettyboyfredo',

         //Playstyle
         'type' => 'Ball-Dominant',
         'role' => 'Scorer',
         'style' => 'Ankle-Breaking-Penetrator',

         //Stats
         'team_grade' => 'B+',
         'skill_grade' => 'A-',
         'per' => 16.4,
         'fg' => .435,
         'apg' => 1.6,
         'apg_ppg' => 0.8,
         'ppg' => 6.8,
         'rpg' => 1.3
     ]);

    }
}
