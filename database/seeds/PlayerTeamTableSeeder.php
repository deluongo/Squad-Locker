<?php

use Illuminate\Database\Seeder;
use p4\Team;
use p4\Player;

class PlayerTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

         # On Team AS PLAYER
         $players =[
             'CaptainAwesome650' => ['Drewkerbockers', 'The Students', 'MVP Crew', 'American Political Disaster'],
             'HillaryClinton' => ['StraightFundamental', 'The Professors'],
             'PrettyBoiFredo' => ['StraightFundamental', 'MVP Crew', 'American Political Disaster'],
             'jamal' => ['The Students', 'MVP Crew', 'American Political Disaster', 'American Political Disaster'],
             'jill' => ['The Professors', 'American Political Disaster', 'American Political Disaster'],
             'AishaCurry30' => ['American Political Disaster'],
             'Susan' => ['American Political Disaster'],
         ];

         # Now loop through the above array, creating a new pivot for each book to tag
         foreach($players as $name => $teams) {

             # First get the book
             $player = Player::where('name','like', $name)->first();

             # Now loop through each tag for this book, adding the pivot
             foreach($teams as $teamName) {
                 $team = Team::where('name','LIKE',$teamName)->first();

                 # Connect this tag to this book
                 # Status reference
                 # 0 = no relationship
                 # 1 = own
                 # 2 = member
                 # 3 = expressed interest
                 # 4 = rejected
                 # 5 = blocked
                 $player->teams()->save($team, ['status' => 2]);
             }

         }


           # On Team AS OWNER
          $owners =[

              'CaptainAwesome650' => ['StraightFundamental'],
              'HillaryClinton' => ['American Political Disaster'],
              'PrettyBoiFredo' => ['Drewkerbockers'],
              'jamal' => ['The Professors'],
              'jill' => ['The Students'],
              'AishaCurry30' => ['MVP Crew'],
          ];

          # Now loop through the above array, creating a new pivot for each book to tag
          foreach($owners as $name => $teams) {

              # First get the book
              $player = Player::where('name','like', $name)->first();

              # Now loop through each tag for this book, adding the pivot
              foreach($teams as $teamName) {
                  $team = Team::where('name','LIKE',$teamName)->first();

                  # Connect this tag to this book
                  # Status reference
                  # 0 = no relationship
                  # 1 = own
                  # 2 = member
                  # 3 = expressed interest
                  # 4 = rejected
                  # 5 = blocked
                  $player->teams()->save($team, ['status' => 1]);
              }

          }

          # 1 is ownership
          # 2 is on active roster
          # 3 invited, waiting response
          # 4 requested, waiting reponse
          # 5 = blocked ??
/*
          //Teams that have extended offers
          $invited =[
              //'CaptainAwesome650' => ['InvitesTester', 'RequestsTester'],
              'CaptainAwesome650' => ['The Professors']
          ];

          //Players that have requested an available roster spot on a team
          foreach($invited as $name => $teams) {

              // Get first player
              $player = Player::where('name','like', $name)->first();

              // Loop through each teammember for this team, adding the pivot
              foreach($teams as $teamName) {
                  $team = Team::where('name','LIKE',$teamName)->first();

                  $player->teams()->save($team, ['status' => 3]);
              }
          }


          //Teams that have extended offers
          $requested =[
              'CaptainAwesome650' => ['RequestsTester'],
          ];

          //Players that have requested an available roster spot on a team
          foreach($requested as $name => $teams) {

              // Get first player
              $player = Player::where('name','like', $name)->first();

              // Loop through each teammember for this team, adding the pivot
              foreach($teams as $teamName) {
                  $team = Team::where('name','LIKE',$teamName)->first();

                  # Connect this tag to this book
                  # Status reference
                  # 0 = no relationship
                  # 1 = own
                  # 2 = member
                  # 3 = expressed interest
                  # 4 = rejected
                  # 5 = blocked
                  $player->teams()->save($team, ['status' => 4]);
              }
          } */

     }
}
