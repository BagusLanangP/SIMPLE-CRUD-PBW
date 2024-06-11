<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;



Route::get('/', function () {
    return view('Homepage.index');
});

Route::get('/historysurat', [SuratController::class, 'HistorySuratUser']);

Route::delete('/surat/{id}', [SuratController::class, 'destroy'])->name('surat.destroy');



Route::get('/view', function () {
    return view('user.viewsurat');
});
Route::get('/buatsurat', [SuratController::class, 'buatsurat']);

Route::post('/buatsurat/store', [SuratController::class, 'store']);
Route::get('user/viewsurat', [SuratController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


