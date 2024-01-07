<?php

use App\Http\Controllers\ProductController;
/* use App\Http\Controllers\ProfileController; */
use Illuminate\Support\Facades\Route;
//TODO: Lo colocamos el Auth
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard'); */

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

/* require __DIR__.'/auth.php';
Auth::routes(); */

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//TODO: Lo colocamos en plural
Route::resource('/products', ProductController::class);
