@extends('Admin.master')
@section('css')
    {{-- Include your CSS here if needed --}}
@endsection

@section('content')

    <h3 class="i-name">Projects</h3>
    <button type="button" class="btn btn-success btn-modal"
            data-href="{{ route('projects.create') }}" data-container_modal=".view_modal">
        <i class="fa fa-plus"></i>
        Add New Project
    </button>

    <div class="board">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered" id="projects">
                <thead>
                    <tr>
                        <th>Title</th>
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
        // Initialize DataTable
        var table = $('#projects').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('projects.index') }}",
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

        // Handle Add Project Form Submission
        $(document).on('submit', '#projectsForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('projects.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                },
                success: function (response) {
                    $('#projectsForm').trigger("reset"); // Reset form
                    toastr.success('Project added successfully!'); // Success toast
                    $('.view_modal').modal('hide'); // Close modal
                    table.ajax.reload(); // Reload DataTable
                },
                error: function (error) {
                    console.error('Error:', error);
                    toastr.error('Error occurred while storing project. Please try again.');
                }
            });
        });

        // Handle Edit Form Submission
        $(document).on('submit', '#projectsFormEdit', function (e) {
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
            toastr.success('Project updated successfully!');
            $('.edit_modal').modal('hide'); // Close the modal

            $('#projects').DataTable().ajax.reload(); // Reload DataTable
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            toastr.error('Failed to update the project.');
        }
    });
});

        // Handle Delete Button Click
        $(document).on('click', '.deleteprojects', function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            let projectId = $(this).data('id'); // Get the listing ID from the button
            let deleteUrl = `/admin/projects/delete/${projectId}`;
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
                                response.success || 'The project was deleted successfully.',
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
