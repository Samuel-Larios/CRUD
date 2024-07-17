<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

// La route de la page d'accueil 
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('etudiant');
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::get('/modifier/{id}', [EtudiantController::class, 'modifier_etudiant'])->name('modifier');
Route::post('/modifier/traitement', [EtudiantController::class, 'modifie_un_etudiant']);
Route::get('/supprimer/{id}', [EtudiantController::class, 'supprimer_etudiant'])->name('suprimer');