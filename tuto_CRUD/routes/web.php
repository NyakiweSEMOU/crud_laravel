<?php

use App\Http\Controllers\etudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("accueil");


Route::get('/etudiant', [etudiantController::class,"index"])->name("etudiant");
Route::get('/etudiant/create', [etudiantController::class,"create"])->name("etudiant.create");

Route::get('/etudiant/{etudiant}', [etudiantController::class,"edit"])->name("etudiant.edit");

Route::post('/etudiant/create', [etudiantController::class,"insertion"])->name("etudiant.ajouter");
Route::delete('/etudiant/{etudiant}', [etudiantController::class,"delete"])->name("etudiant.supprimer");
Route::put('/etudiant/{etudiant}', [etudiantController::class,"update"])->name("etudiant.update");