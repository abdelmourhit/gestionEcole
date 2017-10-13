<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SgController extends Controller
{
    //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterProfil');
    }

    //enregistrer
    public function store(){
    
    }

    //récupérer les info dans le formulaire
    public function edit(){

    }

    //modifer
    public function update(){

    }

    //supprimer
    public function destroy(){

    }
}
