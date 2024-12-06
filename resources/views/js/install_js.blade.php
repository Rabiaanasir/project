<script>
const wattages = {
  tubeLight: 40,
  energySavers: 25,
  ledBulbs: 7,
  fans: 100,
  tvs: 250,
  ledTVs32: 50,
  washingMachines: 800,
  freezers: 350,
  refrigerators: 350,
  waterPumps: 700,
  iron: 1000,
  microwaveOven: 1200,
  ac1ton: 1800,
  ac1_5ton: 2400,
  ac2ton: 3000,
  ac3_5ton: 7500,
  ac4ton: 8000,
  i_ac1ton: 1000,
  i_ac1_5ton: 1500,
  i_ac2ton: 2000,
};

function updateQuantity(appliance, change) {
  const quantityInput = document.getElementById(appliance);
  let currentValue = parseInt(quantityInput.value);

  const newValue = currentValue + change;

  if (newValue >= 0) {
    quantityInput.value = newValue;
    calculateTotal();
  }
}

function calculateTotal() {
  let totalWatts = 0;

  for (const appliance in wattages) {
    const quantity = parseInt(document.getElementById(appliance).value) || 0;
    totalWatts += quantity * wattages[appliance];
  }

  document.getElementById("totalWatts").innerText = totalWatts + " Watts";
}

</script>
