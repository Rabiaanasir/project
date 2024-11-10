<!-- resources/views/emails/booking_updated.blade.php -->

<p>Your booking has been updated. Below are the details:</p>
<ul>
    <li>Booking ID: {{ $bookingId }}</li>
    <li>Status: {{ ucfirst($status) }}</li>
    <li>Booking Date: {{ $bookingDate }}</li>
</ul>
<p>Thank you for using our application!</p>
