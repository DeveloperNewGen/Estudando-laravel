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
        'CNPJ' => '00'
      ],

     1 =>[
        'nome'=>'fornecedores 1 ',
        'status' => 'N',
     ]
    ];

    echo isset($fornecedores[0]['CNPJ']) ? 'CNPJ informado' : 'CNPJ não informado';
    return view ('app.fornecedor.index',compact('fornecedores'));
 }
}
