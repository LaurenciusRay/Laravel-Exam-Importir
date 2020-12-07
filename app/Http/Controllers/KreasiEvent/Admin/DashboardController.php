<?php

namespace App\Http\Controllers\KreasiEvent\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use App\Event_dua;
use App\ParticipantUsers;

class DashboardController extends Controller
{
    public function index(){
        $event = Event::all();
        $events = Event_dua::all();
        $participant = ParticipantUsers::all();
        return view('KreasiEvent.content.Admin.dashboard',compact('event','events','participant'));
    }
}
