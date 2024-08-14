<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Logement extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'titre',
        'description',
        'chambre',
        'piece',
        'etage',
        'loyer',
        'adresse',
        'statut',
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
