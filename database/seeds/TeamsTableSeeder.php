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
             'per' => 26.0,
             'fg' => 71.6,
             'apg' => 6.0,
             'apg_ppg' => 0.6,
             'ppg' => 10.2,
             'rpg' => 6.2,

             //Colors
             'progress_chart_color' => '#abe37d',
             'progress_bar_color' => 'success',
             'team_grade_color' => 'success',
             'skill_grade_color' => 'warning',
             'per_color' => 'success',
             'fg_color' => 'success',
             'apg_color' => 'success',
             'apg_ppg_color' => 'danger',
             'ppg_color' => 'success',
             'rpg_color' => 'success'
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

    }

}
