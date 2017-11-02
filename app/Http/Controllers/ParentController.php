<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pparent;
use Illuminate\Http\UploadedFile;
class ParentController extends Controller
{
    //lister
    public function index(){

        $listePparent = Pparent::all();
        return view('ListeParent', ['pparents' => $listePparent]);

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
        
        return redirect('pparents');

    }

    //récupérer les info dans le formulaire
    public function edit($id){

        $pparnent = Pparent::find($id);

        return view('editParent', ['pparent' => $pparnent]);

    }

    //modifer
    public function update(Request $request, $id){

        $pparent = Pparent::find($id);

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

        return redirect('pparents');

    }

    //supprimer
    public function destroy(){

    }
}
