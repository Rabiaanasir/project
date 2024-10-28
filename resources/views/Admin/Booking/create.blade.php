<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Booking</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="bookingForm" class="form-horizontal" method="POST" action="{{ route('bookings.store') }}"
                enctype="multipart/form-data">

                @include('admin.booking.inputs');
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
