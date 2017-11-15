<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activite;
class ActiviteController extends Controller
{
    //lister
    public function index(){
         $listeActivite= Activite::all();
        return view('AjouterActivite', ['activites' => $listeActivite]);
    }

    //affiche le formulaire
    public function create(){
        return view('AjouterActivite');
    }

    //enregistrer
    public function store(Request $request){

        $activite = new Activite();
        $activite->libelle = $request->input('libelle');
        $activite->description = $request->input('description');
        $activite->date_creation = $request->input('date_creation');
        $activite->date_depart = $request->input('date_depart');
        $activite->duree = $request->input('duree');
        $activite->nbr_place = $request->input('nbr_place');
        $activite->save();
        return redirect('activites');
    }

    //récupérer les info dans le formulaire
    public function edit($id){
        $activite = Activite::find($id);
        return view('editActivite',['activite' => $activite]);

    }

    //modifer
    public function update(Request $request,$id){
        $activite = Activite::find($id);

        $activite->libelle = $request->input('libelle');
        $activite->description = $request->input('description');
        $activite->date_creation = $request->input('date_creation');
        $activite->date_depart = $request->input('date_depart');
        $activite->duree = $request->input('duree');
        $activite->nbr_place = $request->input('nbr_place');
        $activite->save();
        return redirect('activites');


    }

    //supprimer
    public function destroy(){

    }
}
