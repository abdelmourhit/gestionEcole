<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vehicule;
use Add\Chauffeur;

class VehiculeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
      //lister
    public function index(){
          $ListeVehicule= Vehicule::all();
          $chauffeur = DB::table('chauffeurs')->select('nom','prenom')->distinct()->get();
        return view('AjouterVehicule', ['vehicules' => $ListeVehicule, 'chauffeurs' => $chauffeur]);
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

        session()->flash('success', 'Véhicule à été bien enregistré !!');
        
        return redirect('vehicules');
    }

    //récupérer les info dans le formulaire
    public function edit($id){
        $vehicule = Vehicule::find($id);
        $chauffeur = DB::table('chauffeurs')->select('nom','prenom')->distinct()->get();
        return view('editVehicule', ['vehicule' => $vehicule, 'chauffeurs' => $chauffeur]);

    }

    //modifer
    public function update(Request $request,$id){
        $vehicule = Vehicule::find($id);

        $vehicule->matricule = $request->input('matricule');
        $vehicule->type = $request->input('type');
        $vehicule->marque = $request->input('marque');
        $vehicule->nbr_place = $request->input('nbr_place');
        $vehicule->carburant = $request->input('carburant');
        $vehicule->prix = $request->input('prix');
        $vehicule->chauffeur = $request->input('chauffeur');
       

        $vehicule->save();
        return redirect('vehicules');

    }

    //supprimer
    public function destroy(Request $request,$id){
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return redirect('vehicules');

    }
}
