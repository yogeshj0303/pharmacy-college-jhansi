<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'image', 'title'];

    public function category()
    {
        return $this->belongsTo(ActivityCategory::class, 'category_id');
    }
}
