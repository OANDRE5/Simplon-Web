<?php

namespace App\Http\Controllers;
use App\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function formProjet(){

        return view('projets.formProjet');
    }

    public function enregister(){

        $data= request()->validate([
            
            'libelle'=>'required|',
            'client'=>'required|',
            'mission'=>'required|',
            'technoUtilisees'=>'required|',
            'duree'=>'required|'

        
      ]);
       


        Projet::create($data);


        return back();


}
}
