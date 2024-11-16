<!DOCTYPE html>
<html>
<head>
    <title>Booking Status Update</title>
</head>
<body>
    <h1>Booking Update Notification</h1>
    <p>Dear {{ $booking->username }},</p>

    <p>We wanted to let you know that your booking has been updated:</p>

    <ul>
        <li><strong>Status:</strong> {{ ucfirst($booking->status) }}</li>
        <li><strong>Booking Code:</strong> {{ $booking->booking_code }}</li>
        <li><strong>Booking Date:</strong> {{ $booking->booking_date->format('Y-m-d') }}</li>
        <li><strong>Total Wattage:</strong> {{ $booking->consumption_watts }} watts</li>
    </ul>

    <p>If you have any questions, feel free to contact us.</p>

    <p>Thank you!</p>
</body>
</html>
