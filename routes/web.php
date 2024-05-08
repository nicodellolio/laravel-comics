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

    $data = [

    ];
    
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {

    
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
    
    return view('nav.comics', $data);
})->name('nav.comics');

Route::get('/movies', function () {

    $movies = config('movies');
    
    $moviesCollection = collect($movies);


    $data = [
        'movies' => $movies
    ];
    
    return view('nav.movies', $data);
})->name('nav.movies');

Route::get('/characters', function () {

    $data = [
    ];
    
    return view('nav.characters',$data);
})->name('nav.characters');

Route::get('/news', function () {

    $data = [
    ];
    
    return view('nav.news',$data);
})->name('nav.news');

Route::get('/shop', function () {

    $data = [
    ];
    
    return view('nav.shop',$data);
})->name('nav.shop');

Route::get('/comic/{id}', function ($id) {

    $comics = config('comics');
    $comicsCollection = collect($comics);

    $comic = config('comics')[$id];

    $data = [
        'comic' => $comic
    ];

    return view('comic', $data);
})->name('comic');
