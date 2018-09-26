<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Conteudo;
class ConteudoController extends Controller
{
    public function index(){
    	$conteudos = Conteudo::all();
    	$total = Conteudo::all()->count();
    	return view('list-conteudos', compact('conteudos', 'total'));
    }
    public function create(){
    	return view('include-conteudos');
    }
    public function store(Request $request){
    	$conteudo = new Conteudo;
    	$conteudo -> nome = $request->nome;
    	$conteudo -> descricao = $request->descricao;
    	$conteudo -> link = $request->link;
    	$conteudo -> user = $request->user;
    	$conteudo -> admin = $request->admin;
    	$conteudo->save();
    	return redirect()->route('conteudo.index')->with('message','conteudo criado!');
    }

    public function show($id){
    	//
    }
    public function edit($id){
        $conteudo = Conteudo::findOrFail($id);
        return view('alter-conteudo', compact('conteudo'));
    }
    public function update (Request $request, $id){
    	$conteudo = Conteudo::findOrFail($id);
    	$conteudo -> nome = $request->nome;
    	$conteudo -> descricao = $request->descricao;
    	$conteudo -> link = $request->link;
    	$conteudo -> user = $request->user;
    	$conteudo -> admin = $request->admin;
    	$conteudo->save();
    	return redirect()->route('conteudo.index')->with('message','conteudo alterado!');
    }
    public function destroy($id){
    	$conteudo = Conteudo::findOrFail($id);
    	$conteudo->delete();
    	return redirect()->route('conteudo.index')->with('message','conteudo excluido!');
    }
}
