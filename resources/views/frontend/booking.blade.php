{{-- @extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.about_css')
@endsection
 @section('content')

<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
    </div>

    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
    </div>

    <div>
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" required>
    </div>

    <div>
        <label for="backup_power">Backup Power:</label>
        <input type="checkbox" name="backup_power" id="backup_power" value="1">
    </div>

    <div id="backup_hour_field" style="display: none;">
        <label for="backup_hour">Backup Hours:</label>
        <input type="number" name="backup_hour" id="backup_hour" min="1">
    </div>

    <div>
        <label for="consumption_watts">Consumption (Watts):</label>
        <input type="number" name="consumption_watts" id="consumption_watts" required>
    </div>

    <button type="submit">Submit Booking</button>
</form>

@endsection
@section('js')

<script>
    const backupPowerCheckbox = document.getElementById('backup_power');
    const backupHourField = document.getElementById('backup_hour_field');

    backupPowerCheckbox.addEventListener('change', function() {
        backupHourField.style.display = this.checked ? 'block' : 'none';
    });
</script>
    @endsection --}}

    @extends('frontend.app')

@section('css')
@include('css.common_css')
@include('css.about_css')
@endsection

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Booking Form</h2>
     <!-- Display success message -->
     @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>
 @endif

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="card p-4">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="backup_power">Backup Power:</label>
                <input type="checkbox" name="backup_power" id="backup_power" value="1">
            </div>

            <div id="backup_hour_field" class="form-group mt-3" style="display: none;">
                <label for="backup_hour">Backup Hours:</label>
                <input type="number" name="backup_hour" id="backup_hour" class="form-control" min="1">
            </div>

            <div class="form-group mt-3">
                <label for="consumption_watts">Consumption (Watts):</label>
                <input type="number" name="consumption_watts" id="consumption_watts" class="form-control" required>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit Booking</button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('js')

<script>
    const backupPowerCheckbox = document.getElementById('backup_power');
    const backupHourField = document.getElementById('backup_hour_field');

    backupPowerCheckbox.addEventListener('change', function() {
        backupHourField.style.display = this.checked ? 'block' : 'none';
    });
</script>

<script>
    setTimeout(function() {
        $('.alert').alert('close');
    }, 5000); // 5000ms = 5 seconds
</script>
@endsection
