<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicule;

class VehiculeController extends Controller
{
      //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterVehicule');
    }

    //enregistrer
    public function store(Request $request){

        $vehicule = new Vehicule();
        $vehicule->matricule = $request->input('matricule');
        $vehicule->type = $request->input('type');
        $vehicule->marque = $request->input('marque');
        $vehicule->nbr_place = $request->input('nbr_place');
        $vehicule->carburant = $request->input('carburant');
        $vehicule->prix = $request->input('prix');
        $vehicule->chauffeur = $request->input('chauffeur');
       

        $vehicule->save();
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
