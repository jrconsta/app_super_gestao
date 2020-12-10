<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'Ativo',
                'ddd' => '69'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'Ativo',
                'ddd' => '11'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'Inativo',
                'ddd' => '85'
            ]
        ];

        

        
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
    
}
