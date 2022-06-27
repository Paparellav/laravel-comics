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

$data = config('data');
$comics = config('comics');
$data = array_merge($data, ['comics' => $comics]);
// dd($comics);

Route::get('/characters', function () use ($data) {
    return view('homepage', $data);
})->name('characters');

Route::get('/comics', function () use ($data) {
    return view('comics', $data);
})->name('comics');

Route::get('/movies', function () use ($data) {
    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () use ($data) {
    return view('tv', $data);
})->name('tv');

Route::get('/games', function () use ($data) {
    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () use ($data) {
    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () use ($data) {
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () use ($data) {
    return view('fans', $data);
})->name('fans');

Route::get('/news', function () use ($data) {
    return view('news', $data);
})->name('news');

Route::get('/shop', function () use ($data) {
    return view('shop', $data);
})->name('shop');

// Route::get('/comics/{id}', function ($id) use ($data) {
//     $data = collect('comics');
//     $current_comics = $data->where('id', $id)->first();

//     if (!$current_comics) {
//         return abort(404);
//     }

//     $data = array_merge($data, [
//         'comics' => $current_comics
//     ]);
//     return view('single-comics', $data);
// })->name('single-comics');

Route::get('/single-comics', function () use ($data) {
    return view('single-comics', $data);
})->name('single-comics');
