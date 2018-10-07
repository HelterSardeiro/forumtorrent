<!DOCTYPE html>
<html lang="en">
                    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Conteudo Incluir</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>        
    </head>
    <body>      
        <div id="line-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center">              
                        <h1><b>Conteudo</b></h1>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="">Panel</a></li>                  
                            <li><a href="{{route('conteudo.index')}}">Conteudos</a></li>                  
                            <li class="active">Cadastro</li>
                        </ol>              
                    </div>          
                </div>
                <div class="row">  
                    <br>
                    <h4 id="center"><b>CADASTRO DOS DADOS DO CONTEUDO</b></h4>
                    <br> 
                    <form method="post"  action="{{route('conteudo.store')}}" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-row">
                                 <div class="col-md-6">
                                     <label for="nomepost">Nome da Postagem</label>
                                    <input class="form-control" id="nomepost" required="required" name="nome" type="text" aria-describedby="nameHelp" placeholder="Nome Postagem">
                                  </div>
                                  <div class="col-md-6">
                                  <label for="desc">Descrição</label>
                                    <textarea  class="form-control" required="required" name="descricao" id="desc" aria-describedby="nameHelp"></textarea>
                              </div>
                              </div>
                               </div>
                                      <div class="form-group">
                                   <label for="link">Magnet link</label>
                                 <input class="form-control" id="link" required="required" name="link" type="text" aria-describedby="nameHelp" placeholder="Magnet Link">
                                  </div>
                                    <input type="hidden" name="user" value=" {{ Auth::user()->id }}">
                                   <input type="hidden" name="admin" value="1"> 
                                         
                                    <div class="col-md-12">                   
                                    <button type="reset" class="btn btn-default">
                                        Limpar
                                    </button>
                                    <button type="submit" 
                                            class="btn btn-warning" id="black">
                                        Cadastrar
                                    </button>
                                </div>
                          </form >
                               
                </div>
            </div>
        </div>
    </body>
</html>