<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secretaire;
use Illuminate\Http\UploadedFile;

class SecretaireController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //lister
    public function index(){

        $listeSecretaire = Secretaire::all();
        return view('ListeSecretaire', ['secretaires' => $listeSecretaire]);

    }

    //affiche le formulaire
    public function create(){
        return view('AjouterSecretaire');
    }

    //enregistrer
    public function store(Request $request){

        $secretaire = new Secretaire();
        $secretaire->nom = $request->input('nom');
        $secretaire->prenom = $request->input('prenom');
        $secretaire->sexe = $request->input('sexe');
        $secretaire->date_naissance = $request->input('date_naissance');
        $secretaire->adresse = $request->input('adresse');
        $secretaire->email = $request->input('email');
        $secretaire->tel = $request->input('tel');
        $secretaire->fixe = $request->input('fixe');

        if($request->hasFile('photo')){
            $secretaire->photo = $request->photo->store('image');
        }
        
        $secretaire->ville = $request->input('ville');
        $secretaire->type = 'secretaire';
        $secretaire->nationalite = $request->input('nationalite');
        $secretaire->cin = $request->input('cin');
        $secretaire->date_embauche = $request->input('date_embauche');
        $secretaire->nbr_annee_experience = $request->input('nbr_annee_experience');
        $secretaire->salaire = $request->input('salaire');

        $secretaire->save();

        session()->flash('success', 'Secrétaire à été bien enregistré !!');
        
        return redirect('secretaires');
    }

    //récupérer les info dans le formulaire
    public function edit($id){

        $secretaire = Secretaire::find($id);

        return view('editSecretaire', ['secretaire' => $secretaire]);

    }

    //modifer
    public function update(Request $request, $id){

        $secretaire = Secretaire::find($id);

        $secretaire->nom = $request->input('nom');
        $secretaire->prenom = $request->input('prenom');
        $secretaire->sexe = $request->input('sexe');
        $secretaire->date_naissance = $request->input('date_naissance');
        $secretaire->adresse = $request->input('adresse');
        $secretaire->email = $request->input('email');
        $secretaire->tel = $request->input('tel');
        $secretaire->fixe = $request->input('fixe');

        if($request->hasFile('photo')){
            $secretaire->photo = $request->photo->store('image');
        }

        $secretaire->ville = $request->input('ville');
        $secretaire->type = 'secretaire';
        $secretaire->nationalite = $request->input('nationalite');
        $secretaire->cin = $request->input('cin');
        $secretaire->date_embauche = $request->input('date_embauche');
        $secretaire->nbr_annee_experience = $request->input('nbr_annee_experience');
        $secretaire->salaire = $request->input('salaire');

        $secretaire->save();

        return redirect('secretaires');

    }

    //supprimer
    public function destroy(Request $request, $id){

        $secretaire = Secretaire::find($id);

        $secretaire->delete();

        return redirect('secretaires');
    }
}
