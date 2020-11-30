<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function event(){
        return $this->hasMany(Event::class, 'events_id', 'id');
    }

    
}
