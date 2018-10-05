<!--[Copyright-Derechos de Autor]
-
-   
-	Autor de la Aplicacion: Michael Serrato
-
-	Titulo: Proyecto Sistema de Comentarios AJAX con PHP utilizando la Estructura HTML5 y Bootstrap para el Diseño de la Aplicacion Web. 
-	Año: 2013
-	Sitio Web: http://www.foroexpertows.host22.com/
-	Twitter: @ForoExpertoWS
-	o Tambien Siguenos en: https://www.twitter.com/ForoExpertoWS
-	Facebook: https://www.facebook.com/ForoExperto
-	correo: programador-experto97@hotmail.com
-
-->
<!Doctype html>
<html lang="es">
<head>
	<title>Pagina de comentários</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/icon" href="http://www.foroexpertows.host22.com/images/foroexperto.ico">

	<meta name="description" content="Proyecto Sistema de Comentarios AJAX con PHP utilizando la Estructura HTML5 y Bootstrap para el Diseño de la Aplicacion Web. | Cursos de Programación Basica y Avanzada. Conviertete en un Programador Experto y se mejor que ningun Otro!!!.">
	<!--LIBRERIAS DE Bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/css/docs.css">
	
	<!--LIBRERIA DE JQuery 1.8.2 -->
	<script src="jquery-1.8.2.min.js"></script>
	<script>
		$(document).on('ready', function(){

			$('#submit').click(function(event){

				event.preventDefault();

			    // Almacenar los Valores de los campos en Variables
				var nombre = $('input#nombre').val();
				var asunto = $('input#asunto').val();
				var fecha = $('input#fecha').val();
				var comentario = $('textarea#comentario').val();

				/* PEQUEÑA VALIDACION CON JQUERY */
				if(nombre !='' && comentario !=''){

					$.post('comentarios.php',
						{ nombre : nombre, asunto : asunto, fecha : fecha, comentario : comentario },
						function(data){
							$('#todosComentarios').prepend(data);
						});
						alert('Comentario Enviado!');

				}else{

					// Si no se cumple la Condicion Ejecutará este Alert.
					alert('Por favor llena todos los Campos!');

				}

			});


		});
	</script>
<!-- Algunos Estilos CSS necesarios -->
<style type="text/css">

.margin-auto{
	margin-right: auto;
	margin-left: auto;
	display: block;
}
.content-wrapper{
	word-wrap: break-word;
	text-align: left;
}
.img{
	float: right;
	width: 64px;
}

</style>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav">
					<li><a href="http://ninjacode.tv/"  class="brand" title="Todos los Miercoles 8:30pm - M&eacute;xico" alt="NinjaCodeTv"> NinjaCodeTv </a></li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Contenidos</a></li>
					<li><a href="#">Noticias</a></li>
					<li><a href="#footer">Contacto</a></li>
					<li><a href="info.php"><i class="icon-info-sign"></i> info</a></li>
				</ul>
			</div>
		</div>
	</div>
		<header id="overview" class="subhead jumbotron">
			<div class="container">
				<h1>Sistema de Comentarios AJAX</h1>
			</div>
		</header>
		<div class="container container-fluid">
			<div class="row-fluid">
				<span class="span12">
					<span class="span3 well">
						<ul class="nav nav-pills nav-stacked">
							<h3>Contenidos</h3>
							<li><a href="#"> Inicio </a>
							<li class="active"><a href="#"> Noticias </a>
							<li><a href="http://www.google.com.mx/" target="_blank"> Ir a Google </a></li>
						</ul>
					</span>
					<span class="span9 well">
						<section>
							<article>
								<h2>Millones de indocumentados en EEUU aguardan una oportunidad para legalizar sus permanencias</h2>
									<p>RICHMOND, Indiana - Numerosos inmigrantes sin papeles dicen que la confusión y la incertidumbre en torno a las reformas a las leyes de inmigración que se están analizando les causan estrés y ansiedad a millones de familias que viven en Estados Unidos.

"Falta información. Nadie sabe exactamente qué van a hacer (el Congreso o la Casa Blanca)", declaró Pamela Hancock, coordinadora de los servicios para las familias del Centro Latino Amigos de Richmond.

La Casa Blanca se vio obligada a responder recientemente a preguntas relacionadas con un proyecto de ley que fue filtrado a la prensa y la propuesta generó críticas de un pequeño grupo bipartidista de senadores que trabajan en un plan para resolver la situación de unos 11 millones de inmigrantes ilegales que se cree hay en Estados Unidos.</p>
							</article>
						</section>
						<br>
						<br>
						<h3> Comentar </h3>
						<div class="container container-fluid margin-auto">
  							<div class="row-fluid">
  								<div class="span8 well">	
									<form action="#" method="post">
							<?php
								// Creo la Variable Fecha con el valor de Date [fecha/hora/zona] en formato 'r'.
								$fecha= date('r');
							?>
										Nombre: <input type="text" id="nombre" class="input-xxlarge" name="nombre"><br>
										Asunto: <input type="text" id="asunto" class="input-xxlarge" name="asunto"><br>
										<!-- Introduzco el Valor de la Variable $fecha en el valor del Campo oculto con la id: fecha [input-hidden]. -->
										<input type="hidden" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
										Comentario: <br><textarea id="comentario" class="input-xxlarge" name="comentario"></textarea><br>
										<input type="submit" id="submit" class="btn btn-primary" value="Enviar Comentario">
									</form>
								</div>
							</div>
						</div>
						<h2> Comentarios: </h2>
						<!--AQUI COMENTARIOS NUEVOS POR PARTE DE JQuery - AJAX -->
						<div id="todosComentarios"></div>
						<!-- AQUI COMENTARIOS ALMACENADOS TRAIDOS DE UNA DB mediante consultas MySql y PHP --> 
						<div id="comentarios">
<?php
  /* Se incluye el Archivo [conexion.php] para agregar las
  *  variables $db,$host,$user y $password.
  */
  include("conexion.php");
  $conexion=mysqli_connect($host,$user,$password)or die('Error en la Conexion al Servidor');
  mysqli_select_db($conexion,$db)or die('Error al Conectar con la DB');
  $consulta=mysqli_query($conexion,"Select * from miscomentarios order by id DESC LIMIT 22");
  
  while($row = mysqli_fetch_array($consulta)){
  $nombres = $row['nombre'];
  $asuntos = $row['asunto'];
  $fechas = $row['fecha'];
  $comentarios = $row['comentario'];

  echo '
  	<div class="container container-fluid margin-auto">
  		<div class="row-fluid">
  			<div class="span8 well">
    			<h4>'.$nombres.'</h4>
				<p>'.$asuntos.'</p>
				<p>'.$fechas.'</p>
				<p class="content-wrapper">'.$comentarios.'</p>
				<img src="assets/img/usuario.png" class="img" title="Mi Comentario" alt="usuario">
			</div>
		</div>
	</div>
  ';
 


  }

?>
						</div>
					</span>
				</span>
			</div>
		</div>
	</div>
	<footer id="footer" class="footer">
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/jquery.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-transition.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-alert.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-modal.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-tab.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-popover.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-button.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-collapse.js"></script>
    <script src="http://www.foroexpertows.host22.com/http://www.foroexpertows.host22.com/assets/js/bootstrap-carousel.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-typeahead.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/bootstrap-affix.js"></script>

    <script src="http://www.foroexpertows.host22.com/assets/js/holder/holder.js"></script>
    <script src="http://www.foroexpertows.host22.com/assets/js/google-code-prettify/prettify.js"></script>

    <script src="http://www.foroexpertows.host22.com/assets/js/application.js"></script>
    
		<div class="container">
			<br>
			<p style="text-align: center;">Copyright &copy; 2013 by: <a href="http://ninjacode.tv/"></a>NinjaCodeTv - <a href="http://html5facil.com/">Html5Facil</a> - Programador: <strong>Michael Serrato</strong> - Twitter: <a href="https://www.twitter.com/ForoExpertoWS"> @ForoExpertoWS </a> - Facebook: <a href="https://www.facebook/ForoExperto"> /ForoExperto </a> </p>
			<br>
			<hr>
			<br>
			<br>
			<br>
		</div>
	</footer>
</body>
</html>