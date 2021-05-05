@extends('Backoffice.layout')

@section('content')



    <!--  BEGIN CONTENT AREA  -->

        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="mail-box-container">
                        <div class="mail-overlay"></div>

                        <div class="tab-title">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                    <h5 class="app-title">Liste des articles</h5>
                                </div>

                                <div class="todoList-sidebar-scroll">
                                    <div class="col-md-12 col-sm-12 col-12 mt-4 pl-0">
                                        <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions active" id="all-list" data-toggle="pill" href="#pills-inbox" role="tab" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> Articles <span class="todo-badge badge"></span></a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link list-actions" id="todo-task-done" data-toggle="pill" href="#pills-sentmail" role="tab" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> Done <span class="todo-badge badge"></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions" id="todo-task-important" data-toggle="pill" href="#pills-important" role="tab" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Important <span class="todo-badge badge"></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions" id="todo-task-trash" data-toggle="pill" href="#pills-trash" role="tab" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Trash</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>

                                <a class="btn" id="addTask" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Ajouter article</a>
                            </div>
                        </div>

                        <div id="todo-inbox" class="accordion todo-inbox">
                            <div class="search">
                                <input type="text" class="form-control input-search" placeholder="Search Here...">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </div>
                    
                            <div class="todo-box">
                                
                                <div id="ct" class="todo-box-scroll">
                                    @foreach ($articles as $article)
                                    <div class="todo-item all-list">
                                        <div class="todo-item-inner">
                                            <div class="n-chk text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                  <span class="new-control-indicator"></span>
                                                </label>
                                            </div>

                                            <div class="todo-content">
                                                <h5 class="todo-heading" data-todoHeading="{{$article->titre}}">{{$article->titre}}</h5>
                                                <p class="meta-date">{{$article->created_at}}</p>
                                                <p class="todo-text" data-todoHtml="{{$article->contenu}}" data-todoText='{"ops":[{"insert":"{{$article->contenu}}"}]}'>L{{$article->contenu}}</p>
                                            </div>

                                            <div class="priority-dropdown custom-dropdown-icon">
                                                <div class="dropdown p-dropdown">

                                                    <form action="{{route('handleDeleteArticleAdmin')}}" method="post">

                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$article->id}}">
                                                        <button style="background-color: red; border-radius:5px" type="submit">
                                                            <svg style="background-color: red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            
                                                        </button>

                                                        
                                                    </form>

                                                    <a class="dropdown-toggle warning" href="#" role="button" id="dropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        
                                                    </a>

                                                    {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-1">
                                                        <a class="dropdown-item danger" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> High</a>
                                                        <a class="dropdown-item warning" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Middle</a>
                                                        <a class="dropdown-item primary" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Low</a>
                                                    </div> --}}
                                                </div>
                                            </div>

                                            <div class="action-dropdown custom-dropdown-icon">
                                                <div class="dropdown">
                                                    {{-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </a> --}}

                                                    {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                        <a class="edit dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="important dropdown-item" href="javascript:void(0);">Important</a>
                                                        <a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
                                                        <a class="dropdown-item permanent-delete" href="javascript:void(0);">Permanent Delete</a>
                                                        <a class="dropdown-item revive" href="javascript:void(0);">Revive Task</a>
                                                    </div> --}}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach

                                    
                                </div>

                                <div class="modal fade" id="todoShowListItem" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                <div class="compose-box">
                                                    <div class="compose-content">
                                                        <h5 class="task-heading"></h5>
                                                        <p class="task-text"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>                                    
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="compose-box">
                                        <div class="compose-content" id="addTaskModalTitle">
                                            <h5 class="">Add Task</h5>
                                            <form method="POST" action="{{route('handleArticleAdd')}}" enctype="multipart/form-data" >
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex mail-to mb-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 flaticon-notes"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                            <div class="w-100">
                                                                <input id="task" type="text" placeholder="Titre" class="form-control" name="titre" required>
                                                                <span class="validation-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="d-flex  mail-subject mb-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text flaticon-menu-list"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    <div class="w-100">
                                                        <div id="" class="">
                                                            <textarea class="form-control" name="contenu" id="" cols="30"  rows="10" required></textarea>
                                                        </div>
                                                        <span class="validation-text"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex mail-to mb-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                                                            
                                                            <div class="w-100">
                                                                <input  type="file"  class="form-control-file" name="document" >
                                                                <span class="validation-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex mail-to mb-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 flaticon-notes"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                            <div class="w-100">
                                                                <input id="task" type="text" placeholder="Creér par" class="form-control" name="created_by" required>
                                                                <span class="validation-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                                    <input type="submit" class="btn add-tsk" value="Ajouter Article">
                                    <button class="btn edit-tsk">Save</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
        





@endsection