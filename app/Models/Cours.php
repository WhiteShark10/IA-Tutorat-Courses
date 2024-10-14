<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Cours extends Model
{
    use HasFactory;

    public function CategorieCours(){
        $this->belongsTo(CategorieCours::class);
    }

    public function Etudiant(){
        $this->belongsToMany(User::class);
    }

    public function Enseignant(){
        $this->belongsToMany(User::class);
    }

    public function Chapitre(){
        $this->hasMany(Chapitre::class);
    }
}
