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

         # First, create an array of all the books we want to associate tags with
         # The *key* will be the book title, and the *value* will be an array of tags.
         $players =[
             'CaptainAwesome650' => ['Drewkerbockers'],
             'HillaryClinton' => ['StraightFundamental'],
             'PrettyBoiFredo' => ['StraightFundamental'],
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


          # First, create an array of all the books we want to associate tags with
          # The *key* will be the book title, and the *value* will be an array of tags.
          $owners =[
              'CaptainAwesome650' => ['StraightFundamental'],
              'PrettyBoiFredo' => ['Drewkerbockers'],
              'HillaryClinton' => ['InvitesTester'],
              'AishaCurry30' => ['RequestsTester'],
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

          //Teams that have extended offers
          $invited =[
              //'CaptainAwesome650' => ['InvitesTester', 'RequestsTester'],
              'CaptainAwesome650' => ['InvitesTester']
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
          }

     }
}
