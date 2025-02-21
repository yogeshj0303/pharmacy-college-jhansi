<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;
    protected $table = 'recruiters';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id', 
        'image',
    ];
}
