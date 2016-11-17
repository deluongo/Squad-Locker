<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('teams')->insert([
             //Housekeeping
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             # Owner
             'gamertag' => 'CaptainAwesome650',
             # Team Settings
             'name' => 'StraightFundamental',
             'abbreviation' => 'SFTU',
             'wins' => '110',
             'losses' => '24',
             'type' => 'MyPark Squad',
             'affiliation' => 'Rivit City',
             'tagline' => 'Disciplined Offense Kills',

             'movement' => 'Ball-Movement',
             'tempo' => 'Uptempo',
             'offense' => 'Motion',
             'defense' => 'Team-D',

             //Players
             'player1' => 'CaptainAwesome650',
             'player2' => 'PrettyBoiFredo',
             //Social
             'twitter' => 'https://www.youtube.com/user/deluongo',
             'youtube' => 'https://twitter.com/DevonLuongo',
             'twitch' => 'https://www.twitch.tv/deluongo',

             //Stats
             'team_grade' => 'A+',
             'skill_grade' => 'B+',
         ]);

         DB::table('teams')->insert([
             //Housekeeping
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             # Owner
             'gamertag' => 'PrettyBoiFredo',
             # Team Settings
             'name' => 'Drewkerbockers',
             'abbreviation' => 'DREW',
             'wins' => '340',
             'losses' => '19',
             'type' => 'Pro-Am Team',
             'affiliation' => 'Old Town',
             'tagline' => '2015 RTTF Finals',

             'movement' => 'Isolation',
             'tempo' => 'Deliberate',
             'offense' => 'Free Lance',
             'defense' => 'Man',

             //Players
             'player1' => 'PrettyBoiFredo',
             
             //Social
             'twitter' => 'https://www.youtube.com/user/deluongo',
             'youtube' => 'https://twitter.com/DevonLuongo',
             'twitch' => 'https://www.twitch.tv/deluongo',

             //Stats
             'team_grade' => 'A+',
             'skill_grade' => 'B+',
         ]);

    }

}
