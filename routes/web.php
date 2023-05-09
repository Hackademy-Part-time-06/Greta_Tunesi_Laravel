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

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination', function () {

    $destinazioni = ['Roma', 'Milano', 'Bari', 'Amsterdam', 'Napoli', 'Praga'];

    return view('destination', ['destinations' => $destinazioni]);

});

Route::get('/contact', function () {
    return view('contact');
});