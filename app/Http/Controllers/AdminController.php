<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParticipantUser;
use App\Event;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function participantList(){
        $participant = ParticipantUser::all();
        $event = Event::all();
        return view('admin.participant',compact('participant' , 'event'));
    }

    public function event(){
        $event = Event::all();
        return view('admin.dashboard',compact('event'));
    }

    public function eventDetail(Event $event){
        return view('admin.event-detail',['event' => $event]);
    }
}
