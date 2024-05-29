<?php

namespace App\Http\Controllers\Backend;

use App\Models\Cours;
use App\Models\Classe;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class EvaluationControlleur extends Controller
{
    //
    public function index(){
        $classes=Classe::all();
        $cours=Cours::join('classes','classes.id','=','cours.cours_classe_id')
        ->join('responsable_ecoles', 'responsable_ecoles.id', '=', 'classes.classe_responsable_id')
        ->join('ecoles as tablecole', 'tablecole.id', '=', 'responsable_ecoles.responsable_ecole_id')
        ->join('enseignants','cours.id','=','enseignants.enseignant_cours_id')
        ->where("enseignants.enseignant_users_id", Auth::user()->id)
        ->select('cours.id as coursid','classes.nomClasse','cours.nom_cours')
        ->get();
        $evaluations=Evaluation::join('cours as courtable','courtable.id','=','evaluations.evaluation_cours_id')
        ->join('classes','classes.id','=','courtable.cours_classe_id')
        ->join('enseignants','courtable.id','=','enseignants.enseignant_cours_id')
        ->where("enseignants.enseignant_users_id", Auth::user()->id)
        ->get();
        return view("layouts.backend.admin.evaluation.add",[
            'evaluations'=>$evaluations,
            'classes'=>$classes,
            'cours'=>$cours,
        ]);
    }
    public function store(Request $request){
        $rules = [
            'dateevaluation' => ['required'],
            'cours' => ['required'],
        ];
     
        $messages = [
            'max'=>'Votre description est trop longue',
            'dateevaluation.required' => 'Veuillez remplir ce champ date',
            'cours.required' => 'Veuillez remplir ce champ cours',
            'unique'=>'Ce mail déja utilise'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
     
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
        $data = $request->all();

        $evaluation=new Evaluation();
        $evaluation->evaluation_cours_id=$data['cours'];
        $evaluation->date_evaluation=$data['dateevaluation'];
     
        $evaluation_save = $evaluation->save();
     
        if(!$evaluation_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
