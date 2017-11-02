<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prof;
use Illuminate\Http\UploadedFile;

class ProfController extends Controller
{
    //lister
    public function index(){

        $listeProf = Prof::all();
        return view('ListeProf', ['profs' => $listeProf]);

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterProfil');
    }

    //enregistrer
    public function store(Request $request){

        $prof = new Prof();
        $prof->nom = $request->input('nom');
        $prof->prenom = $request->input('prenom');
        $prof->sexe = $request->input('sexe');
        $prof->date_naissance = $request->input('date_naissance');
        $prof->adresse = $request->input('adresse');
        $prof->email = $request->input('email');
        $prof->tel = $request->input('tel');
        $prof->fixe = $request->input('fixe');
        
        if($request->hasFile('photo')){
        $prof->photo = $request->photo->store('image');
        }
        
        $prof->ville = $request->input('ville');
        $prof->type = 'prof';
        $prof->nationalite = $request->input('nationalite');
        $prof->cin = $request->input('cin');
        $prof->date_embauche = $request->input('date_embauche');
        $prof->nbr_annee_experience = $request->input('nbr_annee_experience');
        $prof->salaire = $request->input('salaire');

        $prof->save();

        return redirect('profs');
    }

    //récupérer les info dans le formulaire
    public function edit($id){

        $prof = Prof::find($id);

        return view('editProf', ['prof' => $prof]);

    }

    //modifer
    public function update(Request $request, $id){

        $prof = Prof::find($id);

        $prof->nom = $request->input('nom');
        $prof->prenom = $request->input('prenom');
        $prof->sexe = $request->input('sexe');
        $prof->date_naissance = $request->input('date_naissance');
        $prof->adresse = $request->input('adresse');
        $prof->email = $request->input('email');
        $prof->tel = $request->input('tel');
        $prof->fixe = $request->input('fixe');

        if($request->hasFile('photo')){
            $prof->photo = $request->photo->store('image');
        }

        $prof->ville = $request->input('ville');
        $prof->type = 'prof';
        $prof->nationalite = $request->input('nationalite');
        $prof->cin = $request->input('cin');
        $prof->date_embauche = $request->input('date_embauche');
        $prof->nbr_annee_experience = $request->input('nbr_annee_experience');
        $prof->salaire = $request->input('salaire');

        $prof->save();

        return redirect('profs');

    }

    //supprimer
    public function destroy(){

    }
}
