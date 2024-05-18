<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public function listEleve(){
        return $this->hasMany(Eleve::class);
    }
    public function listEnseigan(){
        return $this->hasMany(Enseignant::class);
    }
}
