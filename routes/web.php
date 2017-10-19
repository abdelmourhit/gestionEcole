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

Auth::routes();

Route::get('/index', 'IndexController@index')->name('index');

Route::resource('profs','ProfController');
Route::resource('sgs','SgController');
Route::resource('secretaires','SecretaireController');
Route::resource('eleves','EleveController');
Route::resource('pparents','ParentController');

Route::resource('classes','ClasseController');
Route::resource('matieres','MatiereController');
Route::resource('salles','SalleController');
Route::resource('controles','ControleController');
Route::resource('examens','ExamenController');

Route::resource('chauffeurs','ChauffeurController');
Route::resource('vehicules','VehiculeController');
