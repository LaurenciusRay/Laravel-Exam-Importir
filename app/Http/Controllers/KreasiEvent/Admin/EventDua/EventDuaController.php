<?php

namespace App\Http\Controllers\KreasiEvent\Admin\EventDua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KreasiEvent\Admin\EventDua\EventDuaRepository;
use App\Event_dua;

class EventDuaController extends Controller
{
    protected $eventdua;

    public function __construct()
    {
        $this->eventdua = new EventDuaRepository();
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
        $this->eventdua->storeEventDua($request);
        return redirect()->route('eventdua.index')->with(['sukses' => 'Data Berhasil Di Input']);
    }

    public function edit(Event_dua $eventdua)
    {
        $eventdua->find($eventdua->id)->all();
        return view('KreasiEvent.content.Admin.BladeEventDua.edit',compact('eventdua'));
    }

    public function update(Request $request, Event_dua $eventdua)
    {
        $this->eventdua->updateEventDua($request, $eventdua);
        return redirect()->route('eventdua.index')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy(Event_dua $eventdua)
    {
        $this->eventdua->destroyEventDua($eventdua);
        return redirect()->route('eventdua.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}
