@extends('Admin.master')
@section('css')

@endsection

@section('content')


    <h3 class="i-name">Dashboard</h3>
    <div class="values">
        <div class="val-box">
            <i class="fas fa-users"></i>
            <div>
                <h3>8,267</h3>
                <span>New Users</span>
            </div>
        </div>
        <div class="val-box">
            <i class="fas fa-shopping-cart"></i>
            <div>
                <h3>200,521</h3>
                <span>Total Orders</span>
            </div>
        </div>
        <div class="val-box">
            <i class="fa-light fa-acorn"></i>
            <div>
                <h3>215,542</h3>
                <span>Products Sell</span>
            </div>
        </div>
        <div class="val-box">
            <i class="fas fa-dollar-sign"></i>
            <div>
                <h3>$677.89</h3>
                <span>This Month</span>
            </div>
        </div>
    </div>

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
    </section>

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
</script>

@endsection

@endsection
