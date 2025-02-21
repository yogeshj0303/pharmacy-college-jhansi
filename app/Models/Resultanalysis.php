<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultanalysis extends Model
{
    use HasFactory;
    protected $table = 'result_analysis';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'title', 
        'document',
    ];
}
