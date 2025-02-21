<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;
    protected $table = 'discipline_pdfs';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'title', 
        'document',
    ];
}
