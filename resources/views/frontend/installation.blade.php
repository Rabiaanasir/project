@extends('frontend.app')

@section('css')
@include('css.common_css')

<!-- Inline CSS for custom tweaks -->
<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 30px;
    background-color: #f8f9fa;
  }
  h1 {
    margin-bottom: 30px;
  }
  .custom-appliance-row input {
    flex: 1;
  }
  .btn-add, .btn-remove {
    white-space: nowrap;
  }
  #total-wattage {
    margin-top: 15px;
    font-weight: bold;
    color: #495057;
  }
</style>
@endsection

@section('content')

<div class="container">
  <h1 class="text-center">Select Appliances for Solar Panel System</h1>

  <form id="appliance-form" action="/submit-appliances" method="POST">
    <!-- Appliance List -->
    <div class="appliance-list mb-4">
      <h3>Select Appliances</h3>

      <div class="row gy-3">
        @foreach ([
          ['Fan', 'fan_watt', 'Fan'],
          ['Television', 'television_watt', 'Television'],
          ['Refrigerator', 'refrigerator_watt', 'Refrigerator'],
          ['Air Conditioner', 'ac_watt', 'Air Conditioner'],
          ['Washing Machine', 'washing_machine_watt', 'Washing Machine']
        ] as $appliance)
        <div class="col-md-6 d-flex align-items-center">
          <input class="form-check-input me-2 appliance-checkbox" type="checkbox" value="{{ $appliance[0] }}">
          <label class="me-3">{{ $appliance[2] }}</label>
          <input type="number" class="form-control appliance-watt-input" placeholder="Enter Wattage (W)" min="1" disabled>
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

    <button type="submit" class="btn btn-success mt-3 w-100">Submit Appliances</button>
  </form>
</div>

@endsection

@section('js')
<script>
  // Attach event listeners for all appliances and watt inputs
  document.querySelectorAll('.appliance-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', toggleWattInput);
  });

  document.querySelectorAll('.appliance-watt-input').forEach(input => {
    input.addEventListener('input', calculateTotalWattage);
  });

  // Enable or disable watt input based on checkbox state
  function toggleWattInput(event) {
    const input = event.target.parentElement.querySelector('.appliance-watt-input');
    input.disabled = !event.target.checked; // Enable if checked, disable otherwise
    input.value = ''; // Clear value when unchecked
    calculateTotalWattage(); // Recalculate wattage when toggled
  }

  // Add new custom appliance row
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

    // Add event listener to new wattage input
    newRow.querySelector('.custom-watt-input').addEventListener('input', calculateTotalWattage);
  });

  // Remove custom appliance row
  function removeCustomRow(button) {
    button.parentElement.remove();
    calculateTotalWattage(); // Recalculate total wattage after removal
  }

  // Calculate total wattage
  function calculateTotalWattage() {
    let totalWattage = 0;

    // Sum wattages from enabled and checked appliance inputs
    document.querySelectorAll('.appliance-checkbox:checked').forEach(checkbox => {
      const input = checkbox.parentElement.querySelector('.appliance-watt-input');
      totalWattage += parseInt(input.value) || 0;
    });

    // Sum wattages from custom appliance inputs
    document.querySelectorAll('.custom-watt-input').forEach(input => {
      totalWattage += parseInt(input.value) || 0;
    });

    // Display the total wattage
    document.getElementById('total-wattage').textContent = `Total Wattage: ${totalWattage} W`;
  }
</script>
@include('js.install_js')
@endsection
