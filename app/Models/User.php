<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'User';

    public function categories()
    {
        return $this->belongsToMany(categorie::class, 'cat_spec_art')->withPivot('categorie_id');
    }

    public function specilaites()
    {
        return $this->belongsToMany(specialite::class, 'cat_spec_art')->withPivot('specialite_id');
    }

    public function commentaires()
    {
        return $this->hasMany(commentaire::class);
    }

    public function departements()
    {
        return $this->belongsToMany(departement::class, 'dep_ville_art')->withPivot('departement_id');
    }

    public function villes()
    {
        return $this->belongsToMany(ville::class, 'dep_ville_art')->withPivot('ville_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
