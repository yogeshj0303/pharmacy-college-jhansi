<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    use HasFactory;
    protected $table = 'notice_boards';

    // Specify the fillable columns
    protected $fillable = [
        'owner_id',
        'category',
        'title',
        'upload_pdf',
    ];
}
