<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnis extends Model
{
    protected $fillable=['nom','prenom','dateDeNaissance','sexe','formation','etablissement',
    'telephone','promotion','nationalite','entrepriseActuelle','fonction'];
}
