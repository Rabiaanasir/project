<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
    
            'user',
            'email',
            'booking_date',
            'status',
            'booking_code',
        ];
    
}
