@extends('Admin.master')
@section('css')
@endsection

@section('content')

    <h3 class="i-name">Listing</h3>
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
@endsection
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

        $(document).on('submit', '#listingForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('listings.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
            $('#listingForm').trigger("reset");
            toastr.success('Listing created successfully!');
            $('.view_modal').modal('hide');
            $('#listing').DataTable().ajax.reload();
        },
                error: function (error) {
                    console.error('Error:', error);
                    toastr.error('Error occurred while storing listing. Please try again.');
                }

            });
        });

$(document).on('submit', '#listingFormEdit', function (e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: $(this).attr('action'),
        method: $(this).attr('method'),
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            console.log(response)
            toastr.success(response.message);
            $('.edit_modal').modal('hide');

            $('#listing').DataTable().ajax.reload();
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            toastr.error('Failed to update the listing.');
        }
    });
});

$(document).on('click', '.deleteListing', function (e) {
    e.preventDefault();
    let listingId = $(this).data('id');
    let deleteUrl = `/admin/listings/delete/${listingId}`;
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
                url: deleteUrl,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    Swal.fire(
                        'Deleted!',
                       response.success || 'The listing was deleted successfully.',
                        'success'
                    );
                    $('#listing').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    let errorMessage = 'An error occurred. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMessage = xhr.responseJSON.error;
                    }

                    Swal.fire(
                        'Error!',
                        errorMessage,
                        'error'
                    );
                }
            });
        }
    });
});

</script>

@endsection


