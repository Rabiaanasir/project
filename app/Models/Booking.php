<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{


    protected $fillable = [
        'user_id', 'username', 'address', 'phone_number', 'backup_power',
        'backup_hour', 'consumption_watts', 'booking_code', 'status', 'booking_date'
    ];

    protected static function booted()
    {
        static::creating(function ($booking) {
            $booking->booking_code = strtoupper(Str::random(8));
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'booking_date' => 'datetime',
    ];
}
