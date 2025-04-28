<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\SurveyController;
use App\Models\Rekomendasi;
use App\Models\Bidang;
use App\Http\Controllers\SurveyWelcomeController;


Route::get('/', function () {
    $rekomendasi = Rekomendasi::all(); // Ambil data dari database
    $bidang = Bidang::all(); // Ambil data bidang

    return view('home', compact('rekomendasi', 'bidang')); // Gabungkan dalam satu compact
})->name('home');

// Route ke Halaman Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route ke Halaman Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/bukutamu', action: [BukuTamuController::class, 'store'])->name('bukutamu.store');

// Halaman awal: FORM data pengunjung
Route::get('/surveywelcome', [SurveyWelcomeController::class, 'welcome'])->name('survey.welcome');

Route::post('/survey/start', [SurveyWelcomeController::class, 'start'])->name('survey.start');

Route::get('/survey', [SurveyController::class, 'showQuestion'])->name('survey.question');
Route::post('/survey', [SurveyController::class, 'storeAnswer'])->name('survey.answer');

Route::get('/survey/thankyou', function () {
    return view('surveyclosing');
})->name('survey.thankyou');

