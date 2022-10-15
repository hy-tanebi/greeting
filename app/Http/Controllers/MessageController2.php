<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController2 extends Controller
{
    public function comment($comment)
    {
        return view('freeword.index', ['comment' => $comment]);
    }
}
