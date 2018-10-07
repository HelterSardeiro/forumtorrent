<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum Torrents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="row">
                    <div class="col-md-6">   
                        <br />
                        <a class="btn btn-primary" href="javascript:history.go(-1)"><= VOLTAR </a>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                       <h4 id="center"><b>Comentários</b></h4>             
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($comentarios as $comentario)
                                    <tr>
                                        <td title="Nome">{{$comentario->texto}}</td>
              
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
</body>
</html>
       
        
