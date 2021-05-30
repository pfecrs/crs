@extends('Frontoffice.layout')
@section('content')


<form action="{{route('handleSearchEntreprise')}}" method="post">
@csrf
 <!--Line Icons-->
 <div class="demo-card">

    <div class="card-inner">
        <label for="">Matricule fiscale :</label><br>
        <div class="field">
            <div class="control has-icon">
                <input type="text" class="input" name="id" placeholder="Saisir le matricule fiscale" >
                <div class="form-icon">
                    <i class="lnil lnil-briefcase"></i>
                </div>
            </div>
        </div>

  
    
    <button type="submit" class="button h-button is-success is-elevated">
        <span class="icon">
            <i class="fas fa-check"></i>
        </span>
        <span>Rechercher</span>
    </button>
</div></div>


</form>



@if(isset($result))


<div class="s-card demo-table">
    <table class="table is-striped is-fullwidth">
        <tr>
            <td>Nom</td>
            <td>{{$result->nom}}</td>
        </tr>
        <tr>
            <td>Matricle fiscale</td>
            <td>{{$result->identifiant_unique}}</td>
        </tr>
        <tr>
            <td>secteur</td>
            <td>{{$result->secteur}}</td>
        </tr>
        <tr>
            <td>adresse</td>
            <td>{{$result->adresse}}</td>

        </tr>
        <tr>
            <td>email</td>
            <td>{{$result->email}}</td>

        </tr>
        <tr>
            <td>numero telephone</td>
            <td>{{$result->phone}}</td>

        </tr>
        <tr>
            <td>description</td>
            <td>{{$result->description}}</td>


        </tr>
           
           
        <tr> 
           <td>logo entreprise</td>
            <td><img src="{{$result->image_path}}" alt=""></td>
           
        </tr>

    
          
           
{{--     
         <tr>
            <td>Totale engagement</td>
            <td>55 000 TND</td>
        </tr>
        <tr>
            <td>Classement totale engagement</td>
            <td>C3</td>
        </tr>
        <tr>
            <td>Le total des impayés</td>
            <td>10 000 TND</td>
        </tr>
        <tr>
            <td>Le total des impayés Contentieux</td>
            <td>30 000 TND</td>
        </tr> --}}
        {{-- <tr>
            <td></td>
            <td></td>
        </tr> --}}
       
    
 
            
           
       
    </table>
    {{-- <button class="button h-button is-success">Signaler Ce fournisseur</button> --}}
</div>


    
@endif




@endsection