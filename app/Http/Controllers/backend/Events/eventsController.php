<?php

namespace App\Http\Controllers\backend\Events;

use App\Models\events1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventsController extends Controller
{
    protected $events;

    public function __construct()
    {
        $this->events = new eventsRepository();
    }

    public function index ()
    {
        $data = events1::all();
        return view ('backend.Events.index-events1', compact('data'));
    }
    
    public function create()
    {
        return view('backend.Events.create-events1');
    }

    public function store(Request $request)
    {
        $this->events->storeEvents($request);
        return redirect()->route('halaman-events1')->with(['sukses' => 'Data Berhasil Di Input']);
    }

    public function edit ($id)
    {
        $events = events1::where('id', $id)->first();
        return view ('backend.Events.edit-events', compact('events'));
    }

    public function update(Request $request, events1 $events1)
    {
        $this->events->UpdateEvents($request, $events1);
        return redirect()->route('halaman-events1')->with(['sukses' => 'Data Berhasil Di Edit']);
    }

    public function destroy($id)
    {
        $this->events->destroyEvent($id);
        return redirect()->route('halaman-events1')->with(['sukses' => 'Data Berhasil Di Delete']);
    }
}
