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
    public function edit($id){
        $classe = Classe::find($id);
        return view('editClasse',['classe' => $classe]);

    }

    //modifer
    public function update(Request $request, $id){
        $classe = Classe::find($id);

        $classe->libelle=$request->input('libelle');
        $classe->description=$request->input('description');

        $classe->save();

        return redirect('classes');

    }

    //supprimer
    public function destroy(Request $request, $id){
        $classe = Classe::find($id);
        $classe->delete();
        return redirect('classes');

    }
}
