 @extends('Admin.master')

@section('css')
@endsection
@section('content')
    <div class="container">
        <h2>Contact Requests</h2>
        <table id="contacts" class="table table-bordered">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#contacts').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('contact.index') }}",
            columns: [
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'email', name: 'email' },
                { data: 'contact_number', name: 'contact_number' },
                { data: 'city', name: 'city' },
                { data: 'address', name: 'address' },
                { data: 'action', name: 'action', orderable: false }
            ]
        });
    });
// Handle Delete Button Click
$(document).on('click', '.deleteContact', function (e) {
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
                success: function (response) {
                    Swal.fire('Deleted!', response.success, 'success');
                    $('#contacts').DataTable().ajax.reload();
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


</script>
@endsection

