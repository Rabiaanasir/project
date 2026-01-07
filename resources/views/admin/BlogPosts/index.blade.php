@extends('Admin.master')

@section('content')

    <h3 class="i-name">Blog Posts</h3>
    <button type="button" class="btn btn-success btn-modal"
            data-href="{{ route('posts.create') }}" data-container_modal=".view_modal">
        <i class="fa fa-plus"></i>
        Add New Post
    </button>

    <div class="board">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered" id="posts">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
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
        var table = $('#posts').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('posts.index') }}",
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
                    data: 'image',
                    name: 'image',

                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        // //$(document).on('submit', '#postsForm', function (e) {
        //     e.preventDefault();
        //     var formData = new FormData(this);
        //     $.ajax({
        //         url: "{{ route('posts.store') }}",
        //         type: "POST",
        //         data: formData,
        //         contentType: false,
        //         processData: false,
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         success: function (response) {
        //             $('#postsForm').trigger("reset");
        //             toastr.success('Post added successfully!');
        //             $('.view_modal').modal('hide');
        //             table.ajax.reload();
        //         },
        //         error: function (error) {
        //             console.error('Error:', error);
        //             toastr.error('Error occurred while storing project. Please try again.');
        //         }
        //     });
        // // });
        $(document).on('submit', '#postsForm', function(e) {
    e.preventDefault();
    let form = this;

    $.ajax({
        url: "{{ route('posts.store') }}",
        method: "POST",
        data: new FormData(form),
        processData: false,
        contentType: false,
        beforeSend: function() {
            $(form).find('span.error-text').text('');
        },
        success: function(data) {
            if (data.status == 400) {
                // show errors under inputs
                $.each(data.errors, function(prefix, val) {
                    $(form).find('span.' + prefix + '_error').text(val[0]);
                });
            } else {
                toastr.success(data.message);
                $('#postsForm').trigger("reset");
                $('.view_modal').modal('hide');
                $('#posts').DataTable().ajax.reload();
            }
        },
        error: function(xhr) {
            toastr.error('Unexpected error. Please try again.');
        }
    });
});


//         $(document).on('submit', '#postsFormEdit', function (e) {
//     e.preventDefault();

//     var formData = new FormData(this);

//     $.ajax({
//         url: $(this).attr('action'),
//         method: $(this).attr('method'),
//         data: formData,
//         contentType: false,
//         processData: false,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
//         },
//         success: function (response) {
//             console.log(response)
//             toastr.success('Post updated successfully!');
//             $('.edit_modal').modal('hide');

//             $('#posts').DataTable().ajax.reload();
//         },
//         error: function (xhr, status, error) {
//             console.error('Error:', error);
//             toastr.error('Failed to update the post.');
//         }
//     });
// });
$(document).on('submit', '#postsFormEdit', function(e) {
    e.preventDefault();
    let form = this;

    $.ajax({
        url: $(form).attr('action'),
        method: $(form).attr('method'),
        data: new FormData(form),
        processData: false,
        contentType: false,
        beforeSend: function() {
            $(form).find('span.error-text').text('');
        },
        success: function(data) {
            if (data.status == 400) {
                // Show validation errors
                $.each(data.errors, function(prefix, val) {
                    $(form).find('span.' + prefix + '_error').text(val[0]);
                });
            } else {
                toastr.success(data.message);
                $('.edit_modal').modal('hide');
                $('#posts').DataTable().ajax.reload(null, false);
            }
        },
        error: function(xhr) {
            toastr.error('Unexpected error occurred.');
        }
    });
});

        $(document).on('click', '.deleteposts', function (e) {
            e.preventDefault();
            let postId = $(this).data('id');
            let deleteUrl = `/admin/posts/delete/${postId}`;
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
                                response.success || 'The post was deleted successfully.',
                                'success'
                            );
                            table.ajax.reload();
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
