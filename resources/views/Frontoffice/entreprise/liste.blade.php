@extends('Frontoffice.layout')
@section('content')


<div class="user-grid-toolbar">
    <div class="control has-icon">
        <input class="input custom-text-filter" placeholder="Search..." data-filter-target=".column">
        <div class="form-icon">
            <i data-feather="search"></i>
        </div>
    </div>

    {{-- <div class="buttons">
        <div class="field h-hidden-mobile">
            <div class="control">
                <div class="h-select">
                    <div class="select-box">
                        <span>Filter</span>
                    </div>
                    <div class="select-icon">
                        <i data-feather="chevron-down"></i>
                    </div>
                    <div class="select-drop has-slimscroll-sm">
                        <div class="drop-inner">
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>UI/UX Design</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Web Development</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Software Engineering</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Business</span>
                                </div>
                            </div>
                            <div class="option-row">
                                <input type="radio" name="grid_filter">
                                <div class="option-meta">
                                    <span>Product Management</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <button class="button h-button is-primary is-raised">
            <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
            <span>Add User</span>
        </button> --}}
    {{-- </div> --}}
</div>

<div class="page-content-inner">

    <div class="user-grid user-grid-v1">

        <!--List Empty Search Placeholder -->
        <div class="page-placeholder custom-text-filter-placeholder is-hidden">
            <div class="placeholder-content">
                <img class="light-image" src="assets/img/illustrations/placeholders/search-4.svg" alt="" />
                <img class="dark-image" src="assets/img/illustrations/placeholders/search-4-dark.svg" alt="" />
                <h3>Nous n'avons pas trouvé de résultats correspondants.</h3>
                <p class="is-larger">Dommage. Il semble que nous n’ayons trouvé aucun résultat correspondant pour
                    les termes de recherche que vous avez saisis. Veuillez essayer différents termes ou critères de recherche.</p>
            </div>
        </div>

        <div class="columns is-multiline">
@foreach ($entreprises as $entreprise)
    

            <!--Grid item-->
            <div class="column is-3">
                <div class="grid-item">
                    <div class="h-avatar is-big">
                        <img class="avatar" src="{{$entreprise->image_path}}" data-demo-src="{{$entreprise->image_path}}" alt="" data-user-popover="6">
                        <img class="badge" src="https://f.hellowork.com/blogdumoderateur/2017/09/badge-facebook.png" data-demo-src="https://f.hellowork.com/blogdumoderateur/2017/09/badge-facebook.png" alt="">
                    </div>
                    <h3 class="dark-inverted" data-filter-match>{{$entreprise->nom}}</h3>
                    <p data-filter-match>{{$entreprise->secteur}}</p>
                    {{-- <div class="people">
                        <div class="h-avatar is-small">
                            <span class="avatar is-fake is-warning" data-user-popover="36">
                                    <span>BT</span>
                            </span>
                        </div>
                        <div class="h-avatar is-small">
                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="" data-user-popover="7">
                        </div>
                        <div class="h-avatar is-small">
                            <span class="avatar is-fake is-info" data-user-popover="34">
                                    <span>JD</span>
                            </span>
                        </div>
                        <div class="h-avatar is-small">
                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="" data-user-popover="0">
                        </div>
                    </div> --}}
                    <br><br>
                    <div class="buttons">
                        <button class="button h-button is-rounded h-modal-trigger" data-modal="{{$entreprise->id}}">
                            <span class="icon">
                                    <i data-feather="plus"></i>
                                </span>
                            <span>Plus..</span>
                        </button>
                        <button class="button h-button is-rounded h-modal-trigger" data-modal="{{$entreprise->id}}docs" >
                            <span class="icon">
                                    <i data-feather="file"></i>
                                </span>
                            <span>Documents</span>
                        </button>
                    </div>
                </div>
            </div>
          
            
            <div id="{{$entreprise->id}}" class="modal h-modal">
                <div class="modal-background  h-modal-close"></div>
                <div class="modal-content">
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <h3>{{$entreprise->nom}}</h3>
                            <button class="h-modal-close ml-auto" aria-label="close">
                                <i data-feather="x"></i>
                            </button>
                        </header>
                        <div class="modal-card-body">
                            <div class="inner-content">
                                <div class="section-placeholder">
                                    <div class="placeholder-content">
                                        <img src="{{$entreprise->image_path}}" alt="">
                                        <br>
                                        <h3 class="dark-inverted">Secteur d'activité</h3>
                                        <p>{{$entreprise->secteur}}</p>
                                        <h3 class="dark-inverted">Adresse</h3>
                                        <p>{{$entreprise->adresse}}</p>
                                        <h3 class="dark-inverted">Telephone</h3>
                                        <p>{{$entreprise->phone}}</p>
                                        <h3 class="dark-inverted">Email</h3>
                                        <p>{{$entreprise->email}}</p>
                                        <h3 class="dark-inverted">Description </h3>
                                        <p>{{$entreprise->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-card-foot is-end">
                            <a class="button h-button is-rounded h-modal-close">Cancel</a>
                            <a class="button h-button is-primary is-raised is-rounded">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>


            
                
          
                
        
            <div id="{{$entreprise->id}}docs" class="modal h-modal">
                <div class="modal-background  h-modal-close"></div>
                <div class="modal-content">
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <h3>{{$entreprise->nom}}</h3>
                            <button class="h-modal-close ml-auto" aria-label="close">
                                <i data-feather="x"></i>
                            </button>
                        </header>
                        <div class="modal-card-body">
                            <div class="inner-content">
                                <div class="section-placeholder">
                                    <div class="placeholder-content">
                                        <img src="{{$entreprise->image_path}}" alt="">
                                        <br>
                                        
                                        <h3 class="dark-inverted">Documents disponible</h3>
                                        <br>
                                        @foreach ($documents as $document)
                                        @if ($entreprise->id == $document->id_entreprise)
                                        <div>
                                        
                                        <p>  <i data-feather="file"></i> {{$document->nom}}</p>
                                        </div>
                                        @endif

                                        @endforeach
                                        {{-- <h3 class="dark-inverted">Adresse</h3> --}}
                                        {{-- <p>{{$entreprise->adresse}}</p>
                                        <h3 class="dark-inverted">Telephone</h3>
                                        <p>{{$entreprise->phone}}</p>
                                        <h3 class="dark-inverted">Email</h3>
                                        <p>{{$entreprise->email}}</p>
                                        <h3 class="dark-inverted">Description </h3>
                                        <p>{{$entreprise->description}}</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-card-foot is-end">
                            <a class="button h-button is-rounded h-modal-close">Cancel</a>
                            <a class="button h-button is-primary is-raised is-rounded">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
           
           
            @endforeach
        </div>
    </div>
</div>

@endsection