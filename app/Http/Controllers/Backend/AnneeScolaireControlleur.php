<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AnneeScollaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AnneeScolaireControlleur extends Controller
{
    //
    public function index(){
        $annee_scolaires=AnneeScollaire::all();
        return view("layouts.backend.admin.annee.add",[
            'annee_scolaires'=>$annee_scolaires,
        ]);
    }
    public function store(Request $request){
        $rules = [
            'annee' => ['required']
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
     
        $annee = new AnneeScollaire();
        $annee->annee_scollaire=$data['annee'];

        $annee_save = $annee->save();
     
        if(!$annee_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
