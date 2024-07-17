<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {   
        $etudiants = Etudiant::all();
        return view('etudiants.liste', compact('etudiants'));
    }

    

    public function ajouter_etudiant()
    {
        return view('etudiants.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();
        return redirect()->route('etudiant')->with('status', 'sucèes');

    }

    public function modifier_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiants.modifier', compact('etudiants'));
        
    }
    public function modifie_un_etudiant(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();
        return redirect()->route('etudiant')->with('status', 'Modifier');
    }
    public function supprimer_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('etudiant')->with('status', 'Supprimer');
        
    }

}
