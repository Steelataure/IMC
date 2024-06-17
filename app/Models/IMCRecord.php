<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMCRecord extends Model
{
    use HasFactory;

    // Définir la table associée au modèle
    protected $table = 'IMC_Records';

    // Définir les colonnes autorisées pour le remplissage en masse
    protected $fillable = [
        'user',
        'weight_kg',
        'height_cm',
        'IMC_value'
    ];
}
