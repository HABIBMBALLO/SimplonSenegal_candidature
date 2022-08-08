<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = ['titreFormation','description','cible','duree'];

    public function appelCandidatures () {
        return $this->hasMany(AppelCandidature::class);
    }
}
