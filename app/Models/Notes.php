<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    public function eleveConcene(){
        return $this->belongsTo(Eleve::class);
    }
    public function notificatRecu(){
        return $this->belongsTo(Evaluation::class);
    }
}
