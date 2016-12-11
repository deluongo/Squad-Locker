<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function teams()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('p4\Team')->withPivot('status')->withTimestamps();
    }

    public function users()
    {
       # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
       return $this->belongsTo('p4\User');
    }
}
