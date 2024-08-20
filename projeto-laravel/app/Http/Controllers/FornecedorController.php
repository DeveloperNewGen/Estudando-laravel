<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
 public function index(){
    $fornecedores = [

      0 =>[
        'nome'=>'fornecedores 1 ',
        'status' => 'N',
        'CNPJ' => '0',
        'ddd' => '11',
        'telefone' => '00000-00000'
      ],

     1 =>[
        'nome'=>'fornecedores 2 ',
        'status' => 'N',
        'CNPJ' => null,
        'ddd' => '85',
        'telefone' => '00000-00000'
     ],

     2 =>[
        'nome'=>'fornecedores 1 ',
        'status' => 'N',
        'CNPJ' => null,
        'ddd' => '32',
        'telefone' => '00000-00000'
     ]
    ];

    return view ('app.fornecedor.index',compact('fornecedores'));
 }
}
