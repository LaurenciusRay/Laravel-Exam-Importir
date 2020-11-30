<?php

namespace App\Http\Controllers\backend\ParticipantUsers;

use App\Models\Event;
use App\Models\events1;
use App\Models\ParticipantUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParticipantUserRepository
{
    // CREATE
    public function storeParticipant (Request $request)
    {
        Validator::make($request->all(),
        [
            'full_name' => 'required|min:2',
            'age' => 'required|min:1',
            'email' => 'required|unique:participant_users,email',
            'phone_number' => 'required|min:2',
            'profesion' => '',
            'event_id' => '',
            'events_id' => ''
        ])->validate();

        ParticipantUsers::create([
            'full_name' => $request->full_name,
            'age' => $request->age,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'profesion' => $request->profesion,
            'event_id' => $request->event_id,
            'events_id' => $request->events_id,
        ]);
    }

    // DELETE
    public function destroyParticipant($id)
    {
        $participant = ParticipantUsers::find($id);
        $participant->delete();
    }
}
