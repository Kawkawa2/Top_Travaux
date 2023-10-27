<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class views extends Model
{
    use HasFactory;
    protected $table = 'views';
    protected $fillable = [
        'viewsTrack'
    ];
}
