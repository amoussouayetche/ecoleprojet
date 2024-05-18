<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Cours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CoursControlleur extends Controller
{
    //
    public function index(){
        $classes=Classe::all();
        $cours=Cours::join('classes','classes.id','=','cours.cours_classe_id')
        ->select('cours.id as coursid','classes.nomClasse','cours.nom_cours')
        ->get();
        return view("layouts.backend.admin.cours.add",[
            'cours'=>$cours,
            'classes'=>$classes,
        ]);
    }
    public function store(Request $request){
        $rules = [
            'nomcours' => ['required'],
            'classe' => ['required']
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
     
        $cours = new Cours();
        $cours->nom_cours=$data['nomcours'];
        $cours->cours_classe_id=$data['classe'];
        $cours_save = $cours->save();
     
        if(!$cours_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
