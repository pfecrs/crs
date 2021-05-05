@extends('Frontoffice.layout')
@section('content')

<div class="business-dashboard company-dashboard">

<div class="column is-12">
    <div class="dashboard-card is-tickets">
        <div class="card-head">
            <h3 class="dark-inverted">Actualités</h3>
            {{-- <a class="action-link">View All</a> --}}
        </div>

        <div class="ticket-list">
            <!--Ticket-->
            @foreach ($articles as $article)
                
           
            <div class="media-flex is-responsive-mobile is-dark-bordered-12">
                <div class="h-avatar is-medium">
                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{$article->img_path}}" alt="" data-user-popover="27">
                </div>
                <div class="flex-meta">
                    <span>{{$article->titre}}</span>
                    <span class="length-span" style="display: block;width: 300px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{$article->contenu}}</span>
                    <span>{{$article->created_by}}</span>
                    <span>{{$article->created_at}}</span>
                </div>
                <div class="flex-end">
                    <form action="{{route('showOneArticleClient')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$article->id}}">
                    <button type="submit" class="button h-button is-primary is-raised">Plus..</button>
                </form>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
</div>

@endsection