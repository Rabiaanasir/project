<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <h5 class="modal-title" id="exampleModalLabel">Add Listing</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form id="listingForm" name="listingForm" class="form-horizontal" method="POST" action="{{ route('listings.update', $listing->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.listings.inputs')
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </form>
        </div>
    </div>
</div>
</div>
<script>
    function uploadPreview(input) {
        const preview = document.getElementById('image-preview');
        preview.innerHTML = '';

        for (const file of input.files) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100px';
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }

    }
</script>
