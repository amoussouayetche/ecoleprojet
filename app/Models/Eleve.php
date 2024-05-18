<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    public function ClassActuel(){
        return $this->belongsTo(Classe::class);
    }
    public function listNote(){
        return $this->hasMany(Notes::class);
    }
    public function listAbsen(){
        return $this->hasMany(Absence::class);
    }
    public function listBulle(){
        return $this->hasMany(Bulletin::class);
    }
    public function listEvaluat(){
        return $this->belongsToMany(Evaluation::class);
    }
}
