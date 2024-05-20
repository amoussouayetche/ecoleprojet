<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EvaluationControlleur extends Controller
{
    //
    public function index(){
        $classes=Classe::all();
        $cours=Cours::all();
        $evaluations=Evaluation::join('classes','classes.id','=','evaluations.evaluation_classe_id')
        ->join('cours','cours.id','=','evaluations.evaluation_cours_id')
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
            'classe' => ['required'],
            'cours' => ['required'],
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

        $evaluation=new Evaluation();
        $evaluation->evaluation_cours_id=$data['cours'];;
        $evaluation->evaluation_classe_id=$data['classe'];
        $evaluation->date_evaluation=$data['dateevaluation'];
     
        $evaluation_save = $evaluation->save();
     
        if(!$evaluation_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
