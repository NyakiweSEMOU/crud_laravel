<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class etudiantController extends Controller
{

  public  function index() {
    return view('etudiants');
}

}