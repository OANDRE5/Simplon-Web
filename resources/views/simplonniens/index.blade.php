@extends('layout')
@section('content')
<h1>Les Simplonniens</h1>
<a href="/simplonniens/create" class="btn btn-primary my-3">Nouveau apprenant</a>
<a href="/projets/formProjet" class="btn btn-primary my-3">Nouveau Project</a>
<a href="/alumnis/formAlumnis" class="btn btn-primary my-3">Ajouter Alumnis</a>
<a href="/alumnis/liste" class="btn btn-primary my-3">Liste Alumnis</a>
<ul>
@foreach ($simplonniens as $simplonnien)
<li>{{$simplonnien->nom}} {{$simplonnien->prenom}} {{$simplonnien->formation}}</li>
    
@endforeach
</ul>
   
  
@endsection