<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','cni','dateNaissance','lieuNaissance','niveauEtude'];

    public function appelCandidatures() {
        return $this->hasMany(AppelCandidature::class);
    }
}
