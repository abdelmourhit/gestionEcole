<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Controle;
use App\Matiere;
use App\Prof;
use App\Classe;

class ControleController extends Controller
{
   //lister
    public function index(){
         $listeControle = Controle::all();

         $matiere = DB::table('matieres')->select('nom')->distinct()->get();
         $prof = DB::table('profs')->select('nom','prenom')->distinct()->get();
         $classe = DB::table('classes')->select('libelle')->distinct()->get();
        return view('Controle', ['controles' => $listeControle, 'matieres' => $matiere, 'profs' => $prof, 'classes' => $classe]);
        //return view('Controle', ['controles'=>$listeControle]);
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
    public function edit($id){
        $controle = Controle::find($id);
        
        $matiere = DB::table('matieres')->select('nom')->get();
        $prof = DB::table('profs')->select('nom','prenom')->get();
        $classe = DB::table('classes')->select('libelle')->get();

        //$matiere = Matiere::find($id);
        //$prof = Prof::find($id);
        //$classe = Classe::find($id);


        return view('editControle',['controle' => $controle, 'matieres' => $matiere, 'profs' => $prof, 'classes' => $classe]);
       // return view('editControle',['controle'=>$controle]);
    }

    //modifer
    public function update(Request $request, $id){
         $controle = Controle::find($id);


        $controle->libelle=$request->input('libelle');
        $controle->date=$request->input('date');
        $controle->duree=$request->input('duree');
        $controle->periode=$request->input('periode');
        $controle->matiere=$request->input('matiere');
        $controle->prof=$request->input('prof');
        $controle->classe=$request->input('classe');

        $controle->save();

        return redirect('controles');
    }

    //supprimer
    public function destroy(){

    }
}
