<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes([
    'reset' => false,
    'verify' => false,
]);

//register
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/poetries', [App\Http\Controllers\PoetryController::class, 'index'])->name('poetries.index');

Route::get('/poems', [App\Http\Controllers\PoemController::class, 'index'])->name('poems.index');

Route::get('/pantuns', [App\Http\Controllers\PantunController::class, 'index'])->name('pantuns.index');

Route::get('/quotes', [App\Http\Controllers\QuoteController::class, 'index'])->name('quotes.index');

//middlewate untuk batasan akses
Route::middleware(['auth'])->group(function () {   
    Route::get('/poetries/create', [App\Http\Controllers\PoetryController::class, 'create'])->name('poetries.create');
    Route::post('/poetries', [App\Http\Controllers\PoetryController::class, 'store'])->name('poetries.store');

    Route::get('/poems/create', [App\Http\Controllers\PoemController::class, 'create'])->name('poems.create');
    Route::post('/poems', [App\Http\Controllers\PoemController::class, 'store'])->name('poems.store');

    Route::get('/pantuns/create', [App\Http\Controllers\PantunController::class, 'create'])->name('pantuns.create');
    Route::post('/pantuns', [App\Http\Controllers\PantunController::class, 'store'])->name('pantuns.store');

    Route::get('/quotes/create', [App\Http\Controllers\QuoteController::class, 'create'])->name('quotes.create');
    Route::post('/quotes', [App\Http\Controllers\QuoteController::class, 'store'])->name('quotes.store');
});

//setiap route parameter dibawah ini..
Route::get('/poetries/{id}', [App\Http\Controllers\PoetryController::class, 'show'])->name('poetries.show');

Route::get('/poems/{id}', [App\Http\Controllers\PoemController::class, 'show'])->name('poems.show');
Route::get('/pantuns/{id}', [App\Http\Controllers\PantunController::class, 'show'])->name('pantuns.show');
Route::get('/quotes/{id}', [App\Http\Controllers\QuoteController::class, 'show'])->name('quotes.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
