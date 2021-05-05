@extends('Backoffice.layout')

@section('content')


    <div class="layout-px-spacing">
        <a href="{{route('showAddEntreprise')}}"><button  class="btn btn-outline-primary mb-2 mr-2 btn-rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>Ajouter une entreprise </button></a>
        <div class="row layout-top-spacing" id="cancel-row">
        
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nom de l'entreprise</th>
                                <th>Secteur d'activité</th>
                                <th>Adresse</th>
                                {{-- <th>Document</th> --}}
                                {{-- <th>Start date</th>
                                <th>Salary</th> --}}
                                <th class="no-content">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entreprises as $entreprise)
                                
                         
                            <tr>
                                <td>{{$entreprise->nom}}</td>
                                <td>{{$entreprise->secteur}}</td>
                                <td>{{$entreprise->adresse}}</td>

                                {{-- <td>{{$entreprise->id_document}}</td> --}}
                                {{-- <td>2011/04/25</td>
                                <td>$320,800</td> --}}
                                <td class="row"> 
                                    <form action="{{route('showEditEntreprise')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$entreprise->id}}">
                                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="green" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg> </button>
                                  </form>
                                  <form action="{{route('handleDeleteEntreprise')}}" method="post">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$entreprise->id}}">
                                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="green" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button> 
                                </form> 
                                   
                                </td> 

                            </tr>
                            @endforeach
     
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nom de l'entreprise</th>
                                <th>Secteur d'activité</th>
                                <th>Adresse</th>
                                {{-- <th>Document</th> --}}
                                {{-- <th>Start date</th>
                                <th>Salary</th> --}}
                               
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>


    
@endsection