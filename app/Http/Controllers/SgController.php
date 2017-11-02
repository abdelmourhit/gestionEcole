<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sg;
use Illuminate\Http\UploadedFile;
class SgController extends Controller
{
    //lister
    public function index(){

        $listeSg = Sg::all();
        return view('ListeSg', ['sgs' => $listeSg]);
    }

    //affiche le formulaire
    public function create(){
        return view('AjouterProfil');
    }

    //enregistrer
    public function store(Request $request){

        $sg = new Sg();
        $sg->nom = $request->input('nom');
        $sg->prenom = $request->input('prenom');
        $sg->sexe = $request->input('sexe');
        $sg->date_naissance = $request->input('date_naissance');
        $sg->adresse = $request->input('adresse');
        $sg->email = $request->input('email');
        $sg->tel = $request->input('tel');
        $sg->fixe = $request->input('fixe');

        if($request->hasFile('photo')){
            $sg->photo = $request->photo->store('image');
        }
        
        $sg->ville = $request->input('ville');
        $sg->type = 'sg';
        $sg->nationalite = $request->input('nationalite');
        $sg->cin = $request->input('cin');
        $sg->date_embauche = $request->input('date_embauche');
        $sg->nbr_annee_experience = $request->input('nbr_annee_experience');
        $sg->salaire = $request->input('salaire');

        $sg->save();
        
        return redirect('sgs');
    
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
