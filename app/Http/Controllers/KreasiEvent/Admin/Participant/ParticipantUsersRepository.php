<?php

namespace App\Http\Controllers\KreasiEvent\Admin\Participant;

use Illuminate\Http\Request;
use App\ParticipantUsers;
use Illuminate\Support\Facades\Validator;

class ParticipantUsersRepository
{
        // CREATE
        public function storeParticipant (Request $request)
        {
            Validator::make($request->all(),
            [
                'full_name' => 'required',
                'age' => 'required',
                'email' => 'required|unique:participant_users,email',
                'phone_number' => 'required',
                'profesion' => 'required',
                'event_id' => '',
                'event_dua_id' => ''
            ])->validate();
    
            ParticipantUsers::create([
                'full_name' => $request->full_name,
                'age' => $request->age,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'profesion' => $request->profesion,
                'event_id' => $request->event_id,
                'event_dua_id' => $request->event_dua_id,
            ]);
        }
    
        // DELETE
        public function destroyParticipant(ParticipantUsers $participant)
        {
            $participant->delete();
        }
}
