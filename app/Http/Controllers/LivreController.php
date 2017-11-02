<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class LivreController extends Controller
{
     //lister
    public function index(){
         $listeLivre= Livre::all();
        return view('ListeLivre', ['livres' => $listeLivre]);
    }

    //affiche le formulaire
    public function create(){
        return view('ListeLivre');
    }

    //enregistrer
    public function store(Request $request){

        $livre = new livre();
        $livre->titre = $request->input('titre');
        $livre->auteur = $request->input('auteur');
        $livre->edition = $request->input('edition');
        $livre->date_edition = $request->input('date_edition');
        $livre->type = $request->input('type');
        $livre->quantite = $request->input('quantite');
        $livre->save();
        return redirect('livres');
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
