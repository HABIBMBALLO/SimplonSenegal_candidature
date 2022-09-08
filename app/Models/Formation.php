<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = ['titreformation','description','cible','duree','typeformation'];

    public function appelCandidatures () {
        return $this->belongTo(appelCandidatures::class);
    }
}
