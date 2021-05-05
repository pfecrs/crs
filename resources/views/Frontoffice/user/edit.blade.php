@extends('Frontoffice.layout')
@section('content')

<div class="account-wrapper">
    <div class="columns">

        <!--Navigation-->


        <!--Form-->
        <div class="column is-16">
            <div class="account-box is-form is-footerless">
                <div class="form-head stuck-header">
                    <div class="form-head-inner">
                        <div class="left">
                            <h3>General Info</h3>
                            <p>Edit your account's general information</p>
                        </div>
                        <div class="right">
                            <div class="buttons">
                                <a href="{{route('showClientListeEntreprise')}}" class="button h-button is-light is-dark-outlined">
                                    <span class="icon">
                                            <i class="lnir lnir-arrow-left rem-100"></i>
                                        </span>
                                    <span>Go Back</span>
                                </a>
                                {{-- <button id="save-button" class="button h-button is-primary is-raised">Save Changes</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-body">
                    <!--Fieldset-->
                    <div class="fieldset">
                        <div class="fieldset-heading">
                            <h4>Profile Picture</h4>
                            <p>This is how others will recognize you</p>
                        </div>

                        <div class="h-avatar profile-h-avatar is-xl">
                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="https://st.depositphotos.com/2101611/3925/v/600/depositphotos_39258143-stock-illustration-businessman-avatar-profile-picture.jpg" alt="">
                            <div class="filepond-profile-wrap is-hidden">
                                <input type="file" class="profile-filepond" name="profile_filepond" accept="image/png, image/jpeg, image/gif">
                            </div>
                            {{-- <button class="button is-circle edit-button is-edit">
                                <span class="icon is-small">
                                        <i data-feather="edit-2"></i>
                                    </span>
                            </button> --}}
                            <button class="button is-circle edit-button is-back is-hidden">
                                <span class="icon is-small">
                                        <i data-feather="arrow-left"></i>
                                    </span>
                            </button>
                        </div>
                    </div>
                    <!--Fieldset-->
                    <div class="fieldset">
                        <div class="fieldset-heading">
                            <h4>Personal Info</h4>
                            <p>Others diserve to know you more</p>
                        </div>
            <form action="{{route('handleClientDetails')}}" method="post" id="login-form">
                                @csrf

                                <input type="hidden" name="id" value="{{$user->id * 256}}">
                        <div class="columns is-multiline">
                           
                            <!--Field-->
                            <div class="column is-6">
                               
                                <div class="field">
                                    <label for="">Nom</label>
                                    <div class="control has-icon">
                                        <input name="nom" type="text" class="input" value="{{$user->nom}}" required>
                                        <div class="form-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="column is-6">
                                <div class="field">
                                    <label for="">Prenom</label>
                                    <div class="control has-icon">
                                        
                                        <input name="prenom" type="text" class="input" value="{{$user->prenom}}" required>
                                        <div class="form-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="column is-12">
                               
                                <div class="field">
                                    <label for="">Date de naissance</label>
                                    <div class="control has-icon">
                                        <input name="date_naissance" type="date" class="input" value="{{$user->date_naissance}}" max="{{date("Y/m/d")}}" >
                                        <div class="form-icon">
                                            <i data-feather="calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="column is-12">
                                <div class="field">
                                    <label for="">Email</label>
                                    <div class="control has-icon">
                                        <input name="email" type="email" class="input" placeholder="Email" value="{{$user->email}}"  required>
                                        <div class="form-icon">
                                            <i data-feather="mail"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="column is-12">
                                <div class="field">
                                    <label for="">Numero telephone</label>
                                    <div class="control has-icon">
                                        <input name="num_tel" type="number" class="input" placeholder="Numero phone" value="{{$user->num_telephone}}" required>
                                        <div class="form-icon">
                                            <i data-feather="hash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="column is-12">
                                <div class="field">
                                    <label for="">Numéro CIN</label>
                                    <div class="control has-icon">
                                        <input name="cin" type="number" id="cin" class="input" placeholder="Numero CIN" value="{{$user->cin}}" required>
                                        <div class="form-icon">
                                            <i data-feather="hash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="column is-12">
                                <div class="field">
                                    <label for="">Nom de votre Entreprise</label>
                                    <div class="control has-icon">
                                        <input name="entreprise" type="text" class="input" placeholder="Entreprise" value="{{$user->entreprise}}">
                                        <div class="form-icon">
                                            <i data-feather="home"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <br><br>
                                <span class="button h-button is-success is-rounded is-elevated">
                                    <i class="fas fa-check"></i>
                                    <input class="button h-button is-success  is-elevated" type="submit" value="Save Changes">
                                </span>
             
                        
                        </div>
                    </div>
                </form>


                </div>
            </div>
        </div>

    </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script>
        $("#login-form").validate({
        rules: {
            
            cin: {
            required: true,
            minlength: 8,
            maxlength: 8
            }
        },
        messages: {
            
            cin: {
            required: "CIN obligatoire !",
            minlength:"Cin doit etre composé de 8 chiffres !",
            maxlength:"Cin doit etre composé de 8 chiffres !",
            }
        }
        });
    </script>



@endsection