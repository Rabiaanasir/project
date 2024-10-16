<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Allow mass assignment of 'name'

    // If you want to define relationships with listings, add this:
    // public function listings()
    // {
    //     return $this->hasMany(Listing::class);
    // }
    public function listing()
    {
        return $this->hasMany(Listing::class);
    }
}
