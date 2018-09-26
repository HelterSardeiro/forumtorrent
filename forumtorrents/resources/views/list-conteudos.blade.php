 @extends('layouts.app')

        @section('content')
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}

            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>
        @endif
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Conteudos</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('conteudo.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                        <div id="pesquisa" class="pull-right">
                            <form class="form-group" method="post" 
                                  action="{{ url('/busca') }}">   
                                  {{ csrf_field() }}                                
                                <input type="text" name="nome" 
                                       class="form-control input-sm pull-left" 
                                       placeholder="Pesquisar na pagina principal..." required> 
                                <button class="btn btn-default btn-sm pull-right" 
                                        id="color"> 
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>
                    </div>           
                </div>
                <div class="row">
                    <div class="col-md-12">   
                        <br />
                        <h4 id="center"><b>CONTEUDOS CADASTRADOS ({{$total}})</b></h4>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th id="center">Código</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th id="center">Link</th>
                                        <th id="center">Ações</th>              
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($conteudos as $conteudo)
                                    <?php 
                                    if(Auth::user()->id == $conteudo->user){

                                    
                                    ?>
                                    <tr>
                                        <td id="center">{{$conteudo->id}}</td>
                                        <td title="Nome">{{$conteudo->nome}}</td>
                                        <td title="Descrição">{{$conteudo->descricao}}</td>
                                        <td title="Quantidade" id="center">{{$conteudo->link}}</td>
                            
                                         <td id="center">
                                            <a class='btn btn-info' href="{{route('conteudo.edit', $conteudo->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar">Editar</a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('conteudo.destroy', $conteudo->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button class='btn btn-danger' type="submit">
                                                    Excluir                                                    
                                                </button></form></td>              
                                    </tr>
                                    <?php }?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
         @endsection
