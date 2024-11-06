@extends('Admin.master')
@section('css')
    {{-- Include your CSS here if needed --}}
@endsection

@section('content')

    <h3 class="i-name">Packages</h3>
    <button type="button" class="btn btn-success btn-modal"
            data-href="{{ route('packages.create') }}" data-container_modal=".view_modal">
        <i class="fa fa-plus"></i>
        Add New Package
    </button>

    <div class="board">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered" id="packages">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Inverter</th>
                        <th>Solar-Plates</th>
                        <th>Battery</th>
                        <th>Price</th>
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
        // Initialize DataTable
        var table = $('#packages').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('packages.index') }}",
            columnDefs: [{
                targets: [1],
                orderable: false,
                searchable: false,
            }],
            columns: [
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'description',
                    name: 'description'
                },

                {
                    data: 'inverter',
                    name: 'inverter',

                },
                {
                    data: 'plates',
                    name: 'plates',

                },
                {
                    data: 'battery',
                    name: 'battery',

                },
                {
                    data: 'price',
                    name: 'price',

                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        // Handle Add Project Form Submission
        $(document).on('submit', '#packagesForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('packages.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                },
                success: function (response) {
                    $('#packagesForm').trigger("reset"); // Reset form
                    toastr.success('Package added successfully!'); // Success toast
                    $('.view_modal').modal('hide'); // Close modal
                    table.ajax.reload(); // Reload DataTable
                },
                error: function (error) {
                    console.error('Error:', error);
                    toastr.error('Error occurred while storing package. Please try again.');
                }
            });
        });

        // Handle Edit Form Submission
        $(document).on('submit', '#packagesFormEdit', function (e) {
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
            console.log(response)
            // toastr.success(response.message);
            toastr.success('Package updated successfully!');
            $('.edit_modal').modal('hide'); // Close the modal

            $('#packages').DataTable().ajax.reload(); // Reload DataTable
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            toastr.error('Failed to update the package.');
        }
    });
});

        // Handle Delete Button Click
        $(document).on('click', '.deletepackages', function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            let packageId = $(this).data('id'); // Get the listing ID from the button
            let deleteUrl = `/admin/packages/delete/${packageId}`;
            // Confirm with SweetAlert
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
                    // Proceed with AJAX request if confirmed
                    $.ajax({
                        url: deleteUrl,
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            Swal.fire(
                                'Deleted!',
                                response.success || 'The package was deleted successfully.',
                                'success'
                            );
                            table.ajax.reload(); // Reload DataTable
                        },
                        error: function (xhr) {
                            let errorMessage = 'An error occurred. Please try again.';
                            if (xhr.responseJSON && xhr.responseJSON.error) {
                                errorMessage = xhr.responseJSON.error;
                            }
                            Swal.fire('Error!', errorMessage, 'error');
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
