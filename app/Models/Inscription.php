<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Models\Etudiant;

class Inscription extends Model
{
    use HasFactory;

    protected  $guarded=[];

    public function etudiant(){
        return $this->belongsTo(Etudiant::class);
    }
}
