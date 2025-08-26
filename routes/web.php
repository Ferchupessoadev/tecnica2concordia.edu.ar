<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/faq', 'faq')->name('faq');
Route::view('/noticias', 'news')->name('news');
Route::view('/formacion-profesional', 'formation')->name('formation');
Route::view('/eventos', 'events')->name('events');
Route::view('/contacto', 'contact')->name('contact');

Route::view('/computacion', 'computation')->name('computation');
Route::view('/admempresarial', 'bussiness')->name('bussiness');
Route::view('/gastronomia', 'gastronomy')->name('gastronomy');

require __DIR__ . '/auth.php';
