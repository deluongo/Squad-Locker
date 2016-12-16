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
             'team_bg_pic' => 'https://s24.postimg.org/heanx1cxh/steph2face.jpg',
             'team_profile_pic' => 'https://s27.postimg.org/vef3ooldf/rttf.jpg',

             'abbreviation' => 'SFTU',
             'wins' => '110',
             'losses' => '24',
             'type' => 'MyPark Squad',
             'affiliation' => 'Rivit City',
             'tagline' => 'Disciplined Offense Kills',

             'movement' => 'Ball-Movement',
             'tempo' => 'Patient',
             'offense' => 'Motion',
             'defense' => 'Zone',

             //Players
             'player1' => 'CaptainAwesome650',
             'player2' => 'PrettyBoiFredo',

             'num_players' => 2,
             //Social
             'twitter' => 'https://www.youtube.com/user/deluongo',
             'youtube' => 'https://twitter.com/DevonLuongo',
             'twitch' => 'https://www.twitch.tv/deluongo',

             //Stats
             'team_grade' => 'A+',
             'skill_grade' => 'B',
             'per' => 26.0,
             'fg' => 71.6,
             'apg' => 6.2,
             'apg_ppg' => 2.0,
             'ppg' => 3.1,
             'rpg' => 6.2,

             //Colors
             'progress_chart_color' => '#abe37d',
             'progress_bar_color' => 'success',
             'team_grade_color' => 'success',
             'skill_grade_color' => 'warning',
             'per_color' => 'success',
             'fg_color' => 'success',
             'apg_color' => 'success',
             'apg_ppg_color' => 'success',
             'ppg_color' => 'warning',
             'rpg_color' => 'success'
         ]);

         DB::table('teams')->insert([
             //Housekeeping
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             # Owner
             'gamertag' => 'jill',
             # Team Settings
             'name' => 'TheStudents',
             'team_bg_pic' => 'https://s27.postimg.org/fj0n78llv/Walking_To_School_On_Monday_Walking_Home_From_Sc.jpg',
             'team_profile_pic' => 'https://s-media-cache-ak0.pinimg.com/736x/00/0f/de/000fde75bdb773af7d8191145b614504.jpg',

             'abbreviation' => 'STUD',
             'wins' => '782',
             'losses' => '19',
             'type' => 'MyPark Squad',
             'affiliation' => 'Sunset Beach',
             'tagline' => 'GIVE HIM AN A!!! GIVE HIM AN A!!!!',

             'movement' => 'Run N Gun',
             'tempo' => 'Uptempo',
             'offense' => 'Motion',
             'defense' => 'No-Help',

             //Players
             'player1' => 'jill',
             'player2' => 'jamal',
             'player3' => 'CaptainAwesome650',

             'num_players' => 2,
             //Social
             'twitter' => 'https://www.youtube.com/user/students',
             'youtube' => 'https://twitter.com/students',
             'twitch' => 'https://www.twitch.tv/students',

             //Stats
             'team_grade' => 'A+',
             'skill_grade' => 'A+',
             'per' => 32.0,
             'fg' => 78.6,
             'apg' => 14.0,
             'apg_ppg' => 2.0,
             'ppg' => 14.0,
             'rpg' => 6.2,

             //Colors
             'progress_chart_color' => '#abe37d',
             'progress_bar_color' => 'success',
             'team_grade_color' => 'success',
             'skill_grade_color' => 'success',
             'per_color' => 'success',
             'fg_color' => 'success',
             'apg_color' => 'success',
             'apg_ppg_color' => 'warning',
             'ppg_color' => 'success',
             'rpg_color' => 'success'
         ]);


         DB::table('teams')->insert([
             //Housekeeping
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             # Owner
             'gamertag' => 'jamal',
             # Team Settings
             'name' => 'TheProfessors',
             'team_bg_pic' => 'https://s27.postimg.org/bwbmw0dtf/remember.jpg',
             'team_profile_pic' => 'http://www.takepart.com/sites/default/files/styles/tp_gallery_slide/public/teacher11.jpg?itok=oPHV2BNS',

             'abbreviation' => 'PROF',
             'wins' => '2',
             'losses' => '432',
             'type' => 'Pro-Am Team',
             'affiliation' => 'Old Town',
             'tagline' => 'Teaching you lessens since Y2K',

             'movement' => 'Player Movement',
             'tempo' => 'Deliberate',
             'offense' => 'Triangle',
             'defense' => 'No-Help',

             //Players
             'player1' => 'jamal',
             'player2' => 'jill',
             'player3' => 'HillaryClinton',

             'num_players' => 3,
             //Social
             'twitter' => 'https://www.youtube.com/user/teacher',
             'youtube' => 'https://twitter.com/teacher',
             'twitch' => 'https://www.twitch.tv/teacher',

             //Stats
             'team_grade' => 'A+',
             'skill_grade' => 'A+',
             'per' => 4.0,
             'fg' => 21.6,
             'apg' => 0.7,
             'apg_ppg' => 0.6,
             'ppg' => 0.3,
             'rpg' => 0.4,

             //Colors
             'progress_chart_color' => '#abe37d',
             'progress_bar_color' => 'danger',
             'team_grade_color' => 'danger',
             'skill_grade_color' => 'danger',
             'per_color' => 'danger',
             'fg_color' => 'danger',
             'apg_color' => 'danger',
             'apg_ppg_color' => 'warning',
             'ppg_color' => 'danger',
             'rpg_color' => 'danger'
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

             'team_profile_pic' => '/img/avatars/rttf.jpg',

             'movement' => 'Isolation',
             'tempo' => 'Slow',
             'offense' => 'Free Lance',
             'defense' => 'Man',

             //Players
             'player1' => 'PrettyBoiFredo',
             'player2' => 'CaptainAwesome650',

             'num_players' => 2,

             //Social
             'twitter' => 'https://www.youtube.com/user/PrettyBoiFredo',
             'youtube' => 'https://twitter.com/PrettyBoiFredo',
             'twitch' => 'https://www.twitch.tv/PrettyBoiFredo',

             //Stats
             'team_grade' => 'A+',
             'skill_grade' => 'B+',
             'per' => 13.1,
             'fg' => 36.5,
             'apg' => 1.8,
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

         DB::table('teams')->insert([
             //Housekeeping
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             # Owner
             'gamertag' => 'AishaCurry30',
             # Team Settings
             'name' => 'MVPCrew',
             'team_bg_pic' => '/img/photos/steph2face.jpg',

             'abbreviation' => 'MVP',
             'wins' => '30',
             'losses' => '30',
             'type' => 'MyPark Squad',
             'affiliation' => 'Sunset Beach',
             'tagline' => 'Home of the Back-2-Back MVP',

             'movement' => '7 Seconds',
             'tempo' => 'Fast',
             'offense' => 'Motion',
             'defense' => 'Team-D',

             //Players
             'player1' => 'AishaCurry30',
             'player3' => 'CaptainAwesome650',
             'player3' => 'PrettyBoiFredo',

             'num_players' => 3,
             //Social
             'twitter' => 'https://www.youtube.com/user/stephcurry30',
             'youtube' => 'https://twitter.com/stephcurry30',
             'twitch' => 'https://www.twitch.tv/stephcurry30',

             //Stats
             'team_grade' => 'A+',
             'skill_grade' => 'C+',
             'per' => 26.0,
             'fg' => 77.6,
             'apg' => 3.9,
             'apg_ppg' => 0.3,
             'ppg' => 17.2,
             'rpg' => 0.2,

             //Colors
             'progress_chart_color' => '#abe37d',
             'progress_bar_color' => 'success',
             'team_grade_color' => 'success',
             'skill_grade_color' => 'danger',
             'per_color' => 'success',
             'fg_color' => 'success',
             'apg_color' => 'success',
             'apg_ppg_color' => 'danger',
             'ppg_color' => 'success',
             'rpg_color' => 'danger'
         ]);

         DB::table('teams')->insert([
             //Housekeeping
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             # Owner
             'gamertag' => 'HillaryClinton',
             # Team Settings
             'name' => 'AmericanPoliticalDisaster',
             'team_bg_pic' => 'https://cdn.thefederalist.com/wp-content/uploads/2016/12/Hillary-Two-Thumbs-Up.jpg',
             'team_profile_pic' => 'http://www.slate.com/content/dam/slate/articles/news_and_politics/politics/2015/11/151114-democratic-debate/151114-debate-cbs-clinton6.jpg.CROP.promo-xlarge2.jpg',

             'abbreviation' => 'USA',
             'wins' => '0',
             'losses' => '1',
             'type' => 'MyPark Squad',
             'affiliation' => 'Old Town',
             'tagline' => 'You guys fucked up America. Seriously...Really?',

             'movement' => 'Ball-Movement',
             'tempo' => 'Slow',
             'offense' => 'Motion',
             'defense' => 'Man',

             //Players
             'player1' => 'HillaryClinton',
             'player2' => 'PrettyBoiFredo',
             'player3' => 'jill',
             'player4' => 'jamal',
             'player5' => 'CaptainAwesome650',
             'player6' => 'Susan',
             'player7' => 'AishaCurry30',

             'num_players' => 7,
             //Social
             'twitter' => 'https://www.youtube.com/user/HillaryClinton',
             'youtube' => 'https://twitter.com/HillaryClinton',
             'twitch' => 'https://www.twitch.tv/HillaryClinton',

             //Stats
             'team_grade' => 'C-',
             'skill_grade' => 'F',
             'per' => 0.0,
             'fg' => 0.0,
             'apg' => 75.0,
             'apg_ppg' => 99.9,
             'ppg' => 0.0,
             'rpg' => 0.0,

             //Colors
             'progress_chart_color' => '#abe37d',
             'progress_bar_color' => 'danger',
             'team_grade_color' => 'danger',
             'skill_grade_color' => 'danger',
             'per_color' => 'danger',
             'fg_color' => 'danger',
             'apg_color' => 'danger',
             'apg_ppg_color' => 'success',
             'ppg_color' => 'danger',
             'rpg_color' => 'danger'
         ]);

    }

}
