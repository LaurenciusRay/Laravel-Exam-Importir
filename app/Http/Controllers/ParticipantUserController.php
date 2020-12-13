<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParticipantUser;
// use App\ParticipantEvent;
use App\Event;

class ParticipantUserController extends Controller
{
    public function create(){
        $event = Event::all();
        // dd($event);
        return view('welcome', compact('event'));
    }

    public function store(Request $request)
    {
        $participant = new ParticipantUser;
        $this->validate($request, [
            'full_name' => 'required',
            'age' => 'required',
            'email' => 'required|unique:participant_users,email',
            'phone_number' => 'required|numeric',
            'profesion' => 'nullable',
        ]);
        // $participant = ParticipantUser::create($validateData);
        $participant->full_name = $request->full_name;
        $participant->age = $request->age;
        $participant->email = $request->email;
        $participant->phone_number = $request->phone_number;
        $participant->profesion = $request->profesion;
        $participant->save();
        $participant->event()->attach($request->event);
        // $request->session()->flash('pesan',"Data {$validateData['nama']} berhasil disimpan");
        return redirect('/')->with('pesan', "Thank You. Your Data Have Been Submitted");
        
    }
}
