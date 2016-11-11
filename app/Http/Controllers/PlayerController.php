<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player; # <--- NEW

class PlayerController extends Controller
{
    /**
    * Display the specified resource.
    *
    * @param  int
    * @return \Illuminate\Http\Response
    */

    /* ======================================================
    Display on load
    ====================================================== */
    public function show()
    {
        $player = Player::where('name', '=', 'CaptainAwesome650')->first();

        if($player) {
            //Profile
            $name = $player->name;
            $affiliation = $player->affiliation;
            $archetype = $player->archetype;
            $position = $player->position;
            $tagline = $player->tagline;
            //$bg_image = $player->bg_image;
            //$profile_pic = $player->profile_pic;

            //Park
            $rep_level = $player->rep_level;
            $rep_progress = $player->rep_progress;

            //Social
            $twitter = $player->twitter;
            $youtube = $player->youtube;
            $twitch = $player->twitch;

            //Playstyle
            $type = $player->type;
            $role = $player->role;
            $style = $player->style;

            //Stats
            $team_grade = $player->team_grade;
            $skill_grade = $player->skill_grade;
            $per = $player->per;
            $fg = $player->fg;
            $apg = $player->apg;
            $apg_ppg = $player->apg_ppg;
            $ppg = $player->ppg;
            $rpg = $player->rpg;
        }
        else {
            return 'Player data not found.';
        }

        $data = ['name' => $name, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role, 'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg];
        return view('player.show')->with($data);
    }

    public function show2()
    {
        return view('player.player-nav-js');
    }

    /* ======================================================
    Display on form submit
    ====================================================== */
    public function post(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'per' => 'numeric',
            'fg%' => 'numeric',
            'apg' => 'numeric',
            'apg_ppg' => 'numeric',
            'ppg' => 'numeric',
            'rpg' => 'numeric',
        ]);

        $name = $request->input('name');
        $per = $request->input('per');
        $fg = $request->input('fg');
        $apg = $request->input('apg');
        $apg_ppg = $request->input('apg_ppg');
        $ppg = $request->input('ppg');
        $rpg = $request->input('rpg');

        DB::table('players')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'name' => $name,
             'per' => $per,
             'fg' => $fg,
             'apg' => $apg,
             'apg_ppg' => $apg_ppg,
             'ppg' => $ppg,
             'rpg' => $rpg,
         ]);

         # First get a book to update
        $player = Player::where('name', '=', 'CaptainAwesome650')->first();

        # If we found the book, update it
        if($player) {

             # Update values
            $player->name = $name;
            $player->per = $per;
            $player->fg = $fg;
            $player->apg = $apg;
            $player->apg_ppg = $apg_ppg;
            $player->ppg = $ppg;
            $player->rpg = $rpg;

            # Save the changes
            $player->save();

            echo "Update complete; check the database to see if your update worked...";
        }

        else {
            # Instantiate a new Book Model object
            $player = new Player();

            # Update values
            $player->name = $name;
            $player->per = $per;
            $player->fg = $fg;
            $player->apg = $apg;
            $player->apg_ppg = $apg_ppg;
            $player->ppg = $ppg;
            $player->rpg = $rpg;

            $book->save();

            echo 'Added: '.$player->name;
        }

        $data = ['name' => $name, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg];
        return view('player.show')->with($data);

    }
}
