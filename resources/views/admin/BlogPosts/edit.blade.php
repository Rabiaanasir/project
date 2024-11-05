
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="postsFormEdit" class="form-horizontal" method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.BlogPosts.inputs');

                <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
</div>

<script>
    function uploadPreview(input) {
        const preview = document.getElementById('image-preview');
        preview.innerHTML = ''; // Clear previous previews

        for (const file of input.files) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100px';
                img.style.marginRight = '10px'; // Add some spacing
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    }
</script>
