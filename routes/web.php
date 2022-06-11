<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\LoginController::class, 'abrirView']);
Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index']); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
