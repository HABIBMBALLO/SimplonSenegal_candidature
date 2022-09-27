<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppelCandidature extends Model
{
    use HasFactory;

    protected $fillable = ['titre','description','dateDebut','dateFin','typeformation'];

    public function candidats () {
        return $this->hasMany(Candidat::class);
    }

    public function formation () {
        return $this->hasMany(Formation::class);
    }
    
}



