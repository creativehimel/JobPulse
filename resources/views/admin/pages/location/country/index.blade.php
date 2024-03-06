@extends('admin.layouts.app')
@section('page_title', 'Country')
@push('custom_css')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
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
                <li class="breadcrumb-item active">Country</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">All Countries</h4>
                <button type="button" class="btn btn-primary" name="addCountry" id="addCountry">Add Country</button>
            </div>
            <div class="card-body">
                <div>
                    <table id="countryTable" class="table table-striped table-hover display">
                        <thead>
                            <tr>
                                <th data-sortable="true">ID</th>
                                <th data-sortable="true">Name</th>
                                <th data-sortable="false">Short Code</th>
                                <th data-sortable="false">Phone Code</th>
                                <th data-sortable="false">Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.pages.location.country.add')
@include('admin.pages.location.country.confim')

<script>
    $(document).ready(function() {
        $('#countryTable').DataTable({
            processing: true,
            serverSide: true,
            order: [[ 1, "asc" ]],
            ajax: "{{ route('countries.index') }}",
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'short_code' },
                { data: 'phone_code' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    

    $('#addCountry').click(function(){
        $('.modal-title').text('Add Country');
        $('#action_button').html('Add');
        $('#action').val('Add');
        $('#addCountryModal').modal('show');
    });

    $('#sample_form').on('submit', function(event){
       event.preventDefault();
       var id = $(this).attr('id');
       var action_url = '';
       if($('#action').val() == 'Add'){
           action_url = "{{ route('countries.store') }}";
       }

       if($('#action').val() == 'Edit'){
           action_url = "{{ route('countries.update', ':id')}}".replace(':id', id);
       }


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
                    $('#countryTable').DataTable().ajax.reload();
                    $('#addCountryModal').modal('hide');
                }
           },
           error:function(data)
           {
               var errors = data.responseJSON;
               console.log(errors);
           }
       });

       


    });

    $(document).on('click', '.edit', function(event){
        event.preventDefault();
        var id = $(this).attr('id');
        console.log(id);
        $.ajax({
            url:"{{route('countries.edit', ':id')}}".replace(':id', id),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:"json",
            success:function(data)
            {
                console.log(data);
                $('#hidden_id').val(data.data.id);
                $('#name').val(data.data.name);
                $('#short_code').val(data.data.short_code);
                $('#phone_code').val(data.data.phone_code);
                $('.modal-title').text('Edit Country');
                $('#action_button').html('Update');
                $('#action').val('Update');
                $('#addCountryModal').modal('show');
            },
            error:function(data)
            {
                var errors = data.responseJSON;
                console.log(errors);
            }
        });
        
    });

    var id;
    $(document).on('click', '.delete', function(){
        id = $(this).attr('id');
        $('#confirmModal').modal('show');
    });
    $('#confirm_button').click(function(){
        $.ajax({
            url:"{{route('countries.destroy', ':id')}}".replace(':id', id),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType:"json",
            type:"DELETE",
            beforeSend: function(){
                $('#confirm_button').html('<span class="spinner-border spinner-border-sm pr-1" role="status" aria-hidden="true"></span> Deleting.....');
                $('#confirm_button').prop('disabled', true);
            },
            success:function(data)
            {
                setTimeout(function(){
                    $('#confirm_button').html('Ok');
                    $('#confirm_button').prop('disabled', false);
                    $('#confirmModal').modal('hide');
                    $('#countryTable').DataTable().ajax.reload();
                    toastr.success(data.success);
                }, 1000);
            },
            error:function(data)
            {
                var errors = data.responseJSON;
                console.log(errors);
            }
        })
    });
    
    
</script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    
@endsection()

