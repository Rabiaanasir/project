@extends('Admin.master')
@section('css')
@endsection

@section('content')
    <h3 class="i-name">Booking</h3>
    <!-- <button class="btn btn-success mb-3" id="createNewbooking">Create New Booking</button>  -->
    <button type="button" class=" btn btn-success btn-modal" data-href="{{ route('bookings.create') }}"
        data-container_modal=".view_modal">
        <i class="fa fa-plus"></i>
        Add Booking</button>
    <div class="board">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered" id="bookings">

                <thead>

                    <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Booking Code</th>
                        <th>Action</th>

                    </tr>

                </thead>


            </table>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#bookings').DataTable({

                processing: true,

                serverSide: true,

                ajax: "{{ route('bookings.index') }}",
                columnDefs: [{
                    targets: [1],
                    orderable: false,
                    searchable: false,
                }, ],
                columns: [{
                        data: 'user',
                        name: 'user'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'booking_date',
                        name: 'booking_date'
                    }, // Fix the name here
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'booking_code',
                        name: 'booking_code'
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
        // Handle Form Submission via AJAX
        $(document).on('submit', '#bookingForm', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            console.log(formData)
            var formAction = $(this).attr('action'); // Get the action attribute from the form
            console.log(formAction)
            $.ajax({
                url: formAction, // Use the action URL from the form
                type: "POST",
                data: formData,
                contentType: data,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                },
                success: function(response) {
                    toastr.success(response.success); // Show success toast
                    $('#bookingForm').trigger("reset"); // Reset form
                    $('.view_modal').modal('hide'); // Close modal (if applicable)
                    $('#booking').DataTable().ajax.reload(); // Reload DataTable
                },
                error: function(error) {
                    console.error('Error:', error);
                    var errorMessage = 'Error occurred while storing booking. Please try again.';
                    if (error.responseJSON && error.responseJSON.errors) {
                        errorMessage = Object.values(error.responseJSON.errors).flat().join(
                        ' '); // Get validation errors
                    }
                    toastr.error(errorMessage); // Show error toast
                }
            });
        });

        // });
        // Handle Form Submission via AJAX
        $(document).on('submit', '#bookingFormEdit', function(e) {
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
                success: function(response) {
                    console.log(response)
                    toastr.success(response.message);
                    $('.edit_modal').modal('hide'); // Close the modal

                    $('#booking').DataTable().ajax.reload(); // Reload DataTable
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    toastr.error('Failed to update the booking.');
                }
            });
        });

        // Handle Delete Button Click
        $(document).on('click', '.deleteBooking', function(e) {
            e.preventDefault(); // Prevent default anchor behavior

            let deleteUrl = $(this).data('href'); // Get the delete URL

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
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.success || 'The booking was deleted successfully.',
                                'success'
                            );
                            $('#booking').DataTable().ajax.reload(); // Reload DataTable
                        },
                        error: function(xhr) {
                            // Safely access error message
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
