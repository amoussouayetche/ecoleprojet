<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ecole;
use App\Models\ResponsableEcole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ResponsableControlleur extends Controller
{
    //
    public function index(){
        $user=User::where("id",Auth::user()->id)->first();
        $ecoles=Ecole::where("directeur_id",Auth::user()->id)->get();
        $responsableecoles=ResponsableEcole::join('users','users.id','=','responsable_ecoles.responsable_users_id')
        ->join('ecoles as tablecole','tablecole.id','=','responsable_ecoles.responsable_ecole_id')
        ->where("tablecole.directeur_id",Auth::user()->id)
        ->get();
        return view("layouts.backend.admin.responsable.add",[
            'responsableecoles'=>$responsableecoles,
            'ecoles'=>$ecoles,
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
        $user->role_id=3;
        $user->prenom=$data['prenom'];
        $user->telephone=$data['tel'];
        $user->sexe=$data['sexe'];
        $user->adresse=$data['adresse'];
        $user->email=$data['email'];
        $user->date_naiss=$data['date'];

        $user_save = $user->save();

        $ecole=new ResponsableEcole();
        $ecole->responsable_users_id=$user->id;
        $ecole->responsable_ecole_id=$data['ecole'];
        $ecole->date_embauche=$data['dateembauche'];
     
        $ecole_save = $ecole->save();
     
        if(!$ecole_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
