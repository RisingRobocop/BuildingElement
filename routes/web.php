<?php

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

//Creazione utente CMS lasciare commentato se non si vuole rendere disponibile la form di registrazione utente
//Route::get('/register','AuthController@create');
//Route::post('/register','AuthController@store');

Route::get('/','AuthController@create');
