<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    use HasFactory;
    protected $table = 'ville';
    public function departements()
    {
        return $this->belongsTo(departement::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
