<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ecole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EcoleControlleur extends Controller
{
    //
    public function index(){
        $ecoles=Ecole::join('users','users.id','=','ecoles.directeur_id')
        ->get();
        return view("layouts.backend.admin.ecole.add",[
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
        $user->role_id=2;
        $user->prenom=$data['prenom'];
        $user->telephone=$data['tel'];
        $user->sexe=$data['sexe'];
        $user->adresse=$data['adresse'];
        $user->email=$data['email'];
        $user->date_naiss=$data['date'];

        $user_save = $user->save();

        $ecole=new Ecole();
        $ecole->directeur_id=$user->id;
        $ecole->nom_ecole=$data['nomecole'];
        $ecole->adresse_ecole=$data['adresseecole'];
        $ecole->tel_ecole=$data['teleecole'];
     
        $ecole_save = $ecole->save();
     
        if(!$ecole_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }

    public function post($id){

        $actualite=Actualite::find($id);
        $actualite->publie=1;
        $save_actualite=$actualite->save();
        if(!$save_actualite){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
    
    public function retract($id){

        $actualite=Actualite::find($id);
        $actualite->publie=0;
        $save_actualite=$actualite->save();
        if(!$save_actualite){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
    
    public function delete($id){

        $actualite=Actualite::find($id);

        if (File::exists(public_path('storage/'.$actualite->image))) {
            File::delete(public_path('storage/'.$actualite->image));
        }
               
        $save_actualite=$actualite->delete();        
       
        if(!$save_actualite){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }

        return back()->with([
            'success' => 'Suppression réussie',            
        ]);
    }

    public function edit($slug){
        $secteurs=Secteur::all();
        $actualite=Actualite::where('slug',$slug)->first();
        return view('layouts.backend.admin.actualite.edit',[
            'secteurs'=>$secteurs,
            'actualite'=>$actualite,
        ]);
    }

    public function save(Request $request,$id){
        $data = $request->all();

        $image = $request->file('image');
        if($image){
            $image=$request->file('image');
        }else{
            $image=null;
        }
     
        $actualite = Actualite::find($id);
        $actualite->titre=$data['titre'];
        $actualite->slug=$this->removeSpecialCharacters($data['titre']);
        $actualite->description=$data['description'];
     
        if ($image != null) {
            # code...
            $image_original_name=$image->getClientOriginalName();
            $image_name= time().'_'.strtotime($image_original_name);
            $image_path = 'uploads/actualite/';
            $image->move(public_path('storage/'.$image_path), $image_name);
            if (File::exists(public_path('storage/'.$actualite->image))) {
                File::delete(public_path('storage/'.$actualite->image));
            }                       
            $actualite->image = $image_path.''.$image_name;
     
        }
        $actualite_save = $actualite->save();
     
        if(!$actualite_save){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->route('actualite_create_admin')->with('success', 'Les données ont été enregistrées avec succès');
    }
}
