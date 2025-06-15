<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

// POST route to store main data
Route::post('/main-store', [MainController::class, 'store'])->name('main.store');

// Route to display the form for creating a new main entry