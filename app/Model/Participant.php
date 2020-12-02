<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participant_users';
    protected $guarded = ['id','deleted_at'];
}
