<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->belongsToMany('p4\Player')->withPivot('status')->withTimestamps();
    }
}
