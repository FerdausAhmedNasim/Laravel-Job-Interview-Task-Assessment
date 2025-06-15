<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $table = 'main'; 

    protected $fillable = [
        'moduletitle',
        'video_type',
        'video_url',
        'video_length',
    ];
}
