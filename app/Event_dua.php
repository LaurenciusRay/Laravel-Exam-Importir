<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_dua extends Model
{
    protected $guarded = [];

    public function participantusers2 ()
    {
        return $this->hasMany(ParticipantUsers::class, 'event_dua_id', 'id');
    }
}
