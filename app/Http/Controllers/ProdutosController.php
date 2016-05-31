<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
    	$produtos = Produto::where('fabricante_id',1)->get();
    	return view('produtos.index',['produtos' => $produtos]);
    }
}
