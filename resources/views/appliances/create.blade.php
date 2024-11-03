{{--
@extends('frontend.app')

@section('css')
@include('css.common_css')
@endsection

@section('content')
<div class="container">
  <h1 class="text-center mt-5 "style="color: #007bff;">Select Appliances for Solar Panel System</h1>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form id="appliance-form" action="{{ route('appliances.store') }}" method="POST">
    @csrf

    <!-- Appliance List -->
    <div class="appliance-list mb-4">
      <h3>Select Appliances</h3>
      <div class="row gy-3">
        @foreach ([['Fan'], ['Television'], ['Refrigerator'], ['Air Conditioner'], ['Washing Machine']] as $appliance)
          <div class="col-md-6 d-flex align-items-center">
            <input class="form-check-input me-2 appliance-checkbox" type="checkbox" value="{{ $appliance[0] }}" name="appliance[]">
            <label class="me-3">{{ $appliance[0] }}</label>
            <input type="number" class="form-control appliance-watt-input" name="{{ strtolower($appliance[0]) }}_watt"
                   placeholder="Enter Wattage (W)" min="1" disabled>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Custom Appliance Section -->
    <div id="custom-appliance-container">
      <h3>Add Custom Appliance</h3>
      <div class="custom-appliance-row d-flex mb-3">
        <input type="text" class="form-control me-2" name="custom_appliance[]" placeholder="Custom Appliance Name" required>
        <input type="number" class="form-control me-2 custom-watt-input" name="custom_wattage[]" placeholder="Enter Wattage (W)" min="1" required>
        <button type="button" class="btn btn-danger btn-remove" onclick="removeCustomRow(this)">Remove</button>
      </div>
    </div>

    <button type="button" id="add-custom-appliance-btn" class="btn btn-primary mb-3">Add Another Custom Appliance</button>

    <div id="total-wattage" class="alert alert-info">Total Wattage: 0 W</div>

    <button type="submit" class="btn btn-success mt-3 w-100 mb-5">Submit Appliances</button>
  </form>
</div>
@endsection

@section('js')
<script>
  // Enable/disable wattage input on checkbox change
  document.querySelectorAll('.appliance-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', toggleWattInput);
  });

  // Enable/disable watt input field
  function toggleWattInput(event) {
    const input = event.target.parentElement.querySelector('.appliance-watt-input');
    input.disabled = !event.target.checked;
    if (!event.target.checked) input.value = ''; // Clear value if unchecked
    calculateTotalWattage(); // Recalculate total wattage
  }

  // Add new custom appliance row dynamically
  document.getElementById('add-custom-appliance-btn').addEventListener('click', function () {
    const container = document.getElementById('custom-appliance-container');
    const newRow = document.createElement('div');
    newRow.className = 'custom-appliance-row d-flex mb-3';
    newRow.innerHTML = `
      <input type="text" class="form-control me-2" name="custom_appliance[]" placeholder="Custom Appliance Name" required>
      <input type="number" class="form-control me-2 custom-watt-input" name="custom_wattage[]" placeholder="Enter Wattage (W)" min="1" required>
      <button type="button" class="btn btn-danger btn-remove" onclick="removeCustomRow(this)">Remove</button>
    `;
    container.appendChild(newRow);

    // Add input event listener to the new custom wattage input field
    newRow.querySelector('.custom-watt-input').addEventListener('input', calculateTotalWattage);
  });

  // Remove custom appliance row
  function removeCustomRow(button) {
    button.parentElement.remove();
    calculateTotalWattage(); // Recalculate after removal
  }

  // Calculate total wattage dynamically
  function calculateTotalWattage() {
    let totalWattage = 0;

    // Calculate wattage from checked appliances
    document.querySelectorAll('.appliance-checkbox:checked').forEach(checkbox => {
      const input = checkbox.parentElement.querySelector('.appliance-watt-input');
      totalWattage += parseInt(input.value) || 0;
    });

    // Calculate wattage from custom appliances
    document.querySelectorAll('.custom-watt-input').forEach(input => {
      totalWattage += parseInt(input.value) || 0;
    });

    // Update the total wattage display
    document.getElementById('total-wattage').textContent = `Total Wattage: ${totalWattage} W`;
  }

  // Add event listeners to wattage inputs for dynamic calculation
  document.querySelectorAll('.appliance-watt-input').forEach(input => {
    input.addEventListener('input', calculateTotalWattage);
  });

  document.querySelectorAll('.custom-watt-input').forEach(input => {
    input.addEventListener('input', calculateTotalWattage);
  });
</script>
@endsection --}}


@extends('frontend.app')

@section('css')
@include('css.common_css')
@endsection

@section('content')
<div class="container">
  <h1 class="text-center mt-5" style="color: #007bff;">Select Appliances for Solar Panel System</h1>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form id="appliance-form" action="{{ route('appliances.store') }}" method="POST">
    @csrf

    <!-- Appliance List -->
    <div class="appliance-list mb-4">
      <h3>Select Appliances</h3>
      <div class="row gy-3">
        @foreach ([['Fan'], ['Television'], ['Refrigerator'], ['Air Conditioner'], ['Washing Machine']] as $appliance)
          <div class="col-md-6 d-flex align-items-center">
            <input class="form-check-input me-2 appliance-checkbox" type="checkbox" value="{{ $appliance[0] }}" name="appliance[]">
            <label class="me-3">{{ $appliance[0] }}</label>
            <input type="number" class="form-control appliance-watt-input" name="{{ strtolower($appliance[0]) }}_watt"
                   placeholder="Enter Wattage (W)" min="1" disabled>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Custom Appliance Section -->
    <div id="custom-appliance-container">
      <h3>Add Custom Appliance</h3>
      <div class="custom-appliance-row d-flex mb-3">
        <input type="text" class="form-control me-2" name="custom_appliance[]" placeholder="Custom Appliance Name" required>
        <input type="number" class="form-control me-2 custom-watt-input" name="custom_wattage[]" placeholder="Enter Wattage (W)" min="1" required>
        <button type="button" class="btn btn-danger btn-remove" onclick="removeCustomRow(this)">Remove</button>
      </div>
    </div>

    <button type="button" id="add-custom-appliance-btn" class="btn btn-primary mb-3">Add Another Custom Appliance</button>

    <div id="total-wattage" class="alert alert-info">Total Wattage: 0 W</div>

    <button type="submit" class="btn btn-success mt-3 w-100 mb-5">Calculate System Requirements</button>
  </form>
</div>
@endsection

@section('js')
<script>
  document.querySelectorAll('.appliance-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', toggleWattInput);
  });

  function toggleWattInput(event) {
    const input = event.target.parentElement.querySelector('.appliance-watt-input');
    input.disabled = !event.target.checked;
    if (!event.target.checked) input.value = '';
    calculateTotalWattage();
  }

  document.getElementById('add-custom-appliance-btn').addEventListener('click', function () {
    const container = document.getElementById('custom-appliance-container');
    const newRow = document.createElement('div');
    newRow.className = 'custom-appliance-row d-flex mb-3';
    newRow.innerHTML = `
      <input type="text" class="form-control me-2" name="custom_appliance[]" placeholder="Custom Appliance Name" required>
      <input type="number" class="form-control me-2 custom-watt-input" name="custom_wattage[]" placeholder="Enter Wattage (W)" min="1" required>
      <button type="button" class="btn btn-danger btn-remove" onclick="removeCustomRow(this)">Remove</button>
    `;
    container.appendChild(newRow);
    newRow.querySelector('.custom-watt-input').addEventListener('input', calculateTotalWattage);
  });

  function removeCustomRow(button) {
    button.parentElement.remove();
    calculateTotalWattage();
  }

  function calculateTotalWattage() {
    let totalWattage = 0;

    document.querySelectorAll('.appliance-checkbox:checked').forEach(checkbox => {
      const input = checkbox.parentElement.querySelector('.appliance-watt-input');
      totalWattage += parseInt(input.value) || 0;
    });

    document.querySelectorAll('.custom-watt-input').forEach(input => {
      totalWattage += parseInt(input.value) || 0;
    });

    document.getElementById('total-wattage').textContent = `Total Wattage: ${totalWattage} W`;
  }

  document.querySelectorAll('.appliance-watt-input').forEach(input => {
    input.addEventListener('input', calculateTotalWattage);
  });

  document.querySelectorAll('.custom-watt-input').forEach(input => {
    input.addEventListener('input', calculateTotalWattage);
  });
</script>
@endsection
