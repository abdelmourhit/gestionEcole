<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Examen;
use App\Matiere;
use App\Prof;
use App\Classe;

class ExamenController extends Controller
{
     //lister
    public function index(){
        $listeExamen = Examen::all();

         $matiere = DB::table('matieres')->select('nom')->distinct()->get();
         $prof = DB::table('profs')->select('nom','prenom')->distinct()->get();
         $classe = DB::table('classes')->select('libelle')->distinct()->get();
        return view('Examen', ['examens' => $listeExamen, 'matieres' => $matiere, 'profs' => $prof, 'classes' => $classe]);
        //return view('Examen', ['examens' => $listeExamen]);
    }

    //affiche le formulaire
    public function create(){
        return view('Examen');
    }

    //enregistrer
    public function store(Request $request){

        $examen = new Examen();
        $examen->libelle = $request->input('libelle');
        $examen->date = $request->input('date');
        $examen->duree = $request->input('duree');
        $examen->periode = $request->input('periode');
        $examen->matiere = $request->input('matiere');
        $examen->prof = $request->input('prof');
        $examen->classe = $request->input('classe');
       

        $examen->save();
        return redirect('examens');
    }

    //récupérer les info dans le formulaire
    public function edit($id){
    $examen = Examen::find($id);

        $matiere = DB::table('matieres')->select('nom')->get();
        $prof = DB::table('profs')->select('nom','prenom')->get();
        $classe = DB::table('classes')->select('libelle')->get();

         return view('editExamen',['examen' => $examen, 'matieres' => $matiere, 'profs' => $prof, 'classes' => $classe]);

    }

    //modifer
    public function update(Request $request,$id){
         $examen = Examen::find($id);


        $examen->libelle=$request->input('libelle');
        $examen->date=$request->input('date');
        $examen->duree=$request->input('duree');
        $examen->periode=$request->input('periode');
        $examen->matiere=$request->input('matiere');
        $examen->prof=$request->input('prof');
        $examen->classe=$request->input('classe');

        $examen->save();

        return redirect('examens');
    }

    //supprimer
    public function destroy(){

    }
}
