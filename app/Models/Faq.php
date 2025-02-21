<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'faq_question', 
        'faq_answer',
    ];
}
