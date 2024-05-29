<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AnneeScollaire;
use Illuminate\Http\Request;

class BulletinController extends Controller
{
    public function index(){
        $annees=AnneeScollaire::all();
        return view("layouts.backend.admin.bulletin.index",[
            'annees'=>$annees,
        ]);
    }
}
