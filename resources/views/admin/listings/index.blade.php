@extends('Admin.master')
@section('css')
@endsection

@section('content')

    <h3 class="i-name">Listing</h3>
    {{-- <button class="btn btn-success mb-3" id="createNewListing">Create New Listing</button> --}}
    <button type="button" class=" btn btn-success btn-modal"
                            data-href="{{ route('listings.create') }}" data-container_modal=".view_modal">
                            <i class="fa fa-plus"></i>
                            Add Listing</button>
    <div class="board">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered" id="listing">

                <thead>

                    <tr>
                        <th>Title</th>
                        <th>Brand_id</th>
                        <th>Price</th>
                        <th>Watts</th>
                        <th>description</th>
                        <th>image</th>
                        <th>Action</th>

                    </tr>

                </thead>


            </table>
        </div>
    </div>
{{-- @include('admin.listings.create'); --}}
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#listing').DataTable({

            processing: true,

            serverSide: true,

            ajax: "{{ route('listings.index') }}",
            columnDefs: [{
                    targets: [1],
                    orderable: false,
                    searchable: false,
                }, ],
            columns: [

                //   {data: 'id', name: 'id'},

                {
                    data: 'title',
                    name: 'title'
                },

                {
                    data: 'brand_id',
                    name: 'brand_id'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'watts',
                    name: 'watts'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'image',
                    name: 'image'
                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]

        });

    });

// Handle Add Listing Button Click


        // Handle Form Submission via AJAX
        $(document).on('submit', '#listingForm', function (e) {
            e.preventDefault();

            // Create a FormData object from the form
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('listings.store') }}", // POST to store method
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                },
                success: function (response) {
                    $('#listingForm').trigger("reset"); // Reset form
                    $('#ajaxModel').modal('hide'); // Close modal
                    alert('Listing created successfully!');
                    $('#listing').DataTable().ajax.reload(); // Reload DataTable
                },
                error: function (error) {
                    console.error('Error:', error);
                    alert('Error occurred while storing listing.');
                }
            });
        });



        // Handle Edit Button Click
$(document).on('click', '.modal_edit', function (e) {
    e.preventDefault();

    let href = $(this).data('href'); // URL for loading the form

    $.ajax({
        url: href,
        dataType: 'html',
        success: function (result) {
            // Inject the form content into the modal
            $('.listing_modal_edit .modal-content').html(result);
            $('.listing_modal_edit').modal('show'); // Show the modal
        },
        error: function (xhr, status, error) {
            console.error('Error loading form:', error);
            toastr.error('Could not load the edit form.');
        }
    });
});

// Handle Form Submission via AJAX
$(document).on('submit', '#listingForm', function (e) {
    e.preventDefault(); // Prevent default form submission

    var formData = new FormData(this); // Handle file uploads

    $.ajax({
        url: $(this).attr('action'), // Form action URL
        method: $(this).attr('method'), // Form method (PUT)
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
        },
        success: function (response) {
            $('.listing_modal_edit').modal('hide'); // Close the modal
            toastr.success('Listing updated successfully!');
            $('#listing').DataTable().ajax.reload(); // Reload DataTable
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            toastr.error('Failed to update the listing.');
        }
    });
});


</script>

@endsection

@endsection
