<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examen;

class ExamenController extends Controller
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

        $examen = new Examen();
        $examen->libelle = $request->input('libelle');
        $examen->date = $request->input('date');
        $examen->duree = $request->input('duree');
        $examen->periode = $request->input('periode');
        $examen->matiere = $request->input('matiere');
        $examen->prof = $request->input('prof');
        $examen->classe = $request->input('classe');
       

        $examen->save();
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
