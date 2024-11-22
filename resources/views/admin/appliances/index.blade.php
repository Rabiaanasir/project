
@extends('admin.master')

@section('content')

    {{-- <h1 class="text-center my-4">Appliances List</h1> --}}

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <h3 class="i-name">User Requests</h3>
    <div class="board">
    <div class="table-responsive">
        <table id="appliance-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Total Wattage (W)</th>
                    <th>Created At</th>
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
        $('#appliance-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('appliances.data') }}", // AJAX route for fetching data
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false }, // Auto index
                { data: 'user_name' }, // User name
                { data: 'email' }, // User email
                { data: 'total_wattage' }, // Total wattage
                { data: 'created_at' }, // Creation date
                { data: 'action' }, // Creation date
            ],
            order: [[4, 'desc']], // Sort by created_at descending
        });

    });

           // Handle Delete Button Click
           $(document).on('click', '.deleterequest', function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            let applianceId = $(this).data('id'); // Get the listing ID from the button
            let deleteUrl = `/admin/appliances/delete/${applianceId}`;
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
                                response.success || 'The request was deleted successfully.',
                                'success'
                            );
                            $('#appliance-table').DataTable().ajax.reload(); // Reload DataTable
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
