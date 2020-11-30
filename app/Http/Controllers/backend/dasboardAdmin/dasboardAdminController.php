<?php

namespace App\Http\Controllers\backend\dasboardAdmin;

use App\Models\Event;
use App\Models\events1;
use App\Models\ParticipantUsers;
use App\Http\Controllers\Controller;

class dasboardAdminController extends Controller
{
    public function index () {
        $event = Event::all();
        $event1 = events1::all();
        $participant = ParticipantUsers::all();
        return view ('backend.dasboardAdmin.dasboard-admin', compact('event', 'participant', 'event1'));
    }
}
