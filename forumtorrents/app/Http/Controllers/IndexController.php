<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conteudo;
class IndexController extends Controller
{
    public function index(){
    	$conteudo = Conteudo::busca('null');
    	return view('welcome', compact('conteudo'));
    }
    public function busca(Request $request)
    {
        
        $conteudo = Conteudo::busca($request->nome);

        return view('welcome', compact('conteudo'));
    }

}
