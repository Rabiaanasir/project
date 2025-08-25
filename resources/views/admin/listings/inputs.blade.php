<input type="hidden" name="listing_id" id="listing_id">
<div class="form-group">
    <label for="title" class="control-label">Title</label>
    <input type="text" class="form-control" value="{{!empty($listing->title) ? $listing->title : ''}}" id="title" name="title" placeholder="Enter Title" required>
</div>
<div class="form-group">
    <label for="brand-select" class="control-label">Brand</label>
    <select class="form-control" name="brand_id" id="brand-select" required>
        <option value="" disabled {{ empty($listing->brand_id) ? 'selected' : '' }}>Please Select Brand</option>
        @foreach ($brands as $key => $value)
            <option value="{{ $key }}"
                {{ !empty($listing->brand_id) && $listing->brand_id == $key ? 'selected' : '' }}>
                {{ $value }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="price" class="control-label">Price</label>
    <input type="text" class="form-control" value="{{!empty($listing->price) ? $listing->price : ''}}" id="price" name="price" placeholder="Enter Price" required>
</div>
<div class="form-group">
    <label for="watts" class="control-label">Watts</label>
    <input type="text" class="form-control" value="{{!empty($listing->watts) ? $listing->watts : ''}}" id="watts" name="watts" placeholder="Enter Watts" required>
</div>
<div class="form-group">
    <label for="description" class="control-label">Description</label>
    <textarea class="form-control"
              id="description" name="description" required>{{ !empty($listing->description) ? $listing->description : '' }}</textarea>
</div>
<div class="form-group">
    <label for="image" class="control-label">Image</label>
    <input type="file" class="form-control" id="image" name="image" {{ empty($listing->image) ? 'required' : '' }}>

    @if (!empty($listing->image))
        <!-- <small>Current Image: {{ $listing->image }}</small> -->
         <small>Current Image:</small><br>
<img src="{{ asset('storage/images/' . $listing->image) }}" alt="Current Image" width="150">
    @endif
</div>

