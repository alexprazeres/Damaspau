<?php

namespace App\Http\Controllers;

use App\Models\Coordenador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AcessoController extends Controller
{
    //
    public function realizarLogin(Request $request)
    {
        $request->validate([
            'cpf' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('cpf', 'password');        
        if (Auth::check()) {
            return response()->json(['message' => "Usuário já autenticado."], 201);     
        }
        $user = User::where(['cpf'=>$credentials['cpf']])->where(["password"=>md5($credentials['password'])])->first();        
        if ($user){               
     
            $us = Auth::loginUsingId($user->id,$remember = true);
            
            $token = Str::random(60);
            $user->api_token = hash('sha256', $token);
            $user->save();
                        
            return response()->json(['message' => "Acesso realizado com sucesso.","token"=>$token], 201);
        }else{            
            return response()->json(['message' => "Dados de acesso inválidos."], 401); 
        }
    }

    public function create()
    {
      return User::create([
        'nome' => "Alex",
        'cpf' => "55555",
        'password' => Hash::make("1234"),
        "system_unit_id"=>1,
        "gerente_id"=>1,
      ]);
    }
}
