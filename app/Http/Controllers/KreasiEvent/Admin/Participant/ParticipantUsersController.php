<?php

namespace App\Http\Controllers\KreasiEvent\Admin\Participant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Event_dua;
use App\ParticipantUsers;
use App\Http\Controllers\KreasiEvent\Admin\EventDua\EventDuaRepository;

class ParticipantUsersController extends Controller
{
    protected $participant;

    public function __construct()
    {
        $this->participant = new ParticipantUsersRepository();
    }
    public function index(){
        $data_participant = ParticipantUsers::all();
        return view('KreasiEvent.content.Admin.BladeParticipant.index',compact('data_participant'));
    }

    public function destroy(ParticipantUsers $participant)
    {
        $this->participant->destroyParticipant($participant);
        return redirect()->route('participant.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}
