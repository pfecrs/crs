@extends('Backoffice.layout')

@section('content')


<div class="container p-3" >
   <h2 class="text-center text-secondary"> Modifier un document </h2>
   <br>
<form method="POST" action="{{route('handleEditDocument')}}">
    @csrf
    <input type="hidden" name="id" value="{{$document->id}}">
    <div class="form-row mb-4">
        <div class="form-group col-md-6">
            <label for="nom">Nom de document</label>
            <input type="text" class="form-control" value="{{$document->nom}}" name="nom" id="inputEmail4"  required>
        </div>
        <div class="form-group col-md-6">
            <label for="type">Type de document</label>
            <input type="text" name="type" value="{{$document->type}}" class="form-control" id="inputPassword4"  required>
        </div>
    </div>
    <div class="form-group mb-4">
        <label for="entreprise">Entreprise</label>
        <select name="entreprise"  class="placeholder js-states form-control">
            <option>{{$entreprise_name->nom}}</option>
            @foreach ($entreprises as $entreprise)
            <option value="{{$entreprise->id}}">{{$entreprise->nom}}</option>
            @endforeach
            
        </select>
    </div>
    <script>
        var ss = $(".basic").select2({
        tags: true,
});
    </script>
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
  <button type="submit" class="btn btn-primary mt-3">Modifier le document</button>
</form>

</div>
@endsection