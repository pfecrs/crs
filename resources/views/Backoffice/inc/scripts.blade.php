<script src={{asset('Backoffice/assets/js/libs/jquery-3.1.1.min.js')}}></script>
<script src={{asset('Backoffice/bootstrap/js/popper.min.js')}}></script>
<script src={{asset('Backoffice/bootstrap/js/bootstrap.min.js')}}></script>
<script src={{asset('Backoffice/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}></script>
<script src={{asset('Backoffice/assets/js/app.js')}}></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src={{asset('Backoffice/assets/js/custom.js')}}></script>

  
    <script src={{asset('Backoffice/plugins/highlight/highlight.pack.js')}}></script>
    <script src={{asset('Backoffice/assets/js/custom.js')}}></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>


    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src={{asset('Backoffice/plugins/table/datatable/datatables.js')}}></script>
    <script src={{asset('Backoffice/assets/js/scrollspyNav.js')}}></script>
    <script src={{asset('Backoffice/plugins/sweetalerts/sweetalert2.min.js')}}></script>
    <script src={{asset('Backoffice/plugins/sweetalerts/custom-sweetalert.js')}}></script>
    <script src={{asset('Backoffice/plugins/toastr/toastr.js')}}></script>
    <script src={{asset('Backoffice/plugins/select2/select2.min.js')}}></script>
    <script src={{asset('Backoffice/plugins/select2/custom-select2.js')}}></script>
    {{-- <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    
    <script>
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement );
        FilePond.setOptions({
            server:{
                url:'upload',
                headers:{
                    'X-CSRF-TOKEN':'{{ csrf_token()}}'
                }


            } 
        });
        </script> --}}
    
    
    
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>
    <script>
        $('.widget-content .warning.confirm').on('click', function () {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                padding: '2em'
                }).then(function(result) {
                if (result.value) {
                    swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                })
})
    </script>
    









    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src={{asset('Backoffice/assets/js/scrollspyNav.js')}}></script>

    <script src={{asset('Backoffice/assets/js/ie11fix/fn.fix-padStart.js')}}></script>
    <script src={{asset('Backoffice/plugins/editors/quill/quill.js')}}></script>
    <script src={{asset('Backoffice/assets/js/apps/todoList.js')}}></script>
    <script>
        checkall('todoAll', 'todochkbox');
        $('[data-toggle="tooltip"]').tooltip()
    </script>