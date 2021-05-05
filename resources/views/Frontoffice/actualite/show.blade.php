@extends('Frontoffice.layout')
@section('content')
<div class="form-head stuck-header">
    <div class="form-head-inner">
     
        <div class="right">
            <div class="buttons">
                <a href="{{route('showListeArticlesClient')}}" class="button h-button is-light is-dark-outlined">
                    <span class="icon">
                            <i class="lnir lnir-arrow-left rem-100"></i>
                        </span>
                    <span>Retourner</span>
                </a>
                {{-- <button id="save-button" class="button h-button is-primary is-raised">Save Changes</button> --}}
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="content settings-box" >
   <h1 ><strong> {{$article->titre}}</strong></h1>

   <p>  {{$article->created_by}} &nbsp; {{$article->created_at}}</p>
   <img src="{{$article->img_path}}" alt="">



    <h3>{{$article->contenu}}</h3>

</div>
<a href="{{route('showListeArticlesClient')}}" class="button h-button is-light is-dark-outlined">
    <span class="icon">
            <i class="lnir lnir-arrow-left rem-100"></i>
        </span>
    <span>Retourner</span>
</a>
@endsection