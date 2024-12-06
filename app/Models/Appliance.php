<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{


    protected $fillable = ['user_id', 'total_wattage'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
