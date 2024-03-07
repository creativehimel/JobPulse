@extends('admin.layouts.app')
@section('page_title', 'City')
@push('custom_css')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}">
@endpush
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="#">Locations</a>
                    </li>
                    <li class="breadcrumb-item active">City</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">All Cities</h4>
                    <button type="button" class="btn btn-primary" id="addCity">Add City</button>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-striped table-hover display" id="cityTable">
                            <thead class="table-light">
                                <tr>
                                    <th data-sortable="true">S.N</th>
                                    <th data-sortable="true">Name</th>
                                    <th data-sortable="true">State Name</th>
                                    <th data-sortable="false">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.pages.location.city.cityModal')
@endsection
@push('custom_js')
<script>
    $(document).ready(function() {
        $('#cityTable').DataTable({
            processing: true,
            serverSide: true,
            // order: [[ 1, "asc" ]],
            ajax: "{{ route('cities.index') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'state.name' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    
    $('#addCity').click(function(){
        $('.modal-title').text('Add City');
        $('#action_button').html('Add');
        $('#action').val('Add');
        $('#cityModal').modal('show');
    });


     $('#sample_form').on('submit', function(event){
       event.preventDefault();
       var id = $(this).attr('id');
       var action_url = '';
       if($('#action').val() == 'Add'){
           action_url = "{{ route('cities.store') }}";
           $.ajax({
                type:"POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: action_url,
                data:$(this).serialize(),
                dataType:"json",
                success:function(data)
                {
                        var html = '';
                        if(data.errors){
                            for(var count = 0; count < data.errors.length; count++){
                                toastr.error(data.errors[count]);
                            } 
                        }
                        if(data.success){
                            toastr.success(data.success);
                            $('#sample_form')[0].reset();
                            $('#cityTable').DataTable().ajax.reload();
                            $('#cityModal').modal('hide');
                        }
                },
                error:function(data)
                {
                    var errors = data.responseJSON;
                    console.log(errors);
                }
            });
       }

       if($('#action').val() == 'Update'){
           action_url = "{{ route('cities.update', ':id')}}".replace(':id', id);
           $.ajax({
                type:"PUT",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: action_url,
                data:$(this).serialize(),
                dataType:"json",
                success:function(data)
                {
                        var html = '';
                        if(data.errors){
                            for(var count = 0; count < data.errors.length; count++){
                                toastr.error(data.errors[count]);
                            } 
                        }
                        if(data.success){
                            toastr.success(data.success);
                            $('#sample_form')[0].reset();
                            $('#cityTable').DataTable().ajax.reload();
                            $('#cityModal').modal('hide');
                        }
                },
                error:function(data)
                {
                    var errors = data.responseJSON;
                    console.log(errors);
                }
            });
       }


       
    });

    $(document).on('click', '.edit', function(event){
        event.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
            url:"{{route('cities.edit', ':id')}}".replace(':id', id),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:"json",
            success:function(data)
            {
                $('#hidden_id').val(data.data.id);
                $('#name').val(data.data.name);
                $('#state_id').val(data.data.state_id);
                $('.modal-title').text('Edit City');
                $('#action_button').html('Update');
                $('#action').val('Update');
                $('#cityModal').modal('show');
            },
            error:function(data)
            {
                var errors = data.responseJSON;
                console.log(errors);
            }
        });
        
    });


    $(document).on('click', '.delete', function(event){
        event.preventDefault();
        var id = $(this).attr('id');
        var action_url = "{{ route('cities.destroy', ':id') }}".replace(':id', id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type:"DELETE",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: action_url,
                    success:function(data)
                    {
                        if(data.errors){
                            for(var count = 0; count < data.errors.length; count++){
                                toastr.error(data.errors[count]);
                            } 
                        }
                        if(data.success){
                            toastr.success(data.success);
                            $('#cityTable').DataTable().ajax.reload();
                        }
                    },
                    error:function(data)
                    {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            }
        })
    });
</script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
    
@endpush