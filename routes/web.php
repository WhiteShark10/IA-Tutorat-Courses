<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [AccueilController::class, 'index'])->name('index');
Route::prefix('/')->name("braine.")->group(function () {
    Route::get('/inscrivez-vous', [AccueilController::class, 'register'])->name('con_insc.register');
    Route::get('/connectez-vous', [AccueilController::class, 'login'])->name('con_insc.login');
    Route::get('/nous-contacter', [AccueilController::class, 'contact'])->name('contact.contact');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';