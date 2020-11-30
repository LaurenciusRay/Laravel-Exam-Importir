<?php

namespace App\Models;

// use App\backend\ParticipantUsers\ParticipantUsers;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function participant ()
    {
        return $this->hasMany(ParticipantUsers::class, 'event_id', 'id');
    }
}
