<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PasswordControlleur extends Controller
{
    //
    public function generateRandomPassword($length = 12) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomPassword = '';
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomPassword;
    }
    
    
    public function index(){
        $generatedPassword = $this->generateRandomPassword();
        $users=User::all();
        return view("layouts.backend.admin.password.add",[
            'users'=>$users,
            'generatedPassword'=>$generatedPassword,
        ]);
    }
    public function store(Request $request){
        $rules = [
            'userdid' => ['required'],
            'pwd' => ['required'],
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

        $user=User::find($data['userdid']);
        $user->password=$data['pwd'];;
     
        $user_save = $user->save();
     
        if(!$user_save ){
            return redirect()->back()->with('fail', 'Les données n\'ont pas été enregistrées avec succès');
     
        }
     
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès');
    }
}
