<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;

class ClasseController extends Controller
{
     //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterClasse');
    }

    //enregistrer
    public function store(Request $request){

        $classe = new Classe();
        $classe->niveau = $request->input('niveau');
        $classe->description = $request->input('description');
       

        $classe->save();
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
