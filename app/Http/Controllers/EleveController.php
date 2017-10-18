<?php

namespace App\Http\Controllers;

use App\Eleve;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

class EleveController extends Controller
{
    //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterEleve');
    }

    //enregistrer
    public function store(Request $request){

        $eleve = new Eleve();
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->sexe = $request->input('sexe');
        $eleve->date_naissance = $request->input('date_naissance');
        $eleve->adresse = $request->input('adresse');
        $eleve->email = $request->input('email');
        $eleve->tel = $request->input('tel');
        $eleve->fixe = $request->input('fixe');
        $eleve->photo = $request->input('photo');
        $eleve->ville = $request->input('ville');
        $eleve->type = 'eleve';
        $eleve->nationalite = $request->input('nationalite');
        $eleve->cne = $request->input('cne');
        $eleve->matricule = $request->input('matricule');

        $eleve->save();

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
