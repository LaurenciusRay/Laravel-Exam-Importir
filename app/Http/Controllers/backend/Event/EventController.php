<?php

namespace App\Http\Controllers\backend\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    protected $Event;

    public function __construct()
    {
        $this->Event = new eventRepository();
    }

    public function index() 
    {
        $data = Event::all();
        return view('backend.Event.index-event', compact('data'));
    }

    public function create() 
    {
        return view('backend.Event.create-event' );
    }

    public function store(Request $request)
    {
        $this->Event->storeEvent($request);
        return redirect()->route('halaman-event')->with(['sukses' => 'Data Berhasil Di Input']);
    }

    public function edit ($id)
    {
        $event = Event::where('id', $id)->first();
        return view('backend.Event.edit-event', compact( 'event'));
    }

    public function update(Request $request, Event $event)
    {
        $this->Event->UpdateEvent($request, $event);
        return redirect()->route('halaman-event')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy($id)
    {
        $this->Event->destroyEvent($id);
        return redirect()->route('halaman-event')->with(['sukses' => 'Data Berhasil Di Hapus']);
    }
}
