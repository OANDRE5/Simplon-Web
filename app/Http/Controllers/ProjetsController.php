<?php

namespace App\Http\Controllers;

use App\Projet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    public function addProject() {
        return view('formulaireProjets');
    }

    public function displayProject() {
        $projets = Projet::all();
        return view('projetsRealises',['recuperation'=>$projets]);
    }

    public function saveIntoDB(Request $request) {
        $projet = new Projet();
        $projet->libelle=$request->libelle;
        $projet->client=$request->client;
        $projet->mission=$request->mission;
        $projet->tecno_utilises=$request->techno;
        $projet->duree=$request->duree;
        $projet->save();
        return redirect('formulaire-projet');
    }
}
