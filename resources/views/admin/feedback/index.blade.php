
@extends('admin.master')

@section('content')
<h3 class="i-name">User Feedbacks</h3>
<div class="board">
    <div class="table-responsive">
        <table id="feedback-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>username</th>
                    <th>Email</th>
                    <th>Message</th>
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
        var table = $('#feedback-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('feedback.data') }}", // Route for fetching data
            columns: [
                { data: 'id', name: 'id' },
                { data: 'username', name: 'username' },
                { data: 'email', name: 'email' },
                { data: 'message', name: 'message' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        // Handle Delete Button Click
        $(document).on('click', '.deletefeedback', function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            let feedbackId = $(this).data('id'); // Get the feedback ID from the button
            let deleteUrl = `/admin/feedback/delete/${feedbackId}`;

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
                                response.success || 'The feedback was deleted successfully.',
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
