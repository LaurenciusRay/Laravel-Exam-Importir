<?php

namespace App\Http\Controllers\backend\ParticipantUsers;

use App\Models\Event;
use App\Models\events1;
use App\Models\ParticipantUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticipantUsersController extends Controller
{
    protected $participant;

    public function __construct()
    {
        $this->participant = new ParticipantUserRepository();
    }

    public function index() {
        $data = ParticipantUsers::all();
        return view('backend.ParticipantUsers.index-participant', compact('data'));
    }

   public function create()
   {
       $data_event = Event::all();
       $data_events = events1::all();
       $check = ParticipantUsers::where('event_id',1)->count();
       $check2 = ParticipantUsers::where('event_id',1)->count();
       return view ('frontend.pendaftaran', compact('data_event', 'data_events', 'check', 'check2'));
   }

   public function store(Request $request)
   {
       $this->participant->storeParticipant($request);
       return redirect()->route('form')->with(['sukses' => 'Terima Kasih Sudah Mendaftar']);
   }

   public function destroy($id)
   {
       $this->participant->destroyParticipant($id);
       return redirect()->route('halaman-participant')->with(['sukses' => 'Data Berhasil Di Delete']);
   }
}
