<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableEcole extends Model
{
    use HasFactory;
    public function listParent(){
        return $this->hasMany(Parents::class);
    }
    public function listEnseignat(){
        return $this->hasMany(Enseignant::class);
    }
}
