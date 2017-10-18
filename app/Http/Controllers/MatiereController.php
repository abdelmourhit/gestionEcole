<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;

class MatiereController extends Controller
{
     //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterMatiere');
    }

    //enregistrer
    public function store(Request $request){

        $matiere = new Matiere();
        $matiere->libelle = $request->input('libelle');
        $matiere->langue = $request->input('langue');
       

        $matiere->save();
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
