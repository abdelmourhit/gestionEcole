<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salle;

class SalleController extends Controller
{
     //lister
    public function index(){
        $ListeSalle= Salle::all();
        return view('AjouterSalle', ['salles' => $ListeSalle]);
    }

    //affiche le formulaire
    public function create(){
        return view('AjouterSalle');
    }

    //enregistrer
    public function store(Request $request){

        $salle = new Salle();
        $salle->libelle = $request->input('libelle');
        $salle->type = $request->input('type');
        $salle->nbr_eleve = $request->input('nbreleve');

        $salle->save();
        return redirect('salles');
        
    }

    //récupérer les info dans le formulaire
    public function edit($id){

        $salle = Salle::find($id);

        return view('editSalle', ['salle' => $salle]);
    }

    //modifer
    public function update(Request $request, $id){
        $salle = Salle::find($id);

        $salle->libelle= $request->input('libelle');
        $salle->type = $request->input('type');
        $salle->nbr_eleve = $request->input('nbr_eleve');
       

        $salle->save();

        return redirect('salles');
    }

    //supprimer
    public function destroy(){

    }
}
