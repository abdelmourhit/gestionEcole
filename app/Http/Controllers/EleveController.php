<?php

namespace App\Http\Controllers;

use App\Eleve;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class EleveController extends Controller
{
    //lister
    public function index(){

        $listeEleve = Eleve::all();
        return view('ListeEleve', ['eleves' => $listeEleve]);

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterEleve');
    }

    //enregistrer
    public function store(Request $request){

        $eleve = new Eleve();
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->sexe = $request->input('sexe');
        $eleve->date_naissance = $request->input('date_naissance');
        $eleve->adresse = $request->input('adresse');
        $eleve->email = $request->input('email');
        $eleve->tel = $request->input('tel');
        $eleve->fixe = $request->input('fixe');

        if($request->hasFile('photo')){
        $eleve->photo = $request->photo->store('image');
        }

        $eleve->ville = $request->input('ville');
        $eleve->type = 'eleve';
        $eleve->nationalite = $request->input('nationalite');
        $eleve->cne = $request->input('cne');
        $eleve->matricule = $request->input('matricule');

        $eleve->save();
        
        return redirect('eleves');
    }

    //récupérer les info dans le formulaire
    public function edit($id){

        $eleve = Eleve::find($id);

        return view('editEleve', ['eleve' => $eleve]);

    }

    //modifer
    public function update(Request $request, $id){

        $eleve = Eleve::find($id);

        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->sexe = $request->input('sexe');
        $eleve->date_naissance = $request->input('date_naissance');
        $eleve->adresse = $request->input('adresse');
        $eleve->email = $request->input('email');
        $eleve->tel = $request->input('tel');
        $eleve->fixe = $request->input('fixe');

        if($request->hasFile('photo')){
            $eleve->photo = $request->photo->store('image');
        }

        $eleve->ville = $request->input('ville');
        $eleve->type = 'eleve';
        $eleve->nationalite = $request->input('nationalite');
        $eleve->cne = $request->input('cne');
        $eleve->matricule = $request->input('matricule');

        $eleve->save();

        return redirect('eleves');

    }

    //supprimer
    public function destroy(Request $request, $id){

        $eleve = Eleve::find($id);

        $eleve->delete();

        return redirect('eleves');
    }
}
