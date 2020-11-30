<?php

namespace App\Http\Controllers\backend\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class eventRepository
{
    // CREATE
    public function storeEvent (Request $request)
    {
        Validator::make($request->all(),
        [   
            'event_name' => 'required|min:2',
            'event_category' => 'required|min:1',
            'event_location' => 'required|min:2',
            'event_date' => 'required|min:2',
            'event_description' => 'required|min:2'
        ])->validate();

        Event::create([
            'event_name' => $request->event_name,
            'event_category' => $request->event_category,
            'event_location' => $request->event_location,
            'event_date' => $request->event_date,
            'event_description' => $request->event_description,
        ]);
    }
    // UPDATE
    public function UpdateEvent (Request $request, Event $event)
    {
        Validator::make($request->all(),
        [
            'event_name' => 'required|min:2',
            'event_category' => 'required|min:2',
            'event_location' => 'required|min:2',
            'event_date' => 'required|min:2',
            'event_description' => 'required|min:2'
        ])->validate();

        $event = Event::findOrFail($event->id);

        $event->update([
            'event_name' => $request->event_name,
            'event_category' => $request->event_category,
            'event_location' => $request->event_location,
            'event_date' => $request->event_date,
            'event_description' => $request->event_description,
        ]);
    }
    // DELETE
    public function destroyEvent($id)
    {
        $event = Event::find($id);
        $event->delete();
    }
}
