<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name'];

    public function activities()
    {
        return $this->hasMany(Activity::class, 'category_id');
    }
}

