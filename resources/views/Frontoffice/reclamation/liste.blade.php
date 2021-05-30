@extends('Frontoffice.layout')

@section('content')

<div class="buttons is-pulled-right">
    <a href="{{route('showReclamationAddClient')}}"> <button class="button h-button is-primary is-elevated">
         <span class="icon">
                 <i class="fas fa-plus"></i>
             </span>
         <span>Ajouter une Reclamation</span>
     </button></a>
 </div>
<h1  class="title is-3 is-narrow">Vos Reclamations</h1>

<hr>
<div class="columns is-multiline">

    @foreach ($reclamations as $reclamation)
        
    


    <!--Card-->
    <div class="column is-4">
        <div class="card h-card">
            <div class="card-image">

                <figure class="image is-4by3">
                    @if ($reclamation->status == 0)
                    <img src="https://via.placeholder.com/1280x960" data-demo-src="{{asset('img/jaune.jpg')}}" alt="">
                    @elseif( $reclamation->status == 1)
                    <img src="https://via.placeholder.com/1280x960" data-demo-src="{{asset('img/rouge.jpg')}}" alt="">

                    @elseif( $reclamation->status == 2)
                    <img src="https://via.placeholder.com/1280x960" data-demo-src="{{asset('img/vert.jpg')}}" alt="">
                    @endif
                    
                </figure>
            </div>
            <div class="card-content">
                <div class="media-flex-center no-margin">
                    <div class="h-avatar is-medium">
                        {{-- <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/19.jpg" alt="" data-user-popover="17"> --}}
                        {{-- <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/germany.svg" alt=""> --}}
                    </div>
                    <div class="flex-meta">
                        <span>{{$reclamation->titre}}</span>
                        {{-- <span>Sales Manager</span> --}}
                    </div>
                </div>

                <div class="inner-content p-t-20 p-b-20">
                    <p style=" width: 250px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">{{$reclamation->contenu}}</p>
                </div>

                <a class="action-link">Voir plus</a>
            </div>
        </div>
    </div>



    @endforeach
</div>

@endsection