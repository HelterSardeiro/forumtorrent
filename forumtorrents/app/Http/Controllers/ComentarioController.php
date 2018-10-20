<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comentario;
use App\Conteudo;
class ComentarioController extends Controller
{
    public function index(){
    	$comentarios = Comentario::all();
    	return view('comentarios', compact('comentarios'));
    }
    public function store(Request $request){
		$conteudo = Conteudo::busca('null');
    	$comentario = new Comentario;
    	$comentario -> texto = $request->texto;
    	$comentario -> conteudo_id = $request->conteudo_id;
		$comentario->save();
		return view('welcome', compact('comentario',"conteudo"));
    }

    public function show($id){
    	//
    }
    public function edit($id){
        $conteudo = Comentario::findOrFail($id);
        return view('alter-conteudo', compact('conteudo'));
    }
    public function update (Request $request, $id){
    	$comentario = Comentario::findOrFail($id);
    	$comentario -> texto = $request->texto;
    	$comentario -> conteudo_id = $request->conteudo_id;
    	$conteudo->save();
    	return redirect()->route('conteudo.index')->with('message','conteudo alterado!');
    }
    public function destroy($id){
    	$comentario = Comentario::findOrFail($id);
    	$comentario->delete();
    	return redirect()->route('conteudo.index')->with('message','conteudo excluido!');
    }
}
