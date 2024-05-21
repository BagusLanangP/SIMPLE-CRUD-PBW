<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;



Route::get('/', function () {
    return view('user.index');
});

Route::get('/view', function () {
    return view('user.viewsurat');
});
Route::get('/buatsurat', [SuratController::class, 'buatsurat']);

Route::post('/buatsurat/store', [SuratController::class, 'store']);



