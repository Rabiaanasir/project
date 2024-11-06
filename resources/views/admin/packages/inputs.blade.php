<input type="hidden" name="packages_id" id="packages_id">
<div class="form-group">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" value="{{!empty($package->title) ? $package->title : ''}}" id="title" name="title" placeholder="Enter Title" required>
</div>

<div class="form-group">
    <label for="description" class="control-label">Description</label>
    <textarea class="form-control"
              id="description" name="description" required>{{ !empty($package->description) ? $package->description : '' }}</textarea>
</div>

<div class="form-group">
    <label for="inverter" class="control-label">Inverter</label>
    <input type="text" class="form-control" value="{{!empty($package->inverter) ? $package->inverter : ''}}" id="inverter" name="inverter" placeholder="Enter Inverter Size" required>
</div>
<div class="form-group">
    <label for="plates" class="control-label">Solar plates</label>
    <input type="text" class="form-control" value="{{!empty($package->plates) ? $package->plates : ''}}" id="plates" name="plates" placeholder="Enter Solar Plate Size" required>
</div>
<div class="form-group">
    <label for="battery" class="control-label">Battery</label>
    <input type="text" class="form-control" value="{{!empty($package->battery) ? $package->battery : ''}}" id="battery" name="battery" placeholder="Enter Battery Size" required>
</div>

<div class="form-group">
    <label for="price" class="control-label">Price</label>
    <input type="text" class="form-control" value="{{!empty($package->price) ? $package->price : ''}}" id="price" name="price" placeholder="Enter Price" required>
</div>

