<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sun Source Solutions</title>
    @include('Admin.css.dashboard_css')
    @yield('css')
</head>

<body class="sb-nav-fixed">
    @include('Admin.header')
    <div id="layoutSidenav">
        @include('Admin.sidebar')
        <div id="layoutSidenav_content">
            @yield('content')
            <div class="modal fade view_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
            </div>
            {{-- @include('dashboard.includes.footer') --}}
        </div>
    </div>
    @include('admin.css.dashboard_js')
    <script>
        $(document).ready(function() {
            // Function for handling click on '.btn-modal' elements
            $(document).on('click', '.btn-modal', function(e) {
                e.preventDefault();
                var container_modal = $(this).data('container_modal');
                $.ajax({
                    url: $(this).data('href'),
                    dataType: 'html',
                    success: function(result) {
                        $(container_modal).html(result).modal('show');
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Failed to load modal content');
                        // Optionally, display an error message to the user
                    }
                });
            });
        });
    </script>
    @yield('script')
</body>

</html>
