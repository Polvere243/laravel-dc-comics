<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

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
// rotta per la pagina dei fumetti
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// rotta per la creazione
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// rotta per la pagina del singolo prodotto
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// rotta per salvare

Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// rotta per modificare il modulo

Route::get('/comics/edit',[ComicControlle::class, 'edit'])->name('comics.edit'); 

// rotta per la pagina dei personaggi
Route::get('/characters', function () {
    $title = 'characters';
    return view('characters', compact('title') );
})->name('characters');

// rotta per la pagina dei film
Route::get('/movies', function () {
    $title = 'film';
    return view('movies',compact('title'));
})->name('movies');

// rotta per la pagina dei prodotti per la tv
Route::get('/tv', function () {
    $title = 'tv';
    return view('tv', compact('title'));
})->name('tv');

// rotta per la pagina dei giochi
Route::get('/gamnews', function () {
    $title = 'games';
    return view('games', compact('title'));
})->name('games');

// rotta per la pagina dei prodotti per la tv
Route::get('/collectibles', function () {
    $title = 'collectibles';
    return view('collectibles', compact('title'));
})->name('collectibles');

// rotta per la pagina dei video
Route::get('/videos', function () {
    $title = 'videos';
    return view('videos', compact('title'));
})->name('videos');

// rotta per la pagina dei prodotti per la tv
Route::get('/fans', function () {
    $title = 'fans';
    return view('fans', compact('title'));
})->name('fans');

// rotta per la pagina dei prodotti per la tv
Route::get('/news', function () {
    $title = 'news';
    return view('news', compact('title'));
})->name('news');

// rotta per la pagina dei prodotti per la tv
Route::get('/shop', function () {
    $title = 'shop';
    return view('shop', compact('title'));
})->name('shop');



