<?php

namespace App\Models;

use GuzzleHttp\Psr7\Message;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

class Parents extends Model
{
    use HasFactory;
    public function listEnfant(){
        return $this->hasMany(Eleve::class);
    }
    public function listNotif(){
        return $this->hasMany(Notification::class);
    }
    public function listMessage(){
        return $this->hasMany(Message::class);
    }
}
