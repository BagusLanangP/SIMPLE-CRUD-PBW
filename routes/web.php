<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;



Route::post('/', function () {
    return view('user.index');
});

Route::get('/buatsurat', [SuratController::class, 'buatsurat']);

Route::post('/buatsurat/store', [SuratController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


