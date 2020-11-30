<?php

namespace App\Http\Controllers\KreasiEvent\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ParticipantUser;
use App\Http\Controllers\Repository\ParticipantRepository;

class ParticipantController extends Controller
{
    protected $participant;

    public function __construct()
    {
        $this->participant = new ParticipantRepository();
    }
    public function index(){
        $data_participant = ParticipantUser::all();
        return view('KreasiEvent.content.Admin.BladeParticipant.index',compact('data_participant'));
    }

    public function edit(ParticipantUser $participant)
    {
        $participant->find($participant->id)->all();
        return view('KreasiEvent.content.Admin.BladeParticipant.edit',compact('participant'));
    }

    public function update(Request $request, ParticipantUser $participant)
    {
        $this->participant->updateParticipant($request,$participant);
        return redirect()->route('participant.index')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy(ParticipantUser $participant)
    {
        $this->repo->destroyParticipant($participant);
        return redirect()->route('participant.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}
