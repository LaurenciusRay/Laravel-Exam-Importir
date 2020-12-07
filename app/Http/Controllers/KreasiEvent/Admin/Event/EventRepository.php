<?php

namespace App\Http\Controllers\KreasiEvent\Admin\Event;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Validator;

class EventRepository
{

    //Create
    public function storeEvent(Request $request)
    {
        Validator::make($request->all(),
        [  
            'event_name' => 'required',
            'event_category' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
            'event_description' => 'required',
        ])->validate();

        Event::create([
            'event_name' => $request->event_name,
            'event_category' => $request->event_category,
            'event_location' => $request->event_location,
            'event_date' => $request->event_date,
            'event_description' => $request->event_description,
        ]);
    }

    // Update
    public function updateEvent(Request $request, Event $event)
    {
        Validator::make($request->all(),
        [
            'event_name' => 'required',
            'event_category' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
            'event_description' => 'required',
        ])->validate();

        $event->update([
            'event_name' => $request->event_name,
            'event_category' => $request->event_category,
            'event_location' => $request->event_location,
            'event_date' => $request->event_date,
            'event_description' => $request->event_description,
        ]);
    }

    // Delete
    public function destroyEvent(Event $event)
    {
        $event->delete();
    }
}
