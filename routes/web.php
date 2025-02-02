<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProductComponente;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', ProductComponente::class)->name('dashboard');
});
