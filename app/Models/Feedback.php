<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'feedback';

    // Define the fillable columns (attributes that can be mass assigned)
    protected $fillable = [
        'user_id',
        'username',
        'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}