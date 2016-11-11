<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use DB;
use Carbon;
use p4\Player; # <--- NEW

class UpdateController extends Controller
{
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
            $rep_status = $player->rep_status;
            $status_level = $player->status_level;

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

        $data = ['name' => $name, 'rep_status' => $rep_status, 'status_level' => $status_level, 'tagline' => $tagline, 'affiliation' => $affiliation, 'archetype' => $archetype, 'position' => $position, 'twitter' => $twitter, 'youtube' => $youtube, 'twitch' => $twitch, 'type' => $type, 'rep_level' => $rep_level, 'rep_progress' => $rep_progress, 'role' => $role, 'style' => $style, 'team_grade' => $team_grade, 'skill_grade' => $skill_grade, 'per' => $per, 'fg' => $fg, 'apg' => $apg, 'apg_ppg' => $apg_ppg, 'ppg' => $ppg, 'rpg' => $rpg];
        return view('update.show')->with($data);
    }
}
