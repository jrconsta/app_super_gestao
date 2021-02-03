<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request){
        
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        // mensagens de erro na validação
        $feedback = [
            'usuario.email' => 'O campo usuário deve ser um email !',
            'senha.required' => 'O campo senha é obrigatório !'
        ];

        $request->validate($regras, $feedback);

        print_r($request->all());
    }
}
