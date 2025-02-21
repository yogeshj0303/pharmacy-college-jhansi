<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';

    protected $fillable = [
        'owner_id',
        'first_name',
        'last_name',
        'contact_no',
        'email',
        'qualification',
        'experience',
        'applied_for',
        'specialization',
        'resume',
    ];

}