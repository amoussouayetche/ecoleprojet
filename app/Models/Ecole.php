<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecole extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['nom','anne_creation','description','fondateur','telephone','email','url_logo'];
    protected $hidden=['id','created_at','updated_at','deleted_at',];
}
