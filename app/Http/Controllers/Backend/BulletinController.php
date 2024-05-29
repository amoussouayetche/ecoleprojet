<?php

namespace App\Http\Controllers\Backend;

use App\Models\Notes;
use Illuminate\Http\Request;
use App\Models\AnneeScollaire;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BulletinController extends Controller
{
    public function index(){
        $annees=AnneeScollaire::latest()->limit(10)->get();
        $notes=Notes::join('evaluations','evaluations.id','=','notes.notes_evaluation_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
        ->join('eleves as elvetable','elvetable.id','=','notes.notes_eleves_id')
        ->join('users','elvetable.eleve_users_id','=','users.id')
        ->where("elvetable.eleve_users_id", Auth::user()->id)
        ->select('notes.id as notesid','cours.nom_cours','users.name','notes.note')
        ->get();
        return view("layouts.backend.admin.bulletin.index",[
            'notes'=>$notes,
            'annees'=>$annees,
        ]);
    }
     public function indexParent(){
        $annees=AnneeScollaire::latest()->limit(10)->get();
        $notes=Notes::join('evaluations','evaluations.id','=','notes.notes_evaluation_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
        ->join('eleves as elvetable','elvetable.id','=','notes.notes_eleves_id')
        ->join('users','elvetable.eleve_users_id','=','users.id')
        ->join('parents as parenttable','elvetable.eleve_parent_id','=','parenttable.id')
        ->where("parenttable.parent_users_id", Auth::user()->id)
        ->select('notes.id as notesid','cours.nom_cours','users.name','notes.note')
        ->get();
        return view("layouts.backend.admin.bulletin.index_parent",[
            'notes'=>$notes,
            'annees'=>$annees,
        ]);
    }
}
