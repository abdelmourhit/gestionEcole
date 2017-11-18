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

Route::get('/profil', function(){
    return view('AjouterProfils');
});

Route::resource('selectionParent','SelectParentController');

Route::resource('profs','ProfController');
Route::resource('sgs','SgController');
Route::resource('secretaires','SecretaireController');
Route::resource('eleves','EleveController');
Route::resource('pparents','ParentController');


//yasser
Route::resource('classes','ClasseController'); // index, create edit, update fait
Route::resource('matieres','MatiereController');// index,create edit, update, destroy fait
Route::resource('salles','SalleController');// index ,create , edit, update fait 
Route::resource('controles','ControleController');// index, create, edit, update fait 
Route::resource('examens','ExamenController');//index,create, edit, update fait

Route::resource('chauffeurs','ChauffeurController');// index,create edit,update fait
Route::resource('vehicules','VehiculeController');// index,create edit,update fait

Route::resource('activites','ActiviteController'); // index,create edit,update fait
Route::resource('livres','LivreController');// index,create fait
