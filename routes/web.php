<?php

use Illuminate\Support\Facades\Route;



Route::view('/','restaurant');


Auth::routes();

// Menu
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');

//Gallery
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery.index');

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

//Reservation
Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');

// Confirmation
Route::get('/thank you', [App\Http\Controllers\ConfirmationController::class, 'index'])->name('confirmation.index');
