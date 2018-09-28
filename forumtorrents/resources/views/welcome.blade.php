<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio Forum</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Menu Forum Torrents
                    </a>
                </li>
                <li>
                    <a href="/login">Logar</a>
                </li>
                <li>
                    <a href="/register">Cadastro</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


    </div>
    <header class="bg-primary text-white">
        <div class="container text-center">
          <h1>Bem-Vindo ao forum Torrents</h1>
          <nav class="navbar navbar-light bg-primary">
            <p class="navbar-brand"></p>
        <form action="{{ url('/busca') }}" method="post">
          
            {{ csrf_field() }}
            <table>
                <td><input type="text" class="form-control" name="nome" placeholder="Pesquisa por nome..." required="required"></td>
                <td><button class="btn btn-info" type="submit">Pesquisar</button></td>
            </table>
            
              
        </form>
            
          </nav>
          <p class="lead">Feito para fazer publicações de links Torrents</p>
          <div id="page-content-wrapper">
            <div class="container-fluid">

                <a href="#menu-toggle" class="btn btn-outline-dark" id="menu-toggle">Abrir Menu</a>
            </div>
        </div>
        </div>
      </header>
  
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Aqui lista -->
                  <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th id="center">Link</th>            
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($conteudo as $conteudo)
                                    <tr>
                                        <td title="Nome">{{$conteudo->nome}}</td>
                                        <td title="Descrição">{{$conteudo->descricao}}</td>
                                        <td title="Quantidade" id="center">
                                            <a class="btn btn-success" href="{{$conteudo->link}}">Baixar Torrent</a>
                                            </td>           
                                    </tr>
                                    @empty

                                      <td>Conteudo não Encontrado!!!</td>

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
              <!-- Aqui Lista -->
            </div>
          </div>
        </div>
      </section>
  
  
      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">OpenSource &copy; ForumTorrents 2018</p>
        </div>
        <!-- /.container -->
      </footer>
  
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
      <!-- Custom JavaScript for this theme -->
      <script src="js/scrolling-nav.js"></script>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>



