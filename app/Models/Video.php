<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'media_videos';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'year', 
        'link',
    ];
}
