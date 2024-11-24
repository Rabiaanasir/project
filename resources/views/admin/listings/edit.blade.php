<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <h5 class="modal-title" id="exampleModalLabel">Update Listing</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form id="listingFormEdit" class="form-horizontal" method="POST" action="{{ route('listings.update', $listing->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.listings.inputs')
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </form>
        </div>
    </div>
</div>
</div>
