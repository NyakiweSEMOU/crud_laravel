<?php

namespace App\Http\Controllers;

use App\Models\classe;
use App\Models\etudiant;
use Illuminate\Http\Request;

class etudiantController extends Controller
{

  public  function index() {
    $liste_etudiants= etudiant::orderBy("nom", "asc")->paginate(6);
    // dd($liste_etudiants[0]->classe);                                                                 
    return view('etudiants', compact('liste_etudiants'));
}

 public  function create() {
 
    $classes= classe::all();
    return view('createEtudiant', compact('classes'));
}

public  function edit(etudiant $etudiant) {
 
    $classes= classe::all();
    return view('editeEtudiant', compact('etudiant', 'classes')); 
}


public  function insertion(request $request) {
 
    $request->validate([
    
      "nom"=>"required",
      "prenom"=>"required",
      "classe_id"=>"required"
      
    ]);
    
    etudiant::create($request-> all());
    
    return back()->with("success", "enregistrement reussi");
    // return redirect()->route('etudiant');
}

public  function update(request $request, etudiant $etudiant) {
 
    $request->validate([
    
      "nom"=>"required",
      "prenom"=>"required",
      "classe_id"=>"required"
      
    ]);
    
    $etudiant->update($request-> all());
    
    return back()->with("success", "mis a jour reussi");
    // return redirect()->route('etudiant');
}

public function delete(etudiant $etudiant){
  $etudiant->delete();
  
    // return redirect()->route('etudiant');
    return back()->with("successDelete", "Supprimeé");

  
}
}