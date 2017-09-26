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

Route::get('/AjouterProfil', function(){
    return view('AjouterProfil');
});

Route::get('/ListeProfil', function(){
    return view('ListeProfil');
});

Route::get('/AjouterEleve', function(){
    return view('AjouterEleve');
});

Route::get('/ListeEleve', function(){
    return view('ListeEleve');
});

Route::get('/ListeParent', function(){
    return view('ListeParent');
});

Route::get('/AffectationClasse', function(){
    return view('AffectationClasse');
});

Route::get('/ListeMatiere', function(){
    return view('ListeMatiere');
});

Route::get('/ListeClasse', function(){
    return view('ListeClasse');
});

Route::get('/ListeSalle', function(){
    return view('ListeSalle');
});

Route::get('/ControleExamen', function(){
    return view('ControleExamen');
});

Route::get('/ListeClassEmploi', function(){
    return view('ListeClassEmploi');
});

Route::get('/ListeProfEmploi', function(){
    return view('ListeProfEmploi');
});

Route::get('/ListeVehicule', function(){
    return view('ListeVehicule');
});

Route::get('/ListeChauffeur', function(){
    return view('ListeChauffeur');
});

Route::get('/AffectationChauffeur', function(){
    return view('AffectationChauffeur');
});

Route::get('/AffectationEleve', function(){
    return view('AffectationEleve');
});

Route::get('/ListeActivite', function(){
    return view('ListeActivite');
});

Route::get('/ListeLivre', function(){
    return view('ListeLivre');
});

