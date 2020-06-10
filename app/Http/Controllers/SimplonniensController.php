<?php

namespace App\Http\Controllers;

use App\Apprenant;
use App\Projet;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;

class SimplonniensController extends Controller
{
    public function index(){

        $simplonniens= Apprenant::all();
        $projets= Projet::all();

        return view('simplonniens.index', compact('simplonniens','projets'));

    }

    public function create(){

        return view('simplonniens.create');
    }

  

    
    public function store(){

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
            // 'libelle'=>'required|',
            // 'client'=>'required|',
            // 'mission'=>'required|',
            // 'technoUtilisees'=>'required|',
            // 'duree'=>'required|'

        
      ]);
       

        Apprenant::create($data);
        // Projet::create($data);


        return back();



    }
    public function relation(){

        $apprenant= Apprenant::first();

        $apprenant->projets()->sync([1,2]);
    }
    

}


