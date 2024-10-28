
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="projectsFormEdit" class="form-horizontal" method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.projects.inputs');
                {{-- <input type="hidden" name="projects_id" id="projects_id" value="{{ $project->id }}">
                <div class="form-group">
                    <label for="title" class="control-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $project->title }}" required>
                </div>

                <div class="form-group">
                    <label for="image" class="control-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="uploadPreview(this);">
                </div>
                <div id="image-preview" style="margin-top: 10px;"></div> --}}

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
