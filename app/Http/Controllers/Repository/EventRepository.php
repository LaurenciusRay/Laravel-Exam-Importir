<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\Event;

class EventRepository
{
    //Create
    public function storeEvent(Request $request)
    {
        $validasi = $request->validate
        ([
            'event_name' => 'required',
            'event_category' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
            'event_description' => 'required',
        ]);

        $event = Event::create($validasi);
        $event->save();
    }

    // Update
    public function updateEvent(Request $request, Event $event)
    {
        $validasi = $request->validate
        ([
            'event_name' => 'required',
            'event_category' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
            'event_description' => 'required',
        ]);
        $event->update($validasi); 
    }

    // Delete
    public function destroyEvent(Event $event)
    {
        $event->delete();
    }
}
