<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controle;

class ControleController extends Controller
{
   //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('ControleExamen');
    }

    //enregistrer
    public function store(Request $request){

        $controle = new Controle();
        $controle->libelle = $request->input('libelle');
        $controle->date = $request->input('date');
        $controle->duree = $request->input('duree');
        $controle->periode = $request->input('periode');
        $controle->matiere = $request->input('matiere');
        $controle->prof = $request->input('prof');
        $controle->classe = $request->input('classe');
       

        $controle->save();
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
