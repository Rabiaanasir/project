<script>
// Define the wattage for each appliance
const wattages = {
  tubeLight: 40,            // Tube Light
  energySavers: 25,         // Energy Savers
  ledBulbs: 7,              // LED Bulbs
  fans: 100,                // Fans
  tvs: 250,                 // TVs
  ledTVs32: 50,             // LED TVs 32"
  washingMachines: 800,     // Washing Machines
  freezers: 350,            // Freezers
  refrigerators: 350,       // Refrigerators
  waterPumps: 700,          // Water Pumps
//   oven: 2000,               // Oven
  iron: 1000,               // Iron
  microwaveOven: 1200,      // Microwave Oven
  ac1ton: 1800,             // AC (1 ton)
  ac1_5ton: 2400,           // AC (1.5 ton)
  ac2ton: 3000,             // AC (2 ton)
  ac3_5ton: 7500,           // AC (1.5 ton)
  ac4ton: 8000,             // AC (2 ton)
//   other: 500,              // Other
  i_ac1ton: 1000,
  i_ac1_5ton: 1500,
  i_ac2ton: 2000,
};

function updateQuantity(appliance, change) {
  // Get the current quantity
  const quantityInput = document.getElementById(appliance);
  let currentValue = parseInt(quantityInput.value);

  // Update the quantity based on the change (+1 or -1)
  const newValue = currentValue + change;

  // Ensure the value doesn't go below 0
  if (newValue >= 0) {
    quantityInput.value = newValue;
    calculateTotal();
  }
}

function calculateTotal() {
  let totalWatts = 0;

  // Loop through each appliance and calculate the total watts
  for (const appliance in wattages) {
    const quantity = parseInt(document.getElementById(appliance).value) || 0; // Default to 0 if empty
    totalWatts += quantity * wattages[appliance];
  }

  // Update the total watts display in the table
  document.getElementById("totalWatts").innerText = totalWatts + " Watts";
}

// function submitCalculation() {
//   // This function can handle submission, such as sending data to a backend
//   alert("Calculation submitted! Total Power Consumption: " + document.getElementById("totalWatts").innerText);
// }
</script>
