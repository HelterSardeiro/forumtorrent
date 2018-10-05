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

<?php

$nombre=$_POST['nombre'];
$asunto=$_POST['asunto'];
$fecha=$_POST['fecha'];
$comentario=$_POST['comentario'];

include("conexion.php");

if(isset($nombre) && !empty($nombre) &&
isset($asunto) && !empty($asunto) &&
isset($fecha) && !empty($fecha) &&
isset($comentario) && !empty($comentario)){

$conexion=mysqli_connect($host,$user,$password)or die('Error en la Conexion al Servidor');
mysqli_select_db($conexion,$db)or die('Error al Conectar con la DB');
// mysql_query("INSERT INTO miscomentarios (id,nombre,asunto,fecha,comentario) VALUES('$_POST[nombre]','$_POST[asunto]','$_POST[fecha]','$_POST[comentario]')",$conexion)or die('Error en la Consulta');
mysqli_query($conexion,"INSERT INTO miscomentarios (nombre,asunto,fecha,comentario) VALUES('$_POST[nombre]','$_POST[fecha]','$_POST[asunto]','$_POST[comentario]')");

}

?>
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

	<div class="container container-fluid margin-auto">
  		<div class="row-fluid">
  			<div class="span8 well">
				<h4><?=$nombre?></h4>
				<p><?=$asunto?></p>
				<p><?=$fecha?></p>
				<p class="content-wrapper"><?=$comentario?></p>
				<img src="assets/img/usuario.png" class="img" title="Mi Comentario" alt="usuario">
			</div>
		</div>
	</div>