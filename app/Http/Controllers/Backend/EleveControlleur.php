<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AnneeScollaire;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EleveControlleur extends Controller
{
    //
    public function index(){
        $classes=Classe::all();
        $anneescolaire=AnneeScollaire::latest()->limit(1)->get();
        $eleves=Eleve::join('users','users.id','=','eleves.eleve_users_id')
        ->join('parents','parents.parent_users_id','=','users.id')
        ->join('classes','classes.id','=','eleves.eleve_classe_id')
        ->join('annee_scollaires','annee_scollaires.id','=','eleves.eleve_annee_id')
        ->get();
        return view("layouts.backend.admin.eleve.add",[
            'eleves'=>$eleves,
            'classes'=>$classes,
            'anneescolaire'=>$anneescolaire,
        ]);
    }
    public function store(Request $request){
        $rules = [
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'emailparent' => ['required', 'string', 'email', 'max:255', 'unique:users'],
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
     
        $usereleve = new User();
        $usereleve->name=$data['nom'];
        $usereleve->role_id=3;
        $usereleve->prenom=$data['prenom'];
        $usereleve->telephone=$data['tel'];
        $usereleve->sexe=$data['sexe'];
        $usereleve->adresse=$data['adresse'];
        $usereleve->email=$data['email'];
        $usereleve->date_naiss=$data['date'];

        $usereleve_save = $usereleve->save();

        $userparent = new User();
        $userparent->name=$data['nom'];
        $userparent->role_id=4;
        $userparent->prenom=$data['prenom'];
        $userparent->telephone=$data['tel'];
        $userparent->sexe=$data['sexe'];
        $userparent->adresse=$data['adresse'];
        $userparent->email=$data['email'];
        $userparent->date_naiss=$data['date'];

        $userparent_save = $userparent->save();

        $parent=new Parents();
        $parent->parent_users_id=$userparent->id;

        $parent_save = $parent->save();

        $eleve=new Eleve();
        $eleve->eleve_users_id=$usereleve->id;
        $eleve->eleve_parent_id=$userparent->id;
        $eleve->eleve_classe_id=$data['classe'];
        $eleve->eleve_annee_id=$data['annee'];

        $eleve_save = $eleve->save();
     
        if(!$eleve_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
