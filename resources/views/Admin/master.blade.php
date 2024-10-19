<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
            <div class="modal fade edit_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
            </div>
            {{-- @include('dashboard.includes.footer') --}}
        </div>
    </div>
    @include('admin.css.dashboard_js')
    <script>
        $(document).ready(function() {
            // Function for handling click on '.btn-modal' elements
            $(document).on('click', '.btn-modal', function(e) {
                // alert()
                e.preventDefault();
                var container_modal = $(this).data('container_modal');
                // console.log(container_modal)
                $.ajax({
                    url: $(this).data('href'),
                    dataType: 'html',
                    success: function(result) {
                        // console.log(result)
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
    <script>
    $(document).on('click', '.modal_edit', function(e) {
        e.preventDefault();

        var container_edit = $(this).data('container_edit');
console.log(container_edit)
        $.ajax({
            url: $(this).data('href'),
            dataType: 'html',
            success: function(result) {
                $(container_edit)
                    .html(result)
                    .modal('show');

                // Initialize select2 inside the modal
                $(container_edit).find('.select2').each(function() {
                    $(this).select2({
                        width: '100%'
                    });
                });

            },
            error: function(xhr, status, error) {
                toastr.error('AJAX Error:', error);
            }
        });

    });
    </script>
    @yield('script')
</body>

</html>
