<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salle;

class SalleController extends Controller
{
     //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterSalle');
    }

    //enregistrer
    public function store(Request $request){

        $salle = new Salle();
        $salle->libelle = $request->input('libelle');
        $salle->surface = $request->input('surface');
        $salle->nbr_eleve = $request->input('nbreleve');

        $salle->save();
        
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
