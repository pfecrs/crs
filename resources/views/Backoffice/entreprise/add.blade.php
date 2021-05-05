@extends('Backoffice.layout')

@section('content')


<div class="container p-3" >
   <h2 class="text-center text-secondary"> Ajouter une entreprise </h2>
   <br>
<form method="POST" action="{{route('handleAddEntreprise')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="nom">Nom de l'entreprise</label>
            <input type="text" class="form-control" name="nom" id="inputEmail4"  required>
        </div>
        <div class="form-group col-md-6">
            <label for="secteur">Secteur d'activité</label>
            <input type="text" name="secteur" class="form-control" id="inputPasswo"  required>
        </div>
    </div>
    <div class="form-group mb-4">
        <label for="addresse">Adresse</label>
        <input type="text" name="adresse"  class="form-control" id="inputAddress"  required>
    </div>
    <div class="form-group mb-4">
        <label for="addresse">Telephone</label>
        <input type="number" name="phone"  class="form-control" id="inputAddress"  required>
    </div>
    <div class="form-group mb-4">
        <label for="addresse">Email</label>
        <input type="email" name="email"  class="form-control" id="inputAddress"  required>
    </div>
    <div class="form-group mb-4">
        <label for="description">description</label>
        {{-- <input type="text" name="adresse"  class="form-control" id="inputAddress"  required> --}}
        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group mb-4">
        <label for="addresse">Logo d'entreprise</label>
        <input type="file" name="document"  class="form-control-file" id="inputAddress"  required>
    </div>
    {{-- <div class="form-group mb-4">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check pl-0">
            <div class="custom-control custom-checkbox checkbox-info">
                <input type="checkbox" class="custom-control-input" id="gridCheck">
                <label class="custom-control-label" for="gridCheck">Check me out</label>
            </div>
        </div>
    </div> --}}
  <button type="submit" class="btn btn-primary mt-3">Ajouter l'entreprise</button>
</form>

</div>
@endsection