@extends('Backoffice.layout')

@section('content')


    <div class="layout-px-spacing">
        <a href="{{route('showAddDocument')}}"><button  class="btn btn-outline-primary mb-2 mr-2 btn-rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>Ajouter un document </button></a>
        <div class="row layout-top-spacing" id="cancel-row">
        
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nom de document</th>
                                <th>Type de document</th>
                                <th>Nom d'entreprise</th>
                                <th>Fichier</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th> --}}
                                <th class="no-content">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                                
                         
                            <tr>
                                <td>{{$document->nom}}</td>
                                <td>{{$document->type}}</td>
                                @foreach ($entreprises as $entreprise)

                                @if ($document->id_entreprise == $entreprise->id)
                                <td>{{$entreprise->nom}}</td>
                                
                               
                                @endif
                                
                                
                                
                                @endforeach
                                <td><a href="{{$document->file_path}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="black" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></a></td>
                                
                                {{-- <td>{{$document->file_path}}</td> --}}
                                {{-- <td>{{$document->id_entreprise}}</td> --}}
                                {{-- <td>{{$entreprise->id_}}</td> --}}
                                {{-- <td>2011/04/25</td>
                                <td>$320,800</td> --}}
                                <td class="row"> 
                                    <form action="{{route('showEditDocument')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$document->id}}">
                                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="green" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg> </button>
                                  </form>
                                  <form action="{{route('handleDeleteDocument')}}" method="post">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$document->id}}">
                                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="red" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button> 
                                </form> 
                                   
                                </td> 

                            </tr>
                            @endforeach
     
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nom de document</th>
                                <th>Type de document</th>
                                <th>Nom d'entreprise</th>
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