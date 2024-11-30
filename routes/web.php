<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;
Route::resource('perusahaan', PerusahaanController::class);



Route::get('/', function () {
    return view('welcome');
});
route::get('/halo', function () {    return view('halo');});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
