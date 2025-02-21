<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaacReport extends Model
{
    use HasFactory;

    protected $table = 'naac_reports';

    protected $fillable = [
        'owner_id', 
        'category_id', 
        'title', 
        'document'
    ];



    public function category()
    {
        return $this->belongsTo(NaacCategory::class);
    }

   
}
