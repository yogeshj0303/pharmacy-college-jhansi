<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacedStudent extends Model
{
    use HasFactory;
    protected $table = 'placed_students';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id', 
        'image',
        'year',
    ];
}
