<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Chauffeur;
use App\Vehicule;

class ChauffeurController extends Controller
{
    //lister
    public function index(){
         $listeChauffeur= Chauffeur::all();
         $vehicule = DB::table('vehicules')->select('marque')->distinct()->get();
        return view('AjouterChauffeur', ['chauffeurs' => $listeChauffeur, 'vehicules' =>$vehicule]);

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
        return redirect('chauffeurs');
    }

    //récupérer les info dans le formulaire
    public function edit($id){
        $chauffeur = Chauffeur::find($id);
        $vehicule = DB::table('vehicules')->select('marque')->get();

        return view('editChauffeur', ['chauffeur' => $chauffeur, 'vehicules' => $vehicule]);

    }

    //modifer
    public function update(Request $request, $id){
        $chauffeur = Chauffeur::find($id);

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
        return redirect('chauffeurs');

    }

    //supprimer
    public function destroy(Request $request, $id){
        $chauffeur = Chauffeur::find($id);
        $chauffeur->delete();
        return redirect('chauffeurs');

    }
}
