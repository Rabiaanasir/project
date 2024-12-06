
@extends('admin.master')

@section('content')

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
            ajax: "{{ route('appliances.data') }}",
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'user_name' },
                { data: 'email' },
                { data: 'total_wattage' },
                { data: 'created_at' },
                { data: 'action' },
            ],
            order: [[4, 'desc']],
        });

    });

           $(document).on('click', '.deleterequest', function (e) {
            e.preventDefault();
            let applianceId = $(this).data('id');
            let deleteUrl = `/admin/appliances/delete/${applianceId}`;

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
                                response.success || 'The request was deleted successfully.',
                                'success'
                            );
                            $('#appliance-table').DataTable().ajax.reload();
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
