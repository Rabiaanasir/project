<?php
// app/Mail/BookingUpdated.php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingUpdated extends Mailable
{
    use SerializesModels;

    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->view('emails.booking_updated')
                    ->with([
                        'bookingId' => $this->booking->id,
                        'status' => $this->booking->status,
                        'bookingDate' => $this->booking->booking_date ? $this->booking->booking_date->format('Y-m-d') : 'N/A',
                    ]);
    }
}
