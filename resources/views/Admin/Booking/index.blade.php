

 @extends('Admin.master')

 @section('css')
 <!-- Add any custom CSS specific to this page if needed -->
 @endsection

 @section('content')
 <h3 class="i-name">Booking Managment</h3>


 <div class="board">

    <!-- Bookings Table -->
    <div class="table-responsive">
        <table id="bookings-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>User Email</th>
                    <th>Backup Power</th>
                    <th>Backup Hour</th>
                    <th>Consumption Watts</th>
                    <th>Status</th>
                    <th>Booking Date</th>
                    <th>Booking Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
    var table = $('#bookings-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.bookings.data') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'username', name: 'username' },
            { data: 'address', name: 'address' },
            { data: 'phone_number', name: 'phone_number' },
            { data: 'user_email', name: 'user.email' },
            { data: 'backup_power', name: 'backup_power', render: function(data) { return data ? 'Yes' : 'No'; } },
            { data: 'backup_hour', name: 'backup_hour' },
            { data: 'consumption_watts', name: 'consumption_watts' },
            { data: 'status', name: 'status', render: function(data, type, row) {
                return `
                    <select class="form-control status-dropdown" data-id="${row.id}" data-original-status="${data}">
                        <option value="pending" ${data === 'pending' ? 'selected' : ''}>Pending</option>
                        <option value="accepted" ${data === 'accepted' ? 'selected' : ''}>Accepted</option>
                        <option value="declined" ${data === 'declined' ? 'selected' : ''}>Declined</option>
                    </select>
                `;
            }},
            { data: 'booking_date', name: 'booking_date' },
            { data: 'booking_code', name: 'booking_code' },
            {
                data: 'actions',
                name: 'actions',
                orderable: false,
                searchable: false,
                render: function(data, type, row)
                 {
                    return `
                        <button class="btn btn-sm btn-danger deletebooking" data-id="${row.id}">
                            Delete
                        </button>
                         <button class="btn btn-sm btn-info send-email" data-id="${row.id}">
                Send Email
            </button>
                    `;
                }
            }
        ]
    });

    // Handle the status change in the dropdown
    $(document).on('change', '.status-dropdown', function() {
        const bookingId = $(this).data('id');
        const newStatus = $(this).val();

        // Show confirmation using SweetAlert
        Swal.fire({
            title: 'Are you sure?',
            text: `Do you want to change the status to "${newStatus.charAt(0).toUpperCase() + newStatus.slice(1)}"?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, change it!',
            cancelButtonText: 'No, keep it',
        }).then((result) => {
            if (result.isConfirmed) {
                // Send the AJAX request to update the status
                $.ajax({
                    url: `/admin/bookings/${bookingId}/update-status`,
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        status: newStatus
                    },
                    success: function(response) {
                        Swal.fire(
                            'Updated!',
                            'The booking status has been updated.',
                            'success'
                        );

                        // Manually update the status in the DataTable row
                        var row = table.row($(`.status-dropdown[data-id="${bookingId}"]`).closest('tr'));
                        row.data().status = newStatus; // Update status in the row data
                        row.child().find('.status-dropdown').val(newStatus); // Update dropdown value in the row

                        table.draw(); // Redraw the table to apply the changes
                    },
                    error: function() {
                        Swal.fire(
                            'Error!',
                            'Failed to update the booking status.',
                            'error'
                        );
                    }
                });
            } else {
                // Revert the dropdown to the original value if the user cancels
                const originalStatus = $(this).data('original-status');
                $(this).val(originalStatus);
            }
        });
    });
});
$(document).on('change', '.update-booking-date', function () {
    const bookingId = $(this).data('id');
    const bookingDate = $(this).val();

    $.ajax({
        url: `/admin/bookings/${bookingId}/update-date`,
        type: 'POST',
        data: {
            booking_date: bookingDate,
            _token: '{{ csrf_token() }}'
        },
        success: function (response) {
            if (response.success) {
                alert('Booking date updated successfully.');
                $('#bookingsTable').DataTable().ajax.reload(null, false); // Reload DataTable without resetting pagination
            }
        },
        error: function (xhr) {
            alert('Error updating booking date.');
        }
    });

});

// Handle Delete Button Click
$(document).on('click', '.deletebooking', function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            let bookingId = $(this).data('id'); // Get the listing ID from the button
            let deleteUrl = `/admin/bookings/delete/${bookingId}`;
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
                                response.success || 'The booking was deleted successfully.',
                                'success'
                            );
                            $('#bookings-table').DataTable().ajax.reload(); // Reload DataTable
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

// Send Email
        $(document).on('click', '.send-email', function() {
    const bookingId = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: "Send an email notification to the user?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'Yes, send it!',
        cancelButtonText: 'Cancel',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/admin/bookings/${bookingId}/send-email`,
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire(
                        'Sent!',
                        response.success || 'The email notification has been sent successfully.',
                        'success'
                    );
                },
                error: function(xhr) {
                    Swal.fire(
                        'Error!',
                        'Failed to send the email notification. Please try again.',
                        'error'
                    );
                }
            });
        }
    });
});

</script>
@endsection

