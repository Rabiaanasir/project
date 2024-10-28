<div class="form-group">
    <label for="user" class="control-label">User</label>
    <input type="text" class="form-control" value="{{ !empty($booking->user) ? $booking->user : '' }}" id="user"
        name="user" placeholder="Enter User Name" required>
</div>

<div class="form-group">
    <label for="email" class="control-label">Email</label>
    <input type="email" class="form-control" value="{{ !empty($booking->email) ? $booking->email : '' }}"
        id="email" name="email" placeholder="Enter Email" required>
</div>

<div class="form-group">
    <label for="booking_date" class="control-label">Booking Date</label>
    <input type="date" class="form-control"
        value="{{ !empty($booking->booking_date) ? $booking->booking_date : '' }}" id="booking_date" name="booking_date"
        required>
</div>
