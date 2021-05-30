@extends('Frontoffice.layout')

@section('content')

<div class="form-layout">
    <div class="form-outer">
        <div class="form-header stuck-header">
            <div class="form-header-inner">
                <div class="left">
                    <h3>Reclamation</h3>
                </div>
                <div class="right">
                    <div class="buttons">
                        <a href={{route('showReclamationIndexClient')}} class="button h-button is-light is-dark-outlined">
                            <span class="icon">
                                    <i class="lnir lnir-arrow-left rem-100"></i>
                                </span>
                            <span>Cancel</span>
                        </a>
                        {{-- <button id="save-button" class="button h-button is-primary is-raised">Schedule</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <form action="{{route('handleReclamationAddClient')}}" enctype="multipart/form-data"  method="post">
            @csrf
            <div class="form-body">
            <!--Fieldset-->
            <div class="form-fieldset">
                <div class="fieldset-heading">
                    <h4>Formulaire de réclamation</h4>
                    
                </div>

                <div class="columns is-multiline">
                 
                    {{-- <div class="column is-6">
                        <div class="field">
                            <label>First Name</label>
                            <div class="control has-icon">
                                <input type="text" class="input" placeholder="">
                                <div class="form-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="field">
                            <label>Last name</label>
                            <div class="control has-icon">
                                <input type="text" class="input" placeholder="">
                                <div class="form-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="column is-12">
                        <div class="field">
                            <label>Titre </label>
                            <div class="control has-icon">
                                <input type="text" class="input" name="titre" placeholder="" required>
                                <div class="form-icon">
                                    <i data-feather="hash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-12">
                        <div class="field">
                            <label>Type</label>
                            <div class="control has-icon">
                                <input type="text" class="input" name="type" placeholder="" required>
                                <div class="form-icon">
                                    <i data-feather="hash"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-12">
                        <div class="field">
                            <label>Contenu</label>
                            <div class="control">
                                <textarea class="textarea" name="contenu" rows="4" placeholder="contenu de réclamation..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="column is-12">
                        <div class="file">
                            <label class="file-label">
                              <input class="file-input" type="file" name="document">
                              <span class="file-cta">
                                <span class="file-icon">
                                  <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                  inserer fichier
                                </span>
                              </span>
                            </label>
                          </div>
                    </div>
                    {{-- <div class="column is-12">
                        <div class="field">
                            <label>Adresse</label>
                            <div class="control has-icon">
                                <input type="text" name="adresse" class="input" placeholder="Adresse" required>
                                <div class="form-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <br><br>
                    <button type="submit" class="button h-button is-success is-rounded is-elevated">
                     <span class="icon">
                     <i class="fas fa-check"></i>
                    </span>
                      <span>Envoyer La reclamation </span>
                     </button>
                    

                </div>
            </div>
            
        </div>
        
    </form>
    </div>
</div>

@endsection