@extends('frontend.app')
@section('css')
  @include('css.common_css')
  @include('css.installation_css')
@endsection

@section('content')

<div class="calculator-container">
  <h3>Estimate your appliance energy demand to design the perfect system for your home</h3>

  <table>
    <thead>
      <tr>
        <th>Appliance</th>
        <th>Power (Watts)</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tube Light</td>
        <td>40W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('tubeLight', -1)">-</button>
            <input type="text" id="tubeLight" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('tubeLight', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Energy Savers</td>
        <td>25W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('energySavers', -1)">-</button>
            <input type="text" id="energySavers" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('energySavers', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>LED bulbs</td>
        <td>7W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('ledBulbs', -1)">-</button>
            <input type="text" id="ledBulbs" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('ledBulbs', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Fans</td>
        <td>100W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('fans', -1)">-</button>
            <input type="text" id="fans" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('fans', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>TVs</td>
        <td>250W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('tvs', -1)">-</button>
            <input type="text" id="tvs" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('tvs', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>LED TVs 32"</td>
        <td>50W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('ledTVs32', -1)">-</button>
            <input type="text" id="ledTVs32" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('ledTVs32', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Washing Machines</td>
        <td>800W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('washingMachines', -1)">-</button>
            <input type="text" id="washingMachines" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('washingMachines', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Freezers</td>
        <td>350W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('freezers', -1)">-</button>
            <input type="text" id="freezers" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('freezers', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Refrigerators</td>
        <td>350W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('refrigerators', -1)">-</button>
            <input type="text" id="refrigerators" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('refrigerators', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Water Pumps 1HP</td>
        <td>700W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('waterPumps', -1)">-</button>
            <input type="text" id="waterPumps" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('waterPumps', 1)">+</button>
          </div>
        </td>
      </tr>
      {{-- <tr>
        <td>Oven</td>
        <td>2000W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('oven', -1)">-</button>
            <input type="text" id="oven" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('oven', 1)">+</button>
          </div>
        </td>
      </tr> --}}
      <tr>
        <td>Iron</td>
        <td>1000W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('iron', -1)">-</button>
            <input type="text" id="iron" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('iron', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Microwave Oven</td>
        <td>1200W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('microwaveOven', -1)">-</button>
            <input type="text" id="microwaveOven" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('microwaveOven', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td> Split AC (1 ton)</td>
        <td>1800W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('ac1ton', -1)">-</button>
            <input type="text" id="ac1ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('ac1ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Split AC (1.5 ton)</td>
        <td>2400W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('ac1_5ton', -1)">-</button>
            <input type="text" id="ac1_5ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('ac1_5ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Split AC (2 ton)</td>
        <td>3000W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('ac2ton', -1)">-</button>
            <input type="text" id="ac2ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('ac2ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Split AC (3.5 ton)</td>
        <td>7500W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('ac3_5ton', -1)">-</button>
            <input type="text" id="ac3_5ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('ac3_5ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Split AC (4 ton)</td>
        <td>8000W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('ac4ton', -1)">-</button>
            <input type="text" id="ac4ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('ac4ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Inverter AC (1 ton)</td>
        <td>1000W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('i_ac1ton', -1)">-</button>
            <input type="text" id="i_ac1ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('i_ac1ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Inverter AC (1.5 ton)</td>
        <td>1500W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('i_ac1_5ton', -1)">-</button>
            <input type="text" id="i_ac1_5ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('i_ac1_5ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <tr>
        <td>Inverter AC (2 ton)</td>
        <td>2000W</td>
        <td>
          <div class="quantity-container">
            <button class="quantity-btn" onclick="updateQuantity('i_ac2ton', -1)">-</button>
            <input type="text" id="i_ac2ton" class="quantity-input" value="0" readonly>
            <button class="quantity-btn" onclick="updateQuantity('i_ac2ton', 1)">+</button>
          </div>
        </td>
      </tr>
      <!-- Total row -->
      <tr class="total-row">
        <td colspan="2">Total Load (in Watts)</td>
        <td id="totalWatts">0 Watts</td>
      </tr>
    </tbody>
  </table>

  <!-- Submit Button in a centered container -->
  <div class="submit-container">
    <button><a href="" class="submit-btn">Submit</a></button>
  </div>
</div>

@endsection
@section('js')
  @include('js.install_js')
@endsection
