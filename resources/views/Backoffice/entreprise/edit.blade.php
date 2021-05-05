@extends('Backoffice.layout')

@section('content')


@extends('Backoffice.layout')

@section('content')


<div class="container p-3" >
   <h2 class="text-center text-secondary"> Ajouter une entreprise </h2>
   <br>
<form method="POST" action="{{route('handleEditEntreprise')}}">
    @csrf
    <input type="hidden" name="id" value="{{$entreprise->id}}">
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="nom">Nom de l'entreprise</label>
            <input type="text" class="form-control" name="nom" value="{{$entreprise->nom}}" id="inputEmail4"  required>
        </div>
        <div class="form-group col-md-6">
            <label for="secteur">Secteur d'activité</label>
            <input type="text" name="secteur" class="form-control" value="{{$entreprise->secteur}}" id="inputPassword4"  required>
        </div>
    </div>
    <div class="form-group mb-4">
        <label for="addresse">Adresse</label>
        <input type="text" name="adresse"  class="form-control" value="{{$entreprise->adresse}}" id="inputAddress"  required>
    </div>
  
  <button type="submit" class="btn btn-primary mt-3">Modifier l'entreprise</button>
</form>

</div>
@endsection


@endsection