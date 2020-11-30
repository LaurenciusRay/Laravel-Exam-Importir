<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\ParticipantUser;

class ParticipantRepository
{
        //Create
        public function storeParticipant(Request $request)
        {
            $validasi = $request->validate
            ([
                'full_name' => 'required',
                'age' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'profesion' => 'required',
            ]);
    
            $participant = ParticipantUser::create($validasi);
            $participant->save();
        }
    
        // Update
        public function updateParticipant(Request $request, ParticipantUser $participant)
        {
            $validasi = $request->validate
            ([
                'full_name' => 'required',
                'age' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'profesion' => 'required',
            ]);
            $participant->update($validasi); 
        }
    
        // Delete
        public function destroyParticipant(ParticipantUser $participant)
        {
            $participant->delete();
        }
}
