<?php

namespace App\Http\Controllers\Backend;

use App\Models\Courrier;
use App\Models\User;
use App\Models\Eleve;
use App\Models\Parents;
use Illuminate\Http\Request;
use App\Models\ResponsableEcole;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class MessageController extends Controller
{
    //
    public function indexResponsableMessage(){
        $parents= Eleve::join('users as eleve_user', 'eleves.eleve_users_id', '=', 'eleve_user.id')
    ->join('parents', 'eleves.eleve_parent_id', '=', 'parents.id')
    ->join('users as parent_user', 'parents.parent_users_id', '=', 'parent_user.id')
    ->join('classes', 'eleves.eleve_classe_id', '=', 'classes.id')
    ->join('ecoles as tablecole', 'eleves.eleve_ecole_id', '=', 'tablecole.id')
    ->join('responsable_ecoles', 'responsable_ecoles.id', '=', 'classes.classe_responsable_id')
    ->where("responsable_ecoles.responsable_users_id", Auth::user()->id)
    ->select(
        'eleves.id as eleve_id',
        'eleve_user.name as eleve_name',
        'eleve_user.prenom as eleve_prenom',
        'eleve_user.telephone as eleve_telephone',
        'eleve_user.email as eleve_email',
        'eleve_user.sexe as eleve_sexe',
        'parent_user.name as parent_name',
        'parent_user.prenom as parent_prenom',
        'parent_user.id as parent_users_id',
        'parent_user.telephone as parent_telephone',
        'classes.nomClasse as classe_name',
        'tablecole.nom_ecole'
    )
    ->get();
        $messages=Courrier::join('users as responsable_user', 'courriers.courriers_expéditeur_users_id', '=', 'responsable_user.id')
        ->join('users as parent_user', 'courriers.courriers_destinataire_users_id', '=', 'parent_user.id')
        ->where('courriers_expéditeur_users_id', Auth::user()->id)
        ->orWhere('courriers_destinataire_users_id', Auth::user()->id)
        ->latest()
        ->select(
            'courriers.created_at as created_at',
            'courriers.id as courrierId',
            'parent_user.name as parent_name',
            'parent_user.prenom as parent_prenom',
            'courriers.message'
        )
        ->get();
        return view("layouts.backend.admin.message.send_responsable",[
            "parents"=> $parents,
            "messages"=> $messages,
        ]);
    }
    public function storeResponsableMessage(Request $request){
        $rules = [
            'parents' => ['required'],
            'message' => ['required'],
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

        $message=new Courrier();
        $message->courriers_expéditeur_users_id=Auth::user()->id;
        $message->courriers_destinataire_users_id=$data['parents'];
        $message->message=$data['message'];
     
        $message_save = $message->save();
     
        if(!$message_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
    public function indexParentMessage(){
        $responsables= Eleve::join('users as eleve_user', 'eleves.eleve_users_id', '=', 'eleve_user.id')
    ->join('parents', 'eleves.eleve_parent_id', '=', 'parents.id')
    ->join('users as parent_user', 'parents.parent_users_id', '=', 'parent_user.id')
    ->join('classes', 'eleves.eleve_classe_id', '=', 'classes.id')
    ->join('responsable_ecoles', 'responsable_ecoles.id', '=', 'classes.classe_responsable_id')
    ->join('users as responsable_user', 'responsable_ecoles.responsable_users_id', '=', 'responsable_user.id')
    ->join('ecoles as tablecole', 'eleves.eleve_ecole_id', '=', 'tablecole.id')
    ->where("parents.parent_users_id", Auth::user()->id)
    ->select(
        'eleves.id as eleve_id',
        'eleve_user.name as eleve_name',
        'eleve_user.prenom as eleve_prenom',
        'eleve_user.telephone as eleve_telephone',
        'eleve_user.email as eleve_email',
        'eleve_user.sexe as eleve_sexe',
        'parent_user.name as parent_name',
        'parent_user.prenom as parent_prenom',
        'responsable_user.name as responsable_name',
        'responsable_user.prenom as responsable_prenom',
        'parent_user.id as parent_users_id',
        'parent_user.telephone as parent_telephone',
        'classes.nomClasse as classe_name',
        'tablecole.nom_ecole',
        'responsable_user.id as responsable_id',
    )
    ->get();
        $messages=Courrier::join('users as responsable_user', 'courriers.courriers_expéditeur_users_id', '=', 'responsable_user.id')
        ->join('users as parent_user', 'courriers.courriers_destinataire_users_id', '=', 'parent_user.id')
        ->where('courriers_expéditeur_users_id', Auth::user()->id)
        ->orWhere('courriers_destinataire_users_id', Auth::user()->id)
        ->latest()
        ->select(
            'courriers.created_at as created_at',
            'courriers.id as courrierId',
            'parent_user.name as parent_name',
            'parent_user.prenom as parent_prenom',
            'courriers.message'
        )
        ->get();
        return view("layouts.backend.admin.message.send_parent",[
            "responsables"=> $responsables,
            "messages"=> $messages,
        ]);
    }
    public function storeParentMessage(Request $request){
        $rules = [
            'responsable' => ['required'],
            'message' => ['required'],
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

        $message=new Courrier();
        $message->courriers_expéditeur_users_id=Auth::user()->id;
        $message->courriers_destinataire_users_id=$data['responsable'];
        $message->message=$data['message'];
     
        $message_save = $message->save();
     
        if(!$message_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
    public function show($id){
        $message=Courrier::join('users as responsable_user', 'courriers.courriers_expéditeur_users_id', '=', 'responsable_user.id')
        ->join('users as parent_user', 'courriers.courriers_destinataire_users_id', '=', 'parent_user.id')
        ->where('courriers.id', $id)
        ->select(
            'courriers.id as courrierId',
            'parent_user.name as parent_name',
            'parent_user.prenom as parent_prenom',
            'courriers.message'
        )
        ->first();
        //dd($message);
        return view("layouts.backend.admin.message.show_message",[
            "message"=> $message,
        ]);
    }
}
