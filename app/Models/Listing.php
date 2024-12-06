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
        'brand_id',
        'image'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
