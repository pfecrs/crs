@extends('Backoffice.layout')

@section('content')


    <div class="layout-px-spacing">
        {{-- <a href="{{route('showAddreclamation')}}"><button  class="btn btn-outline-primary mb-2 mr-2 btn-rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>Ajouter une entreprise </button></a> --}}
        <div class="row layout-top-spacing" id="cancel-row">
        
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>titre </th>
                                <th>type</th>
                                <th>CIN client</th>
                                <th>status</th>
                                {{-- <th>Plan</th> --}}
                                <th class="no-content">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reclamations as $reclamation)
                                
                         
                            <tr>
                                <td>{{$reclamation->titre}}</td>
                                <td>{{$reclamation->type}}</td>
                                @foreach ($clients as $client)
                                    @if ($client->id == $reclamation->id_client )
                                    <td>{{$client->cin}}</td>
                                    @endif
                               
                                @endforeach
                                @if ($reclamation->status == 0)
                                    <td class="text-warning">En attente</td>
                                @elseif( $reclamation->status == 1)
                                    <td class="text-danger">Refuseé</td>
                                @else
                                    <td class="text-success">Accepter </td>
                                @endif
                                {{-- <td>{{$reclamation->status}}</td> --}}
                                {{-- <td>{{ date('Y-m-d') }}</td> --}}
                                {{-- <td>@if(  date('Y-m-d') <=  $reclamation->date_expiration)
                                            <p class="text-success">  Actif</p>
                                  
                                    

                                    @else
                                         <p class="text-danger"> Pas Actif</p>
                                    @endif

                                </td> --}}
                                {{-- <td>{{$reclamation->date_expiration}}</td> --}}
                                <td class="row"> 
                                    <form action="{{route('showEditReclamation')}}" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$reclamation->id}}">
                                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="green" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg> </button>
                                  </form>
                                  {{-- <form action="{{route('handleEditreclamation')}}" method="post">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$reclamation->id}}">
                                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="green" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button> 
                                </form> 
                                    --}}
                                </td> 

                            </tr>
                            @endforeach
     
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>titre </th>
                                <th>type</th>
                                <th>client</th>
                                <th>status</th>
                                {{-- <th>Plan</th> --}}
                                <th class="no-content">Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>


    
@endsection