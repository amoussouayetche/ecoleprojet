<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courrier extends Model
{
    use HasFactory;
    public function expediteur(){
        return $this->belongsTo(Parents::class);
    }
    public function destinataire(){
        return $this->belongsTo(Enseignant::class);
    }
}
