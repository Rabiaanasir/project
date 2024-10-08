@extends('Admin.master')
@section('css')
@endsection

@section('content')

<div class="container mt-5">
    <div class="board">
        <div class="table-responsive">
    <h2>Listings</h2>
    <table class="table table-bordered table-stripped" id="listing-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Brand_id</th>
                <th>Price</th>
                <th>Watts</th>
                <th>description</th>
                <th>image</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
        </div>
    </div>
</div>

<!-- Bootstrap Modal for Viewing Details -->
<div class="modal fade" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Modal Header -->
        <div class="modal-header">
            <h5 class="modal-title" id="listingModalLabel">Listing Details</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <!-- Modal Body -->
        <div class="modal-body">
            <p><strong>Brand Name:</strong> <span id="brand_name"></span></p>
            <p><strong>Price:</strong> $<span id="price"></span></p>
            <p><strong>Watts:</strong> <span id="watts"></span> W</p>
            <p><strong>Description:</strong></p>
            <p id="description"></p>
        </div>
      <!-- Modal Footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Include Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(function () {
    // CSRF Token setup for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Initialize DataTable
    var table = $('#listing-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('listings.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'brand_name', name: 'brand_name'},
            {data: 'price', name: 'price'},
            {data: 'watts', name: 'watts'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    // Handle click event on 'View' button
    $('body').on('click', '.view-btn', function () {
        var id = $(this).data('id');

        // AJAX request to fetch and display the listing details
        $.get("{{ url('listings') }}" + '/' + id, function (data) {
            $('#listingModalLabel').text('Listing Details');
            $('#brand_name').text(data.brand_name);
            $('#price').text(data.price);
            $('#watts').text(data.watts);
            $('#description').text(data.description ? data.description : 'N/A');
            $('#listingModal').modal('show');
        });
    });
  });
</script>

@endsection
