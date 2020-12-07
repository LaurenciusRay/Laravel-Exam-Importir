<?php

namespace App\Http\Controllers\KreasiEvent\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Event_dua;
use App\ParticipantUsers;
use App\Http\Controllers\KreasiEvent\Admin\Participant\ParticipantUsersRepository;

class ParticipantController extends Controller
{
    protected $participant;

    public function __construct()
    {
        $this->participant = new ParticipantUsersRepository();
    }
    public function index(){
        $data_participant = ParticipantUsers::all();
        return view('KreasiEvent.content.User.BladePendaftaran.index',compact('data_participant'));
    }

    public function create()
    {
        $data_event = Event::all();
        $data_events = Event_dua::all();
        $listperson = ParticipantUsers::where('event_id',1)->count();
        $listpersons = ParticipantUsers::where('event_id',1)->count();
        return view('KreasiEvent.content.User.BladePendaftaran.create',compact('data_event','data_events','listperson','listpersons'));
    }

    public function store(Request $request)
    {
        $this->participant->storeParticipant($request);
        return redirect()->route('pendaftaran.index')->with(['sukses' => 'Berhasil Mendaftar, Terimakasih']);
    }

}
