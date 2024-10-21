
    <div class="form-group">
        <label for="user" class="control-label">User</label>
        <input type="text" class="form-control" value="{{ !empty($booking->user) ? $booking->user : '' }}" id="user" name="user" placeholder="Enter User Name" required>
    </div>

    <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input type="email" class="form-control" value="{{ !empty($booking->email) ? $booking->email : '' }}" id="email" name="email" placeholder="Enter Email" required>
    </div>

    <div class="form-group">
        <label for="booking_date" class="control-label">Booking Date</label>
        <input type="date" class="form-control" value="{{ !empty($booking->booking_date) ? $booking->booking_date : '' }}" id="booking_date" name="booking_date" required>
    </div>

    <div class="form-group">
        <label for="status" class="control-label">Status</label>
        <select class="form-control" name="status" id="status" required>
            <option value="pending" {{ !empty($booking->status) && $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="confirmed" {{ !empty($booking->status) && $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="completed" {{ !empty($booking->status) && $booking->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="canceled" {{ !empty($booking->status) && $booking->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select>
    </div>

    <div class="form-group">
        <label for="booking_code" class="control-label">Booking Code</label>
        <input type="text" class="form-control" value="{{ !empty($booking->booking_code) ? $booking->booking_code : '' }}" id="booking_code" name="booking_code" placeholder="Enter Booking Code" required>
    </div>


