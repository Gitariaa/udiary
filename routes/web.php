<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/poetries', [App\Http\Controllers\PoetryController::class, 'index'])->name('poetries.index');

Route::get('/poems', [App\Http\Controllers\PoemController::class, 'index'])->name('poems.index');

Route::get('/pantuns', [App\Http\Controllers\PantunController::class, 'index'])->name('pantuns.index');

Route::get('/quotes', [App\Http\Controllers\QuoteController::class, 'index'])->name('quotes.index');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
