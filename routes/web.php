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

    
    $comics = config('comics');
    
    $comicsCollection = collect($comics);

    $data = [
        'nav_items' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'news',
            'shop',
        ],
        'comics' => $comics
    ];
    
    return view('home', $data);
});

Route::get('/movies', function () {

    $movies = config('movies');
    
    $moviesCollection = collect($movies);


    $data = [
        'movies' => $movies
    ];
    
    return view('movies', $data);
})->name('movies');



