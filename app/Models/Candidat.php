<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','cni','dateNaissance','lieuNaissance','niveauEtude', 'user_id'];

    public function appelCandidatures() {
        return $this->hasMany(AppelCandidature::class);
    }

    // relation entre candidat et user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
