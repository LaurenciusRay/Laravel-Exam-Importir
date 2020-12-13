<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function participant(){
        return $this->belongsToMany(ParticipantUser::class,'participant_events','participant_users_id','events_id');
    }

    
}
