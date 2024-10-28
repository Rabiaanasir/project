<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form id="projectsForm" name="projectsForm" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('projects.store') }}">
                @csrf
                    @include('admin.projects.inputs');
                    <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                </form>
        </div>
    </div>
</div>
</div>
