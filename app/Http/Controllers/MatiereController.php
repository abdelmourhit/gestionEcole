<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Matiere;
use App\Classe;

class MatiereController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
     //lister
    public function index(){
            $listeMatiere= Matiere::all();
            $listeClasse = DB::table('classes')->select('libelle')->distinct()->get();
        return view('AjouterMatiere', ['matieres' => $listeMatiere, 'classes'=> $listeClasse]);
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

        session()->flash('success', 'Matiére à été bien enregistré !!');
        
        return redirect('matieres');
    }

    //récupérer les info dans le formulaire
    public function edit($id){
         $matiere = Matiere::find($id);
         $classe = DB::table('classes')->select('libelle')->distinct()->get();

        return view('editMatiere', ['matiere' => $matiere, 'classes' => $classe]);
    }

    //modifer
   public function update(Request $request, $id){
        $matiere = Matiere::find($id);

        $matiere->nom= $request->input('nom');
        $matiere->nom_arab = $request->input('nom_arab');
        $matiere->classe = $request->input('classe');
       

        $matiere->save();

        return redirect('matieres');
    }


    //supprimer
    public function destroy(Request $request, $id){
        $matiere = Matiere::find($id);
        //$matiere = Matiere::where('id', $id)->first();
        $matiere->delete();
        return redirect('matieres');

    }
}
