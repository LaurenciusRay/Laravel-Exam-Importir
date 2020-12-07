<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantUsers extends Model
{
    protected $guarded = [];

    public function Event ()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    public function Event_dua ()
    {
        return $this->belongsTo(Event_dua::class, 'event_dua_id', 'id');
    }
}
