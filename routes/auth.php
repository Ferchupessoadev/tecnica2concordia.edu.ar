<?php

use App\Livewire\Actions\Logout;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)
        ->name('login');

    Route::get('/reset-password', ForgotPassword::class)
        ->name('reset.password');

    Route::get('/reset-password/{token}', ForgotPassword::class)
        ->name('reset.password.token');
});

Route::post('logout', Logout::class)
    ->name('logout');
