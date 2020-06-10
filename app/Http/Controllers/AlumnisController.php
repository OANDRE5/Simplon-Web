<?php

namespace App\Http\Controllers;
use App\Alumnis;
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    public function formAlumnis(){

        return view('alumnis.formAlumnis');
    }

  public function liste(){


    $alumnis= Alumnis::all();
   

    return view('alumnis.liste');

  }

    
    public function store2(){

        $data= request()->validate([
             
            'nom'=>'required|',
            'prenom'=>'required|',
            'dateDeNaissance'=>'required|date',
            'sexe'=>'required|',
            'formation'=>'required|',
            'etablissement'=>'required|',
            'telephone'=>'required|integer',
            'promotion'=>'required|date',
            'nationalite'=>'required|',
            'entrepriseActuelle'=>'required|',
            'fonction'=>'required|'
        
      ]);
       

        Alumnis::create($data);
        // Projet::create($data);


        return back();

}
}