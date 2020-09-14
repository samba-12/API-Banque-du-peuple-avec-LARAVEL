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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/auth/login', 'LoginController@index')->name('home');

/* Route::get('/entreprise/add', 'EntrepriseController@add')->name('addentreprise');
Route::get('/entreprise/edit/{id}', 'EntrepriseController@edit')->name('editentreprise');
Route::post('/entreprise/update', 'EntrepriseController@update')->name('updateentreprise');
Route::get('/entreprise/delete/{id}', 'EntrepriseController@delete')->name('deleteentreprise');
Route::get('/entreprise/getAll', 'EntrepriseController@getAll')->name('getAllentreprise');
Route::post('/entreprise/persist', 'EntrepriseController@persist')->name('persistentreprise');


Route::get('/personne/add', 'PersonneController@add')->name('addpersonne');
Route::get('/personne/edit/{id}', 'PersonneController@edit')->name('editpersonne');
Route::post('/personne/update', 'PersonneController@update')->name('updatepersonne');
Route::get('/personne/delete/{id}', 'PersonneController@delete')->name('deletepersonne');
Route::get('/personne/getAll', 'PersonneController@getAll')->name('getAllpersonne'); */

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
