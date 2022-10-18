<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class greeting extends Controller
{

    public function greed($comment)
    {

        switch ($comment) {
            case 'morning':
                $comment = '朝のあいさつ';
                $greed = 'おはようございます';
                break;
            case 'afternoon':
                $comment = '昼のあいさつ';
                $greed = 'こんにちは';
                break;
            case 'evening':
                $comment = '午後のあいさつ';
                $greed = 'こんばんは';
                break;
            case 'night':
                $comment = '夜のあいさつ';
                $greed = 'おやすみなさい';
                break;
            case 'random':
                $comment = 'ランダムなメッセージ';
                $array = ["おはよう", "こんにちは", "こんばんは", "おやすみなさい"];
                $random = array_rand($array);
                $greed =  $array[$random];
                break;
        };


        return view('greed.morning', ['comment' => $comment, 'greed' => $greed]);
    }
}
