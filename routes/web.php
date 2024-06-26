<?php

use App\Http\Controllers\DataSuratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('Homepage.index');
});


//For Surat


Route::resource('/login', LoginController::class);
Route::resource('/register', RegisterController::class);
Route::resource('/profil', ProfilController::class)->middleware('auth');
Route::resource('/datasurat', DataSuratController::class)->middleware('auth');
Route::get('/datasurat/pilih/{id}', [DataSuratController::class, 'pilih'])->middleware('auth');


Route::get('/historysurat', [SuratController::class, 'HistorySuratUser']);

Route::delete('/surat/{id}', [SuratController::class, 'destroy'])->name('surat.destroy');

Route::get('/surat/{id}', [SuratController::class, 'detail'])->name('surat.detail');




Route::get('/view', function () {
    return view('user.viewsurat');
});

Route::get('generate-pdf', [SuratController::class, 'generatePDF']);
Route::get('/buatsurat', [SuratController::class, 'buatsurat']);
Route::get('/generate-PDF/{id}', [SuratController::class, 'generatePDF']);


Route::post('/inputform', [SuratController::class, 'inputanSurat']);
Route::post('/simpansurat', [SuratController::class, 'submitSurat']);
Route::post('/buatsurat/store', [SuratController::class, 'store']);
Route::get('user/viewsurat', [SuratController::class, 'show']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);


