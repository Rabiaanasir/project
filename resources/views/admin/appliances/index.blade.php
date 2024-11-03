
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
            ],
            order: [[4, 'desc']], // Sort by created_at descending
        });

    });
</script>
@endsection