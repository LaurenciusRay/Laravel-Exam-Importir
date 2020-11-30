<?php

namespace App\Http\Controllers\backend\Events;

use App\Models\events1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class eventsRepository
{
     // CREATE
     public function storeEvents (Request $request)
     {
         Validator::make($request->all(),
         [   
             'event_names' => 'required|min:2',
             'event_categorys' => 'required|min:1',
             'event_locations' => 'required|min:2',
             'event_dates' => 'required|min:2',
             'event_descriptions' => 'required|min:2'
         ])->validate();
 
         events1::create([
             'event_names' => $request->event_names,
             'event_categorys' => $request->event_categorys,
             'event_locations' => $request->event_locations,
             'event_dates' => $request->event_dates,
             'event_descriptions' => $request->event_descriptions,
         ]);
    }
    // UPDATE 
    public function UpdateEvents (Request $request, events1 $events1)
    {
        Validator::make($request->all(),
        [
            'event_names' => 'required|min:2',
            'event_categorys' => 'required|min:2',
            'event_locations' => 'required|min:2',
            'event_dates' => 'required|min:2',
            'event_descriptions' => 'required|min:2'
        ])->validate();

        $events1 = events1::findOrFail($events1->id);

        $events1->update([
            'event_names' => $request->event_names,
            'event_categorys' => $request->event_categorys,
            'event_locations' => $request->event_locations,
            'event_dates' => $request->event_dates,
            'event_descriptions' => $request->event_descriptions,
        ]);
    }
    // DELETE
    public function destroyEvent($id)
    {
        $events1 = events1::find($id);
        $events1->delete();
    }
}