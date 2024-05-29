<?php

namespace App\Http\Controllers\Backend;

use App\Models\Eleve;
use App\Models\Notes;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class NoteControlleur extends Controller
{
    //
    public function index(){
        $evaluations=Evaluation::join('cours as courtable','courtable.id','=','evaluations.evaluation_cours_id')
        ->join('classes','classes.id','=','courtable.cours_classe_id')
        ->join('responsable_ecoles', 'responsable_ecoles.id', '=', 'classes.classe_responsable_id')
        ->join('ecoles as tablecole', 'tablecole.id', '=', 'responsable_ecoles.responsable_ecole_id')
        ->where("responsable_ecoles.responsable_users_id", Auth::user()->id)
        ->select('evaluations.id as evaluationid','courtable.nom_cours','classes.nomClasse')
        ->get();
        $eleves=Eleve::join('users','eleves.eleve_users_id','=','users.id')
        ->join('classes','classes.id','=','eleves.eleve_classe_id')
        ->join('responsable_ecoles', 'responsable_ecoles.id', '=', 'classes.classe_responsable_id')
        ->join('ecoles as tablecole', 'tablecole.id', '=', 'responsable_ecoles.responsable_ecole_id')
        ->where("responsable_ecoles.responsable_users_id", Auth::user()->id)
        ->select('eleves.id as elevesid','users.name','classes.nomClasse')
        ->get();
        $notes=Notes::join('evaluations','evaluations.id','=','notes.notes_evaluation_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
        ->join('eleves as elvetable','elvetable.id','=','notes.notes_eleves_id')
        ->join('users','elvetable.eleve_users_id','=','users.id')
        ->join('classes','classes.id','=','elvetable.eleve_classe_id')
        ->join('responsable_ecoles', 'responsable_ecoles.id', '=', 'classes.classe_responsable_id')
        ->join('ecoles as tablecole', 'tablecole.id', '=', 'responsable_ecoles.responsable_ecole_id')
        ->where("responsable_ecoles.responsable_users_id", Auth::user()->id)
        ->select('notes.id as notesid','cours.nom_cours','users.name','notes.note')
        ->get();
        return view("layouts.backend.admin.note.add",[
            'notes'=>$notes,
            'evaluations'=>$evaluations,
            'eleves'=>$eleves,
        ]);
    }
    //vue des notes eleves
     public function show(){
        $notes=Notes::join('evaluations','evaluations.id','=','notes.notes_evaluation_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
        ->join('eleves as elvetable','elvetable.id','=','notes.notes_eleves_id')
        ->join('users','elvetable.eleve_users_id','=','users.id')
        ->where("elvetable.eleve_users_id", Auth::user()->id)
        ->select('notes.id as notesid','cours.nom_cours','users.name','notes.note')
        ->get();
        return view("layouts.backend.admin.note.show",[
            'notes'=>$notes
        ]);
    }
    //vue des notes parent
     public function showparent(){
        $notes=Notes::join('evaluations','evaluations.id','=','notes.notes_evaluation_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
        ->join('eleves as elvetable','elvetable.id','=','notes.notes_eleves_id')
        ->join('users','elvetable.eleve_users_id','=','users.id')
        ->join('parents as parenttable','elvetable.eleve_parent_id','=','parenttable.id')
        ->where("parenttable.parent_users_id", Auth::user()->id)
        ->select('notes.id as notesid','cours.nom_cours','users.name','notes.note')
        ->get();
        return view("layouts.backend.admin.note.showparent",[
            'notes'=>$notes
        ]);
    }
    public function store(Request $request){
        $rules = [
            'evaluation' => ['required'],
            'eleve' => ['required'],
            'note' => ['required'],
        ];
     
        $messages = [
            'max'=>'Votre description est trop longue',
            'required' => 'Veuillez remplir ce champ',
            'unique'=>'Ce mail déja utilise'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
     
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
        $data = $request->all();

        $note=new Notes();
        $note->notes_evaluation_id=$data['evaluation'];;
        $note->notes_eleves_id=$data['eleve'];
        $note->note=$data['note'];
     
        $note_save = $note->save();
     
        if(!$note_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
