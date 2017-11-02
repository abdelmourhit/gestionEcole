<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;

class ClasseController extends Controller
{
     //lister
    public function index(){
        $listeClasse = Classe::all();
        return view('AjouterClasse', ['classes' => $listeClasse]);
    }

    //affiche le formulaire
    public function create(){
        return view('AjouterClasse');
    }

    //enregistrer
    public function store(Request $request){

        $classe = new Classe();
        $classe->libelle = $request->input('libelle');
        $classe->description = $request->input('description');
       

        $classe->save();
        return redirect('classes');
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
