<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantEvent extends Model
{
    protected $guarded = [];

    public function participant(){
        return $this->belongsTo(ParticipantUser::class, 'participant_users_id', 'id');
    }
}
