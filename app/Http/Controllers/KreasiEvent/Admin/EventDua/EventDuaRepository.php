<?php

namespace App\Http\Controllers\KreasiEvent\Admin\EventDua;

use Illuminate\Http\Request;
use App\Event_dua;
use Illuminate\Support\Facades\Validator;

class EventDuaRepository
{   
    //Create
    public function storeEventDua(Request $request)
    {

        Validator::make($request->all(),
        [  
            'event_names' => 'required',
            'event_categorys' => 'required',
            'event_locations' => 'required',
            'event_dates' => 'required',
            'event_descriptions' => 'required',
        ])->validate();

        Event_dua::create([
            'event_names' => $request->event_names,
            'event_categorys' => $request->event_categorys,
            'event_locations' => $request->event_locations,
            'event_dates' => $request->event_dates,
            'event_descriptions' => $request->event_descriptions,
        ]);
    }

    // Update
    public function updateEventDua(Request $request, Event_dua $event_dua)
    {
        Validator::make($request->all(),
        [
            'event_names' => 'required',
            'event_categorys' => 'required',
            'event_locations' => 'required',
            'event_dates' => 'required',
            'event_descriptions' => 'required',
        ])->validate();

        $event_dua->update([
            'event_names' => $request->event_names,
            'event_categorys' => $request->event_categorys,
            'event_locations' => $request->event_locations,
            'event_dates' => $request->event_dates,
            'event_descriptions' => $request->event_descriptions,
        ]);
    }

    // Delete
    public function destroyEventDua(Event_dua $event_dua)
    {
        $event_dua->delete();
    }
}
