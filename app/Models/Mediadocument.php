<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediadocument extends Model
{
    use HasFactory;
    protected $table = 'media_newsletters';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'title', 
        'document',
    ];
}
