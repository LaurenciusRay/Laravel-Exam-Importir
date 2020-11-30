<?php

namespace App\Http\Controllers\KreasiEvent\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index(){
        return view('KreasiEvent.content.User.HomePage');
    }
}
