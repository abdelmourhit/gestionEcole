<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controle;

class ControleController extends Controller
{
   //lister
    public function index(){
         $listeControle = Controle::all();
        return view('Controle', ['controles' => $listeControle]);
    }

    //affiche le formulaire
    public function create(){
        return view('Controle');
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
        return redirect('controles');
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
