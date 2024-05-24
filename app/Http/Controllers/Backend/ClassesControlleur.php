<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\ResponsableEcole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ClassesControlleur extends Controller
{
    //
    public function index(){
        $responsables=ResponsableEcole::join('users','users.id','=','responsable_ecoles.responsable_users_id')
        ->join('ecoles as tablecole','tablecole.id','=','responsable_ecoles.responsable_ecole_id')
        ->select('users.name as username','responsable_ecoles.id as responsableid')
        ->where("tablecole.directeur_id",Auth::user()->id)
        ->get();
        $classes=Classe::join('responsable_ecoles','responsable_ecoles.id','=','classes.classe_responsable_id')
        ->join('users','users.id','=','responsable_ecoles.responsable_users_id')
        ->join('ecoles as tablecole','tablecole.id','=','responsable_ecoles.responsable_ecole_id')
        ->where("tablecole.directeur_id",Auth::user()->id)
        ->select('classes.id as classeid','classes.nomClasse','users.name','users.telephone')
        ->get();
        return view("layouts.backend.admin.classe.add",[
            'classes'=>$classes,
            'responsables'=>$responsables,
        ]);
    }
    public function store(Request $request){
        $rules = [
            'nomclasse' => ['required'],
            'responsable' => ['required']
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
     
        $classe = new Classe();
        $classe->nomClasse=$data['nomclasse'];
        $classe->classe_responsable_id=$data['responsable'];
        $classe_save = $classe->save();
     
        if(!$classe_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
