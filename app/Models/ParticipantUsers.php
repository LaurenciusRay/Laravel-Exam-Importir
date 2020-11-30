<?php

namespace App\Models;

// use App\Models\Event;
use Illuminate\Database\Eloquent\Model;

class ParticipantUsers extends Model
{
    protected $guarded = [];

    public function Event ()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    public function Events ()
    {
        return $this->belongsTo(events1::class, 'events_id', 'id');
    }
}
