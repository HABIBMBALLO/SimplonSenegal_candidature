<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppelCandidature_Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id',
        'appelcandidature_id'
    ];
}
