<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        
        $contato = new SiteContato();
        $motivo_contatos = MotivoContato::all();

        // Primeiro método para gravar dados no banco com formulários
        /*
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo = $request->input('motivo');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        */

        // Segundo método
        /*
        $contato->fill($request->all());
        $contato->save();
        */
        
        // Terceiro método com o create
        //$contato->create($request->all());
        //print_r($request->input('mensagem'));


        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
        
    }

    public function salvar(Request $request){

        $motivo_contatos = MotivoContato::all();
        
        $regras = [
            'nome' => 'required|min:3|max:33|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome não pode ter mais de 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',

            'email.email' => 'O email informado não é valido.',

            'required' => 'O campo :attribute deve ser preenchido!'
        ];

        $request->validate($regras, $feedback);


        // Persiste os dados no banco
        SiteContato::create($request->all());

        return redirect()->route('site.index');
        //return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
        
    }
}
