@extends('Admin.master')
@section('css')
    {{-- Include your CSS here if needed --}}
@endsection

@section('content')

<h3 class="i-name">User Table</h3>
    <div class="board">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered" id="user_table">

                <thead>

                    <tr>
                        <th>username</th>

                        <th>Email</th>
                        <th>Role</th>

                        <th>Action</th>

                    </tr>

                </thead>


            </table>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        var table = $('#user_table').DataTable({

            processing: true,

            serverSide: true,

            ajax: "{{ route('users.index') }}",

            columns: [

                //   {data: 'id', name: 'id'},

                {
                    data: 'username',
                    name: 'username'
                },

                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
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


    $(document).on('click', '.deleteusers', function (e) {
    e.preventDefault();
    let userId = $(this).data('id');
    let deleteUrl = `/admin/users/delete/${userId}`;

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
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    Swal.fire('Deleted!', response.success, 'success');
                    $('#user_table').DataTable().ajax.reload(); // Reload table data
                },
                error: function (xhr) {
                    Swal.fire('Error!', 'There was an error deleting the user.', 'error');
                }
            });
        }
    });
});
</script>

@endsection
