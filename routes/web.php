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

// Route::get('/', function () {
//     $data = config('comics');
//     return view('homepage', ["comics" => $data]);
// });

// Route::get('/card/{index}', function ($index) {
//     $cards = config('comics');
//     return view('cardFocus', ["card" => $cards[$index]]);
// });

Route::resource('comics', 'ComicsController');