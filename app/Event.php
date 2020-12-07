<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function participantusers1 ()
    {
        return $this->hasMany(ParticipantUsers::class, 'event_id', 'id');
    }
}
