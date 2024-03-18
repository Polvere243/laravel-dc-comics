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

// rotta per modificare il modulo

Route::get('/comics/{comic}/edit',[ComicController::class, 'edit'])->name('comics.edit'); 

// rotta per salvare

Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// rotta per rendirizzare la modifica

Route::put('/comics/{comic}',[ComicController::class, 'update'])->name('comics.update');

