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
    return view('welcome');
});



Route::get('/stringa', function () { 
    return 'Esempio stringa';
});


Route::get('/23', function () { 
    return 23;
});

Route::get('/array', function () { 
    $array = ['ciao'];
    return $array;
}); 


Route::get('/chi-siamo', function (){
    return view('chi-siamo');
});

//stiamo richiamando la view creata poc'anzi

Route::get('/contatti', function (){
    return view('contatti');
});

Route::get('/storia', function (){
    return view('storia');
});