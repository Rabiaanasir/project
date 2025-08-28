


@extends('frontend.app')

@section('css')
@include('css.common_css')
@endsection

@section('content')

<div class="container my-5">
    @if (!Auth::check())
    <div class="alert alert-warning text-center mt-3" role="alert">
        Please <a href="{{ route('login') }}" class="alert-link">log in</a> to submit your appliance selection.
    </div>
    @endif
    <h1 class="text-center mb-4">Select Appliances for Solar Panel System</h1>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('appliances.store') }}" method="POST">
        @csrf
        <div class="appliance-list mb-4">
            <h3>Select Appliances</h3>
            <div class="row gy-3">
                @foreach (['Fan', 'Television', 'Refrigerator', 'Air Conditioner', 'Washing Machine'] as $appliance)
                    <div class="col-md-6 d-flex align-items-center">
                        <input class="form-check-input me-2 appliance-checkbox"
                               type="checkbox"
                               value="{{ $appliance }}"
                               name="appliance[]"
                               {{ auth()->check() ? '' : 'disabled' }}
                               onchange="toggleWattInput(event)">
                        <label class="me-3">{{ $appliance }}</label>
                        <input type="number" class="form-control appliance-watt-input"
                               name="{{ strtolower($appliance) }}_watt"
                               placeholder="Enter Wattage (W)"
                               min="1"
                               disabled>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="custom-appliance-container">
            <h3>Add Custom Appliance</h3>
            <div class="custom-appliance-row d-flex mb-3">
                <input type="text" class="form-control me-2"
                       name="custom_appliance[]"
                       placeholder="Custom Appliance Name"
                       {{ auth()->check() ? '' : 'disabled' }}>
                <input type="number" class="form-control me-2 custom-watt-input"
                       name="custom_wattage[]"
                       placeholder="Enter Wattage (W)"
                       min="1"
                       {{ auth()->check() ? '' : 'disabled' }}>
                <button type="button" class="btn btn-danger btn-remove"
                        onclick="removeCustomRow(this)"
                        {{ auth()->check() ? '' : 'disabled' }}>Remove</button>
            </div>
        </div>

        <button type="button" id="add-custom-appliance-btn"
                class="btn btn-primary mb-3"
                onclick="addCustomRow()">Add Another Custom Appliance</button>

        <div id="total-wattage" class="alert alert-info">Total Wattage: 0 W</div>

        <!-- Submit Button -->
        @if (auth()->check())
            <button type="submit" class="btn btn-success mt-3 w-100 mb-5">Calculate System Requirements</button>
        @else
            <button type="button" class="btn btn-secondary mt-3 w-100 mb-5" disabled>
                Log in to Calculate System Requirements
            </button>
        @endif
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

  function addCustomRow() {
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
  }

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
