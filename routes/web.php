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

/* 
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando css.
Bonus:
Create altre pagine che condividono lo stesso layout
*/

Route::get('/', function () {

    $comics = config('comics.dataComics'); // datacomics

   // dd($comics);
  
    return view('home', compact('comics'));
})->name('home');

Route::get('/movies', function () {
    return view('guests.movies'); // guest é una sottocartella per quello dobbiamo inserirla prima di contacts altrimente non si trovera il file 'welcome', se fosse sólo dentro la cartell 'views' allora non ci sarebbe bisogno del guest
})->name('movies');
