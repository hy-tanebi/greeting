<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/{comment}', [App\Http\Controllers\Greeting::class, 'greed']);



// Route::get('/comments/freeword/{comment}', [App\Http\Controllers\MessageController2::class, 'comment']);
// Route::get('/comments/random', [App\Http\Controllers\MessageController3::class, 'random']);
