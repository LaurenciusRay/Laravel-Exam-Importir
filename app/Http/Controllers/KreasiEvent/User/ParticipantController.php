<?php

namespace App\Http\Controllers\KreasiEvent\User;

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
        return view('KreasiEvent.content.User.BladePendaftaran.index',compact('data_participant'));
    }

    public function create()
    {
        return view('KreasiEvent.content.User.BladePendaftaran.create');
    }

    public function store(Request $request)
    {
        $this->participant->storeParticipant($request);
        return redirect()->route('pendaftaran.index')->with(['sukses' => 'Berhasil Mendaftar, Terimakasih']);
    }

}
