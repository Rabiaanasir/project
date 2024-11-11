<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'city',
        'address',
    ];
}
