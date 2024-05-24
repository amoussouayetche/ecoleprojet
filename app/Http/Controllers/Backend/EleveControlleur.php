<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Ecole;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Parents;
use Illuminate\Http\Request;
use App\Models\AnneeScollaire;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EleveControlleur extends Controller
{
    //
    public function index(){
        $ecoles=Ecole::where("directeur_id",Auth::user()->id)->get();
        $classes=Classe::join('responsable_ecoles', 'responsable_ecoles.id', '=', 'classes.classe_responsable_id')
        ->join('ecoles as tablecole', 'tablecole.id', '=', 'responsable_ecoles.responsable_ecole_id')
        ->where("tablecole.directeur_id", Auth::user()->id)
        ->select('classes.id as classeid', 'classes.nomClasse')
        ->get();;
        $anneescolaire=AnneeScollaire::latest()->limit(1)->get();
        $eleves= Eleve::join('users as eleve_user', 'eleves.eleve_users_id', '=', 'eleve_user.id')
    ->join('parents', 'eleves.eleve_parent_id', '=', 'parents.id')
    ->join('users as parent_user', 'parents.parent_users_id', '=', 'parent_user.id')
    ->join('classes', 'eleves.eleve_classe_id', '=', 'classes.id')
    ->join('annee_scollaires', 'eleves.eleve_annee_id', '=', 'annee_scollaires.id')
    ->join('ecoles as tablecole', 'eleves.eleve_ecole_id', '=', 'tablecole.id')
    ->where("tablecole.directeur_id", Auth::user()->id)
    ->select(
        'eleves.id as eleve_id',
        'eleve_user.name as eleve_name',
        'eleve_user.prenom as eleve_prenom',
        'eleve_user.telephone as eleve_telephone',
        'eleve_user.email as eleve_email',
        'eleve_user.sexe as eleve_sexe',
        'parent_user.name as parent_name',
        'parent_user.telephone as parent_telephone',
        'classes.nomClasse as classe_name',
        'annee_scollaires.annee_scollaire as annee_year',
        'tablecole.nom_ecole'
    )
    ->get();
        return view("layouts.backend.admin.eleve.add",[
            'eleves'=>$eleves,
            'classes'=>$classes,
            'ecoles'=>$ecoles,
            'anneescolaire'=>$anneescolaire,
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
     
        $usereleve = new User();
        $usereleve->name=$data['nom'];
        $usereleve->role_id=4;
        $usereleve->prenom=$data['prenom'];
        $usereleve->telephone=$data['tel'];
        $usereleve->sexe=$data['sexe'];
        $usereleve->adresse=$data['adresse'];
        $usereleve->email=$data['email'];
        $usereleve->date_naiss=$data['date'];

        $usereleve_save = $usereleve->save();

        $userparent = new User();
        $userparent->name=$data['nomparent'];
        $userparent->role_id=5;
        $userparent->prenom=$data['prenomparent'];
        $userparent->telephone=$data['telparent'];
        $userparent->sexe=$data['sexeparent'];
        $userparent->adresse=$data['adresseparent'];
        $userparent->email=$data['emailparent'];
        $userparent->date_naiss=$data['dateparent'];

        $userparent_save = $userparent->save();

        $parent=new Parents();
        $parent->parent_users_id=$userparent->id;

        $parent_save = $parent->save();

        $eleve=new Eleve();
        $eleve->eleve_users_id=$usereleve->id;
        $eleve->eleve_parent_id=$parent->id;
        $eleve->eleve_classe_id=$data['classe'];
        $eleve->eleve_annee_id=$data['annee'];
        $eleve->eleve_ecole_id=$data['ecole'];

        $eleve_save = $eleve->save();
     
        if(!$eleve_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
