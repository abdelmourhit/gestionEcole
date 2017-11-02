<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matiere;

class MatiereController extends Controller
{
     //lister
    public function index(){
            $listeMatiere= Matiere::all();
        return view('AjouterMatiere', ['matieres' => $listeMatiere]);
    }

    //affiche le formulaire
    public function create(){
        return view('AjouterMatiere');
    }

    //enregistrer
    public function store(Request $request){

        $matiere = new Matiere();
        $matiere->nom = $request->input('nom');
        $matiere->nom_arab = $request->input('nom_arab');
        $matiere->classe = $request->input('classe');
       

        $matiere->save();
        return redirect('matieres');
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
