<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingDocument extends Model
{
    use HasFactory;
    protected $table = 'training_documents';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'title', 
        'document',
    ];
}
