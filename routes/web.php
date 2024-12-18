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

Route::get('/information', [App\Http\Controllers\InfoController::class, 'index'])->name('information.index');

Route::get('/poetries', [App\Http\Controllers\PoetryController::class, 'index'])->name('poetries.index');
Route::get('poetries/search', [App\Http\Controllers\PoetryController::class, 'search'])->name('poetries.search');

Route::get('/poems', [App\Http\Controllers\PoemController::class, 'index'])->name('poems.index');
Route::get('poems/search', [App\Http\Controllers\PoemController::class, 'search'])->name('poems.search');

Route::get('/pantuns', [App\Http\Controllers\PantunController::class, 'index'])->name('pantuns.index');
Route::get('pantuns/search', [App\Http\Controllers\PantunController::class, 'search'])->name('pantuns.search');

Route::get('/quotes', [App\Http\Controllers\QuoteController::class, 'index'])->name('quotes.index');
Route::get('quotes/search', [App\Http\Controllers\QuoteController::class, 'search'])->name('quotes.search');

//middlewate untuk batasan akses
Route::middleware(['auth'])->group(function () {   
    Route::get('/poetries/create', [App\Http\Controllers\PoetryController::class, 'create'])->name('poetries.create');
    Route::post('/poetries', [App\Http\Controllers\PoetryController::class, 'store'])->name('poetries.store');
    Route::get('/poetries/edit/{id}', [App\Http\Controllers\PoetryController::class, 'edit'])->name('poetries.edit');
    Route::put('/poetries/{id}', [App\Http\Controllers\PoetryController::class, 'update'])->name('poetries.update');
    Route::delete('/poetries/{id}', [App\Http\Controllers\PoetryController::class, 'destroy'])->name('poetries.destroy');

    Route::get('/poems/create', [App\Http\Controllers\PoemController::class, 'create'])->name('poems.create');
    Route::post('/poems', [App\Http\Controllers\PoemController::class, 'store'])->name('poems.store');
    Route::get('/poems/edit/{id}', [App\Http\Controllers\PoemController::class, 'edit'])->name('poems.edit');
    Route::put('/poems/{id}', [App\Http\Controllers\PoemController::class, 'update'])->name('poems.update');
    Route::delete('/poems/{id}', [App\Http\Controllers\PoemController::class, 'destroy'])->name('poems.destroy');

    Route::get('/pantuns/create', [App\Http\Controllers\PantunController::class, 'create'])->name('pantuns.create');
    Route::post('/pantuns', [App\Http\Controllers\PantunController::class, 'store'])->name('pantuns.store');
    Route::get('/pantuns/edit/{id}', [App\Http\Controllers\PantunController::class, 'edit'])->name('pantuns.edit');
    Route::put('/pantuns/{id}', [App\Http\Controllers\PantunController::class, 'update'])->name('pantuns.update');
    Route::delete('/pantuns/{id}', [App\Http\Controllers\PantunController::class, 'destroy'])->name('pantuns.destroy');

    Route::get('/quotes/create', [App\Http\Controllers\QuoteController::class, 'create'])->name('quotes.create');
    Route::post('/quotes', [App\Http\Controllers\QuoteController::class, 'store'])->name('quotes.store');
    Route::get('/quotes/edit/{id}', [App\Http\Controllers\QuoteController::class, 'edit'])->name('quotes.edit');
    Route::put('/quotes/{id}', [App\Http\Controllers\QuoteController::class, 'update'])->name('quotes.update');
    Route::delete('/quotes/{id}', [App\Http\Controllers\QuoteController::class, 'destroy'])->name('quotes.destroy');

    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

    Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{id}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');
});

//setiap route parameter dibawah ini..
Route::get('/poetries/{id}', [App\Http\Controllers\PoetryController::class, 'show'])->name('poetries.show');

Route::get('/poems/{id}', [App\Http\Controllers\PoemController::class, 'show'])->name('poems.show');
Route::get('/pantuns/{id}', [App\Http\Controllers\PantunController::class, 'show'])->name('pantuns.show');
Route::get('/quotes/{id}', [App\Http\Controllers\QuoteController::class, 'show'])->name('quotes.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
