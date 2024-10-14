<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'booking_code', 'status', 'booking_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
