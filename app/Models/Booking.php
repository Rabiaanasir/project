<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'username', 'address', 'phone_number', 'backup_power',
        'backup_hour', 'consumption_watts', 'booking_code', 'status', 'booking_date'
    ];

    // Automatically generate a booking code
    protected static function booted()
    {
        static::creating(function ($booking) {
            $booking->booking_code = strtoupper(Str::random(8));
        });
    }

    // Define the relationship
    public function user()
    {
        // Assuming the foreign key in bookings table is user_id
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'booking_date' => 'datetime',
    ];
}
