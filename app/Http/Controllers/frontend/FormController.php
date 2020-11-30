<?php

namespace App\Http\Controllers\frontend;

use App\Models\ParticipantUsers;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index () {
        return view('frontend.form');
    }
}
