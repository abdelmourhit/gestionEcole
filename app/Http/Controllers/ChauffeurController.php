<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chauffeur;

class ChauffeurController extends Controller
{
    //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterChauffeur');
    }

    //enregistrer
    public function store(Request $request){

        $chauffeur = new Chauffeur();
        $chauffeur->nom = $request->input('nom');
        $chauffeur->prenom = $request->input('prenom');
        $chauffeur->sexe = $request->input('sexe');
        $chauffeur->date_naiss = $request->input('date_naiss');
        $chauffeur->lieu_naiss = $request->input('lieu_naiss');
        $chauffeur->tel = $request->input('tel');
        $chauffeur->nationnalite = $request->input('nationnalite');
        $chauffeur->adresse = $request->input('adresse');
        $chauffeur->ville = $request->input('ville');
        $chauffeur->cin = $request->input('cin');
        $chauffeur->date_recrutement = $request->input('date_recrutement');
       $chauffeur->type_permi = $request->input('type_permi');
       $chauffeur->vehicule = $request->input('vehicule');

        $chauffeur->save();
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
