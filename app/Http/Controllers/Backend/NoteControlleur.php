<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Eleve;
use App\Models\Evaluation;
use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class NoteControlleur extends Controller
{
    //
    public function index(){
        $evaluations=Evaluation::join('classes','classes.id','=','evaluations.evaluation_classe_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
        ->select('evaluations.id as evaluationid','cours.nom_cours','classes.nomClasse')
        ->get();
        $eleves=Eleve::join('users','eleves.eleve_users_id','=','users.id')
        ->select('eleves.id as elevesid','users.name')
        ->get();
        $notes=Notes::join('evaluations','evaluations.id','=','notes.notes_evaluation_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
        ->join('eleves as elvetable','elvetable.id','=','notes.notes_eleves_id')
        ->join('users','elvetable.eleve_users_id','=','users.id')
        ->select('notes.id as notesid','cours.nom_cours','users.name','notes.note')
        ->get();
        return view("layouts.backend.admin.note.add",[
            'notes'=>$notes,
            'evaluations'=>$evaluations,
            'eleves'=>$eleves,
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
