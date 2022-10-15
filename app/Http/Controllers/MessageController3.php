<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController3 extends Controller
{
    public function random()
    {
        $array = ["おはよう", "こんにちは", "こんばんは", "おやすみなさい"];
        $random = array_rand($array);

        return view('random.index', ['random' => $array[$random]]);
    }
}
