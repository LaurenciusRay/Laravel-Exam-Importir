<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantUser extends Model
{
    protected $guarded = [];
    
    public function event(){
        return $this->belongsToMany(Event::class, 'participant_events','participant_users_id','events_id');
    }
}
