<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'watts',
        'brand_id',    // Use brand_id as a foreign key
        'image'        // Include image for mass assignment
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
