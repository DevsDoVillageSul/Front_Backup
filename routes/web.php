<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/loginNovo', function () {
    return view('login');
});

Route::get('/error', function () {
    return view('error.erro');
});

Route::get('/contato', function () {
    return view('error.erro');
});

Route::get('/suporte', function () {
    return view('error.erro');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
