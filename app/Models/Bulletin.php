<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    use HasFactory;
    public function eleveConcerne(){
        return $this->belongsTo(Eleve::class);
    }
    public function listNote(){
        return $this->hasMany(Notes::class);
    }
}
