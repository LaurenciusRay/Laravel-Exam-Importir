<?php

namespace App\Http\Controllers\KreasiEvent\Admin\EventDua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KreasiEvent\Admin\EventDua\EventDuaRepository;
use App\Event_dua;

class EventDuaController extends Controller
{
    protected $event_dua;

    public function __construct()
    {
        $this->event = new EventDuaRepository();
    }
    public function index(){
        $data_events = Event_dua::all();
        return view('KreasiEvent.content.Admin.BladeEventDua.index',compact('data_events'));
    }

    public function create()
    {
        return view('KreasiEvent.content.Admin.BladeEventDua.create');
    }

    public function store(Request $request)
    {
        $this->event->storeEventDua($request);
        return redirect()->route('eventdua.index')->with(['sukses' => 'Data Berhasil Di Input']);
    }

    public function edit(Event_dua $event_dua)
    {
        $event_dua->find($event_dua->id)->all();
        return view('KreasiEvent.content.Admin.BladeEvent.edit',compact('event_dua'));
    }

    public function update(Request $request, Event_dua $event_dua)
    {
        $this->event_dua->updateEvent($request,$event_dua);
        return redirect()->route('eventdua.index')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy(Event_dua $event_dua)
    {
        $this->repo->destroyEvent($event_dua);
        return redirect()->route('eventdua.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}
