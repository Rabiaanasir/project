<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" >
            <h5 class="modal-title" id="exampleModalLabel">Update Package</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <form id="packagesFormEdit" class="form-horizontal" method="POST" action="{{ route('packages.update', $package->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.packages.inputs')
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </form>
        </div>
    </div>
</div>
</div>
