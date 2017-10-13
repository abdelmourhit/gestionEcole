<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prof;

class ProfController extends Controller
{
    //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterProfil');
    }

    //enregistrer
    public function store(Request $request){

        $prof = new Prof();
        $prof->nom = $request->input('nom');
        $prof->prenom = $request->input('prenom');
        $prof->date_naissance = $request->input('date_naissance');
        $prof->sexe = $request->input('sexe');

        $prof->save();
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
