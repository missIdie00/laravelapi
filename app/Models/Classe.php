<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Classe extends Model
{
    use HasFactory;

    public $fillable=['libelle','droit_ins','mensualite','autre_frais','filiere_id'];

    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }
}
