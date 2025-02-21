<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultypdf extends Model
{
    use HasFactory;
    protected $table = 'faculty_pdfs';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'title', 
        'upload_pdf',
    ];
}
