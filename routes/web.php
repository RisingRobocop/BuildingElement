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

//Creazione utente CMS lasciare commentato se non si vuole rendere disponibile la form di registrazione per nuovi utenti
Route::get('/register','AuthController@create');
Route::post('/register','AuthController@store');


//gestione login
Route::get('/login','AuthController@showlogin')->name('login');
Route::post('/login','AuthController@login');
Route::get('/logout','AuthController@logout');

//gestione home (parte visibile ai vistatori del sito)
Route::get('/','HomeController@home')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/services','HomeController@services')->name('services');
Route::get('/projects','HomeController@projects')->name('projects');
Route::get('/contact','HomeController@contact')->name('contact');

//gestione pannello amministrazione
Route::get('/admin','NazioniController@index');
