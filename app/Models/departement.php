<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;
    protected $table = 'departement';

    public function villes()
    {
        return $this->hasMany(ville::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
