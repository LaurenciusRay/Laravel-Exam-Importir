<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Participant;
use Validator;

class AppController extends Controller
{
	public function user_index(Request $request){
		$data = Event::all();
	    return view('welcome',compact('data'));
	}

	public function index(Request $request){ 
		$data = Event::all();
		return view('admin-page',compact('data'));
	}

	public function participant_add(Request $request){
		$validate = Validator::make($request->all(),[
			'full_name' => 'required',
			'email' => 'required|unique:participant_users',
			'phone_number' => 'required|unique:participant_users',
			'age' => 'required',
			'event' => 'required',
		]);

		if($validate->fails()){
			$errorString = implode("\n",$validate->messages()->all());
            return response()->json(['fail' => true, 'errors' => $errorString]);
		}else if($validate->passes()){
			Participant::create([
				'full_name' => $request->full_name,
				'phone_number' => $request->phone_number,
				'id_event' => $request->event,
				'age' => $request->age,
				'email' => $request->email,
				'profesion' => $request->proffesion,
			]);

			return response()->json(['success' => true]);
		}
	}

	public function detail($id){
		$data = Event::where('events.id',$id)->join('participant_users','events.id','=','participant_users.id_event')->select('participant_users.*','events.*')->get();
		return view("detail",compact('data'));
	}
}
