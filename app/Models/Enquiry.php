<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $table = 'enquiries'; 

    protected $fillable = [
        'owner_id',
        'name',
        'email',
        'mobile_no',
        'state',
        'city',
        'program',
        'course',
        'specialization',
        'jee_mains',
        'agree',
    ];
}
