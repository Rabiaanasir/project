<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <h5 class="modal-title" id="exampleModalLabel">Add Listing</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form id="listingForm" name="listingForm" class="form-horizontal" enctype="multipart/form-data"  action="{{ route('listings.store') }}">
                    @include('admin.listings.inputs');

                    <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                </form>
        </div>
    </div>
</div>
</div>

