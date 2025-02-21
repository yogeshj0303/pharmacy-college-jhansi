<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'course_name',
        'mode',
        'duration',
        'seats',
        'entrance_test',
        'description',
        'eligibility',
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function faculties()
    {
        return $this->hasMany(Faculty::class, 'course_id');
    }
}
