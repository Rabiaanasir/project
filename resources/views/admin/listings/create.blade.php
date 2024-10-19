<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <h5 class="modal-title" id="exampleModalLabel">Add Listing</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form id="listingForm" name="listingForm" class="form-horizontal" enctype="multipart/form-data"  action="{{ route('listings.store') }}">
                    @include('admin.listings.inputs');
                    {{-- <input type="hidden" name="listing_id" id="listing_id">
                    <div class="form-group">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="brand_id" id="brand-select">
                            <option value="">Please Select Brand</option>
                            @foreach ($brands as $key => $value)
                                <option value="{{ $key }}"> {{ $value }}</option>
                            @endforeach
                        </select>
                        {{-- <label for="brand_id" class="control-label">Brand</label>
                        <input type="text" class="form-control" id="brand_id" name="brand_id" placeholder="Enter Brand ID" required> --}
                    </div>
                    <div class="form-group">
                        <label for="price" class="control-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                    </div>
                    <div class="form-group">
                        <label for="watts" class="control-label">Watts</label>
                        <input type="text" class="form-control" id="watts" name="watts" placeholder="Enter Watts" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>--}}
                    <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                </form>
        </div>
    </div>
</div>
</div>

