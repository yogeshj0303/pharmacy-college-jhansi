<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionPdf extends Model
{
    use HasFactory;
    protected $table = 'admission_pdfs';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'title', 
        'document',
    ];
}
