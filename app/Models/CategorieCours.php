<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieCours extends Model
{
    use HasFactory;

    public function Cours(){
        $this->hasMany(Cours::class);
    }

}
