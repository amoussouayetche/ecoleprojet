<?php

namespace App\Models;

use GuzzleHttp\Psr7\Message;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

class Enseignant extends Model
{
    use HasFactory;
    public function coursEnseigne(){
        return $this->hasMany(Cours::class);
    }
    public function classEnsign(){
        return $this->hasMany(Classe::class);
    }
    public function notificatRecu(){
        return $this->hasMany(Notification::class);
    }
    public function listMessage(){
        return $this->hasMany(Message::class);
    }
}
