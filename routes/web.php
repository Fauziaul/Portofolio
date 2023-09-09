<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('layouts.front');
})->name('dashboard');


Route::get('/thankyou', function () {
    return view('layouts.thankyou');
})->name('thankyou');

Route::get('/back-button-action', 'BtnController@backButtonAction')->name('back.button.action');
