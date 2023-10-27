<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    use HasFactory;
    protected $table = 'specialite';

    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'cat_spec_art');
    }
}
