<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sg;
use Illuminate\Http\UploadedFile;
class SgController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //lister
    public function index(){

        $listeSg = Sg::all();
        return view('ListeSg', ['sgs' => $listeSg]);
    }

    //affiche le formulaire
    public function create(){
        return view('AjouterSg');
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

        session()->flash('success', 'Surveillant Général à été bien enregistré !!');
        
        return redirect('sgs');
    
    }

    //récupérer les info dans le formulaire
    public function edit($id){

        $sg = Sg::find($id);

        return view('editSg', ['sg' => $sg]);

    }

    //modifer
    public function update(Request $request, $id){
        
        $sg = Sg::find($id);

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

    //supprimer
    public function destroy(Request $request, $id){

        $sg = Sg::find($id);

        $sg->delete();

        return redirect('sgs');
    }
}
