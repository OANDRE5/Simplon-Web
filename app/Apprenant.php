<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
   protected $fillable=['nom','prenom','dateDeNaissance','sexe','formation','etablissement',
   'telephone','promotion','nationalite'];

  //  public function projets(){

  //     return $this->belongsToMany('App\Projet');

//       $apprenant= App\apprenant::find(1);

//   foreach($apprenant->projets as $projet);
  // }
  
  
}
