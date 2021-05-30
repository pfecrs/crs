@extends('Backoffice.layout')

@section('content')



<div class="container p-3" >
   <h2 class="text-center text-secondary"> Editer un client </h2>
   <br>
<form method="POST" action="{{route('handleEditUser')}}">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="nom">Nom </label>
            <input type="text" class="form-control" name="nom" value="{{$user->nom}}" id="inputEmail4"  >
        </div>
        <div class="form-group col-md-6">
            <label for="prenom">Prenom </label>
            <input type="text" class="form-control" name="prenom" value="{{$user->prenom}}" id="inputEmail4"  >
        </div>
        <div class="form-group col-md-6">
            <label for="date_naissance">date naissance </label>
            <input type="date" class="form-control" name="date_naissance" value="{{$user->date_naissance}}" id="inputEmail4"  >
        </div>
        <div class="form-group col-md-6">
            <label for="nom">email </label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}" id="inputEmail4"  >
        </div>
        <div class="form-group col-md-6">
            <label for="nom">num telephone</label>
            <input type="number" class="form-control" name="num_telephone" value="{{$user->num_telephone}}" id="inputEmail4"  >
        </div>
        <div class="form-group col-md-6">
            <label for="nom">cin </label>
            <input type="number" class="form-control" name="cin" value="{{$user->cin}}" id="inputEmail4"  >
        </div>
        <div class="form-group col-md-6">
            <label for="nom">date expiration</label>
            <input type="date" class="form-control" name="date_expiration" value="{{$user->date_expiration}}" id="inputEmail4"  >
        </div>
        <div class="form-group col-md-6">
            <label for="nom">entreprise </label>
            <input type="text" class="form-control" name="entreprise" value="{{$user->entreprise}}" id="inputEmail4"  >
        </div>
     
  
  <button type="submit" class="btn btn-primary mt-3">Modifier le Client</button>
</form>

</div>
@endsection


