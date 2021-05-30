@extends('Backoffice.layout')

@section('content')


<div class="media">
    {{-- <img class="rounded" src="assets/img/profile-4.jpeg" alt="pic1"> --}}
    <div class="media-body text-center">
        <br>
        <h2 class="media-heading">{{$reclamation->titre}}</h2>  
        <br>
        <p class="media-text">{{$reclamation->contenu}}</p>
        <br><br>
        <a href="{{$reclamation->document_path}}" class="btn btn-outline-primary" target="_blank">voir Le fichier</a>
        <br><br>
        <form action="{{route('handleEditReclamation')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$reclamation->id}}">
            <select name="status" class="form-control">
                <option value="0" @if($reclamation->status == 0) selected="selected" @endif>en attente</option>
                <option value="1"  @if($reclamation->status == 1) selected="selected" @endif >Refuseé</option>
                <option value="2"  @if($reclamation->status == 2) selected="selected" @endif>Accepter</option>
            </select>
<br>
<br>


            <button type="submit" class="btn btn-outline-primary mb-2">Mise a jour </button>
        </form>
    </div>
</div>

@endsection