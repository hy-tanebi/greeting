<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class greeting extends Controller
{

    public function greed($comment)
    {

        $array = ["おはよう", "こんにちは", "こんばんは", "おやすみなさい"];
        $random = array_rand($array);

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
                $greed =  $array[$random];
                break;
        };


        return view('greed.morning', ['comment' => $comment, 'greed' => $greed]);
    }


    // public function comment($comment)
    // {
    //     return view('freeword.index', ['comment' => $comment]);
    // }

    // public function random()
    // {
    //  $array = ["おはよう", "こんにちは", "こんばんは", "おやすみなさい"];
    //     $random = array_rand($array);

    //     return view('random.index', ['random' => $array[$random]]);
    // }
}
