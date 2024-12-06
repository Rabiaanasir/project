@extends('Admin.master')

@section('css')
@endsection

@section('content')

{{-- Modal for Adding Brands --}}
<div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="addBrandModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBrandModalLabel">Add Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addBrandForm" method="POST" action="{{ route('brands.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="brandName">Brand Name</label>
                        <input type="text" class="form-control" id="brandName" name="name" placeholder="Enter brand name" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add Brand</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal for Editing Brands --}}
<div class="modal fade" id="editBrandModal" tabindex="-1" aria-labelledby="editBrandModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBrandModalLabel">Edit Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editBrandForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="editBrandName">Brand Name</label>
                        <input type="text" class="form-control" id="editBrandName" name="name" placeholder="Enter brand name" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Brand</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Brands
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addBrandModal">
                            <i class="fa fa-plus"></i> Add Brand
                        </button>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="brandsTable" class="table table-bordered">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    {{-- <td>{{ $brand->id }}</td> --}}
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning editBrandBtn" data-id="{{ $brand->id }}" data-name="{{ $brand->name }}">Edit</button>
                                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
$(document).ready(function () {
    $('#brandsTable').DataTable();

    $('.editBrandBtn').on('click', function () {
        var id = $(this).data('id');
        var name = $(this).data('name');

        $('#editBrandForm').attr('action', '/admin/brands/update/' + id);
        $('#editBrandName').val(name);

        $('#editBrandModal').modal('show');
    });

    $('#editBrandForm').on('submit', function (e) {
        e.preventDefault();

        var formData = $(this).serialize();
        console.log($(this).attr('action'));
        $.ajax({
            url: $(this).attr('action'),
            method: 'PUT',
            data: formData,
            success: function (response) {
                $('#editBrandModal').modal('hide');
                window.location.reload();
                toastr.success('Brand updated successfully!');

            },
            error: function (xhr) {
                toastr.error('Failed to update brand.');
            }
        });
    });
});


    </script>
@endsection






