<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaacCategory extends Model
{
    use HasFactory;
    protected $table = 'naac_categories';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id', 
        'category_name',
    ];

    public function documents()
    {
        return $this->hasMany(NaacCategory::class);
    }
}
