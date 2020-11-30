<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantUser extends Model
{
    protected $guarded = [];
    
    public function participant(){
        return $this->hasMany(ParticipantUser::class, 'participant_users_id', 'id');
    }

    public function event(){
        return $this->belongsTo(Event::class, 'events_id', 'id');
    }
}
