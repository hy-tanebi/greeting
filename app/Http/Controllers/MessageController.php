<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function morning()
    {
        return view('greed.morning');
    }

    public function evening()
    {
        return view('greed.evening');
    }

    public function afternoon()
    {
        return view('greed.afternoon');
    }

    public function night()
    {
        return view('greed.night');
    }
}
