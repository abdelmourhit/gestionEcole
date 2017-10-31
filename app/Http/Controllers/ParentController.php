<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pparent;
use Illuminate\Http\UploadedFile;
class ParentController extends Controller
{
    //lister
    public function index(){

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterEleve');
    }

    //enregistrer
    public function store(Request $request){

        $pparent = new Pparent();
        $pparent->nom = $request->input('nom');
        $pparent->prenom = $request->input('prenom');
        $pparent->sexe = $request->input('sexe');
        $pparent->date_naissance = $request->input('date_naissance');
        $pparent->adresse = $request->input('adresse');
        $pparent->email = $request->input('email');
        $pparent->tel = $request->input('tel');
        $pparent->fixe = $request->input('fixe');

        if($request->hasFile('photo')){
            $pparent->photo = $request->photo->store('image');
        }
        
        $pparent->ville = $request->input('ville');
        $pparent->type = 'parent';
        $pparent->nationalite = $request->input('nationalite');
        $pparent->cin = $request->input('cin');
        $pparent->profession = $request->input('profession');
        $pparent->type_relation_parental = $request->input('type_relation_parental');

        $pparent->save();

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
