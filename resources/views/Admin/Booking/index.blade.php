{{--

@extends('Admin.master')

@section('css')
<!-- Add any custom CSS specific to this page if needed -->
@endsection

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Booking Management</h3>

    <div>
        <label for="booking_date">Booking Date:</label>
        <input type="date" name="booking_date" required>
    </div>

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
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // Initialize DataTable for bookings
        $('#bookings-table').DataTable({
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
                { data: 'status', name: 'status' },
                { data: 'booking_date', name: 'booking_date' },
                { data: 'booking_code', name: 'booking_code' },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <button class="btn btn-primary btn-sm modal_edit" data-href="/admin/bookings/${row.id}/edit" data-container_edit=".edit_modal">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm delete-booking" data-id="${row.id}">
                                Delete
                            </button>
                        `;
                    }
                }
            ]
        });

        // Delete button handling
        $(document).on('click', '.delete-booking', function() {
            const bookingId = $(this).data('id');
            if (confirm('Are you sure you want to delete this booking?')) {
                $.ajax({
                    url: `/admin/bookings/${bookingId}`,
                    type: 'DELETE',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#bookings-table').DataTable().ajax.reload();
                        toastr.success('Booking deleted successfully');
                    },
                    error: function() {
                        toastr.error('Failed to delete booking');
                    }
                });
            }
        });
    });
</script>
@endsection
 --}}

 @extends('Admin.master')

 @section('css')
 <!-- Add any custom CSS specific to this page if needed -->
 @endsection

 @section('content')
 <div class="container mt-5">
    <h3 class="mb-4">Booking Management</h3>

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
@endsection
@section('script')
<script>
// $(document).ready(function() {
//     var table = $('#bookings-table').DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: '{{ route('admin.bookings.data') }}',
//         columns: [
//             { data: 'id', name: 'id' },
//             { data: 'username', name: 'username' },
//             { data: 'address', name: 'address' },
//             { data: 'phone_number', name: 'phone_number' },
//             { data: 'user_email', name: 'user.email' },
//             { data: 'backup_power', name: 'backup_power', render: function(data) { return data ? 'Yes' : 'No'; } },
//             { data: 'backup_hour', name: 'backup_hour' },
//             { data: 'consumption_watts', name: 'consumption_watts' },
//             { data: 'status', name: 'status' },
//             { data: 'booking_date', name: 'booking_date', render: function(data, type, row) {
//                 return `<input type="date" class="form-control booking_date" data-id="${row.id}" value="${data ? data : ''}" />`;
//             }},
//             { data: 'booking_code', name: 'booking_code' },
//             {
//                 data: 'actions',
//                 name: 'actions',
//                 orderable: false,
//                 searchable: false,
//                 render: function(data, type, row) {
//                     return `
//                         <button class="btn btn-primary btn-sm update-booking-date" data-id="${row.id}">
//                             Save Date
//                         </button>
//                     `;
//                 }
//             }
//         ]
//     });

//     // Handling the "Save Date" button click
//     $(document).on('click', '.update-booking-date', function() {
//         const bookingId = $(this).data('id');
//         const bookingDate = $(this).closest('tr').find('.booking_date').val();

//         if (!bookingDate) {
//             alert("Please select a booking date.");
//             return;
//         }

//         $.ajax({
//             url: `/admin/bookings/${bookingId}/update-booking-date`,
//             method: 'POST',
//             data: {
//                 _token: $('meta[name="csrf-token"]').attr('content'),
//                 booking_date: bookingDate
//             },
//             success: function(response) {
//                 toastr.success('Booking date updated successfully');
//                 table.ajax.reload();  // Reload the table data after update
//             },
//             error: function() {
//                 toastr.error('Failed to update booking date');
//             }
//         });
//     });
// });
// $(document).ready(function() {
//     var table = $('#bookings-table').DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: '{{ route('admin.bookings.data') }}',
//         columns: [
//             { data: 'id', name: 'id' },
//             { data: 'username', name: 'username' },
//             { data: 'address', name: 'address' },
//             { data: 'phone_number', name: 'phone_number' },
//             { data: 'user_email', name: 'user.email' },
//             { data: 'backup_power', name: 'backup_power', render: function(data) { return data ? 'Yes' : 'No'; } },
//             { data: 'backup_hour', name: 'backup_hour' },
//             { data: 'consumption_watts', name: 'consumption_watts' },
//             { data: 'status', name: 'status', render: function(data, type, row) {
//                 return `
//                     <select class="form-control status-dropdown" data-id="${row.id}">
//                         <option value="pending" ${data === 'pending' ? 'selected' : ''}>Pending</option>
//                         <option value="accepted" ${data === 'accepted' ? 'selected' : ''}>Accepted</option>
//                         <option value="declined" ${data === 'declined' ? 'selected' : ''}>Declined</option>
//                     </select>
//                 `;
//             }},
//             { data: 'booking_date', name: 'booking_date' },
//             { data: 'booking_code', name: 'booking_code' },
//             {
//                 data: 'actions',
//                 name: 'actions',
//                 orderable: false,
//                 searchable: false,
//                 render: function(data, type, row) {
//                     return `
//                         <button class="btn btn-sm btn-primary update-status" data-id="${row.id}">
//                             Update Status
//                         </button>
//                     `;
//                 }
//             }
//         ]
//     });

//     // Handle the status change in the dropdown
//     $(document).on('change', '.status-dropdown', function() {
//         const bookingId = $(this).data('id');
//         const newStatus = $(this).val();

//         // Show confirmation using SweetAlert
//         Swal.fire({
//             title: 'Are you sure?',
//             text: `Do you want to change the status to "${newStatus.charAt(0).toUpperCase() + newStatus.slice(1)}"?`,
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonText: 'Yes, change it!',
//             cancelButtonText: 'No, keep it',
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 // Send the AJAX request to update the status
//                 $.ajax({
//                     url: `/admin/bookings/${bookingId}/update-status`,
//                     method: 'POST',
//                     data: {
//                         _token: $('meta[name="csrf-token"]').attr('content'),
//                         status: newStatus
//                     },
//                     success: function(response) {
//                         Swal.fire(
//                             'Updated!',
//                             'The booking status has been updated.',
//                             'success'
//                         );
//                         table.ajax.reload();  // Reload the DataTable to reflect the changes
//                     },
//                     error: function() {
//                         Swal.fire(
//                             'Error!',
//                             'Failed to update the booking status.',
//                             'error'
//                         );
//                     }
//                 });
//             } else {
//                 // Revert the dropdown to the original value if the user cancels
//                 const originalStatus = $(this).data('original-status');
//                 $(this).val(originalStatus);
//             }
//         });
//     });
// });
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
                render: function(data, type, row) {
                    return `
                        <button class="btn btn-sm btn-primary update-status" data-id="${row.id}">
                            Update Status
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


</script>
@endsection
