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
//Route::get('/register','AuthController@create');
//Route::post('/register','AuthController@store');

//URL::forceRootUrl('https://tokenNgrok');
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
Route::post('/setLocale','HomeController@setLocale');
Route::post('/mail','HomeController@mail');

//gestione pannello amministrazione
Route::get('/admin', function () {
    return redirect('/admin/nations');
});
Route::get('/admin/nations','NazioniController@index');
Route::get('/admin/nations/create','NazioniController@create');
Route::post('/admin/nations','NazioniController@store');
Route::post('/admin/nations/sort','NazioniController@sort');
Route::get('/admin/nations/{nation_id}','NazioniController@show');
Route::post('/admin/nations/{nation_id}','NazioniController@update');

Route::post('/admin/nations/{nation_id}/images','ImmaginiController@store');
Route::post('/admin/images/{id}/delete','ImmaginiController@destroy');
Route::post('/admin/images/sort','ImmaginiController@sort');
