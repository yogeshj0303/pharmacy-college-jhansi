<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerImage extends Model
{
    use HasFactory;
    protected $table = 'banners';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id', 
        'image',
    ];
}
