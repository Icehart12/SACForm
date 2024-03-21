<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('information');

    
});

Route::post('/register', [FormController::class, 'register'])->name('register'); 


