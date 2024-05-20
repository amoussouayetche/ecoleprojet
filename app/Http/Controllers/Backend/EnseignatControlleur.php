<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cours;
use App\Models\Ecole;
use App\Models\Enseignant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EnseignatControlleur extends Controller
{
    //
    public function index(){
        $ecoles=Ecole::all();
        $cours=Cours::all();
        $enseignants=Enseignant::join('users','users.id','=','enseignants.enseignant_users_id')
        ->join('ecoles','ecoles.id','=','enseignants.enseignant_ecole_id')
        ->join('cours','cours.id','=','enseignants.enseignant_cours_id')
        ->get();
        return view("layouts.backend.admin.enseignant.add",[
            'enseignants'=>$enseignants,
            'ecoles'=>$ecoles,
            'cours'=>$cours,
        ]);
    }
    public function store(Request $request){
        $rules = [
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
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
     
        $user = new User();
        $user->name=$data['nom'];
        $user->role_id=6;
        $user->prenom=$data['prenom'];
        $user->telephone=$data['tel'];
        $user->sexe=$data['sexe'];
        $user->adresse=$data['adresse'];
        $user->email=$data['email'];
        $user->date_naiss=$data['date'];

        $user_save = $user->save();

        $enseignant=new Enseignant();
        $enseignant->enseignant_users_id=$user->id;
        $enseignant->enseignant_ecole_id=$data['ecole'];
        $enseignant->enseignant_cours_id=$data['cours'];
        $enseignant->date_embauche=$data['dateembauche'];
     
        $enseignant_save = $enseignant->save();
     
        if(!$enseignant_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
