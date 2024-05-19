<?php

use App\Livewire\AddBetPage;
use App\Livewire\BetDetail;
use App\Livewire\HomePage;
use App\Livewire\LoginPage;
use App\Livewire\RegisterPage;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class)->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', HomePage::class);
    Route::get('/adicionar-aposta', AddBetPage::class);
    Route::get('/aposta/{id}', BetDetail::class);
});
