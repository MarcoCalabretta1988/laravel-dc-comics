<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/characters', function () {

    return view('characters');
})->name('characters');

Route::get('/movies', function () {

    return view('movies');
})->name('movies');

Route::get('/tv', function () {

    return view('tv');
})->name('tv');

Route::get('/games', function () {

    return view('games');
})->name('games');

Route::get('/collectibles', function () {

    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {

    return view('videos');
})->name('videos');

Route::get('/fans', function () {

    return view('fans');
})->name('fans');

Route::get('/news', function () {

    return view('news');
})->name('news');

Route::get('/shop', function () {

    return view('shop');
})->name('shop');
