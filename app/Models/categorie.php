<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $table = 'categorie';

    public function specialites()
    {
        return $this->hasMany(specialite::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'cat_spec_art');
    }
}
