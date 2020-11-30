<?php

namespace App\Http\Controllers\KreasiEvent\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\EventRepository;
use App\Event;

class EventController extends Controller
{
    protected $event;

    public function __construct()
    {
        $this->event = new EventRepository();
    }
    public function index(){
        $data_event = Event::all();
        return view('KreasiEvent.content.Admin.BladeEvent.index',compact('data_event'));
    }

    public function create()
    {
        return view('KreasiEvent.content.Admin.BladeEvent.create');
    }

    public function store(Request $request)
    {
        $this->event->storeEvent($request);
        return redirect()->route('event.index')->with(['sukses' => 'Data Berhasil Di Input']);
    }

    public function edit(Event $event)
    {
        $event->find($event->id)->all();
        return view('KreasiEvent.content.Admin.BladeEvent.edit',compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $this->event->updateEvent($request,$event);
        return redirect()->route('event.index')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy(Event $event)
    {
        $this->repo->destroyEvent($event);
        return redirect()->route('event.index')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}
