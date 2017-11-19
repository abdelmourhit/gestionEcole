<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class LivreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $livre->autheur = $request->input('autheur');
        $livre->description = $request->input('description');
        $livre->edition = $request->input('edition');
        $livre->date_edition = $request->input('date_edition');
        $livre->prix = $request->input('prix');
        $livre->quantite = $request->input('quantite');
        $livre->type = $request->input('type');
        $livre->save();

        session()->flash('success', 'Livre à été bien enregistré !!');
        
        return redirect('livres');
    }

    //récupérer les info dans le formulaire
    public function edit($id){
        $livre = Livre::find($id);
        return view('editLivre', ['livre' => $livre]);

    }

    //modifer
    public function update(Request $request, $id){
        $livre = Livre::find($id);

        $livre->titre = $request->input('titre');
        $livre->autheur = $request->input('autheur');
        $livre->description = $request->input('description');
        $livre->edition = $request->input('edition');
        $livre->date_edition = $request->input('date_edition');
        $livre->prix = $request->input('prix');
        $livre->quantite = $request->input('quantite');
        $livre->type = $request->input('type');
        $livre->save();
        return redirect('livres');


    }

    //supprimer
    public function destroy(Request $request, $id){
        $livre = Livre::find($id);
        $livre->delete();
        return redirect('livres');

    }
}
