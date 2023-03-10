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
    return view('welcome');
});

Route::middleware(['admin'])->group(function () {

    Route::get('admin', function () {
        dd('Você é um admin');
    });
});

Route::middleware(['client'])->group(function () {

    Route::get('client', function () {
        dd('Você é um cliente');
    });
});


