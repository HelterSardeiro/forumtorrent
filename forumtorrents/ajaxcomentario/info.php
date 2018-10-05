<!--[Copyright-Derechos de Autor]
-
-   
- Autor de la Aplicacion: Michael Serrato
-
- Titulo: Proyecto Sistema de Comentarios AJAX con PHP utilizando la Estructura HTML5 y Bootstrap para el Diseño de la Aplicacion Web. 
- Año: 2013
- Sitio Web: http://www.foroexpertows.host22.com/
- Twitter: @ForoExpertoWS
- o Tambien Siguenos en: https://www.twitter.com/ForoExpertoWS
- Facebook: https://www.facebook.com/ForoExperto
- correo: programador-experto97@hotmail.com
-
-->

<!Doctype html>
<html lang="es">
<head>

  <title> Info </title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/icon" href="http://www.foroexpertows.host22.com/images/foroexperto.ico">

  <meta name="description" content="Proyecto Sistema de Comentarios AJAX con PHP utilizando la Estructura HTML5 y Bootstrap para el Diseño de la Aplicacion Web. | Cursos de Programación Basica y Avanzada. Conviertete en un Programador Experto y se mejor que ningun Otro!!!.">
  <!--LIBRERIAS DE Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="assets/css/docs.css">
  
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <ul class="nav">
          <li><a href="http://ninjacode.tv/"  class="brand" title="Todos los Miercoles 8:30pm - M&eacute;xico" alt="NinjaCodeTv"> NinjaCodeTv </a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Contenidos</a></li>
          <li><a href="index.php">Noticias</a></li>
          <li><a href="index.php#footer">Contacto</a></li>
          <li><a href="#"><i class="icon-info-sign"></i> info</a></li>
        </ul>
      </div>
    </div>
  </div>
  <header id="overview" class="subhead jumbotron">
    <div class="container">
      <h1> Acerca de la aplicacion </h1>
      <p class="lead"> By: Michael Serrato </p>
    </div>
  </header>
  <div class="container container-fluid">
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
          <li><a href="#comienzo"> Inicio <i class="icon-chevron-right"></i></a></li>
          <li><a href="#librerias"> Librerias <i class="icon-chevron-right"></i></a></li>
          <li><a href="#code_js"> Scripts <i class="icon-chevron-right"></i></a></li>
          <li><a href="#estilos_app"> Estilos Agregados <i class="icon-chevron-right"></i></a></li>
          <li><a href="#archv_comentarios"> Archivo: comentarios.php <i class="icon-chevron-right"></i></a></li>
          <li><a href="#archv_conexion"> Conexión <i class="icon-chevron-right"></i></a></li>
          <li><a href="#recomendacion"> Recomendaciones <i class="icon-chevron-right"></i></a></li>
        </ul>
      </div>
  <div class="span9" id="comienzo">
    <section>
      <article>
        <h2 id="introduccion"> Introducción </h2>
        <h3> Proposito del Proyecto </h3>
        <p> En el desarrollo de Aplicaciones
        se han encontrado cientos de metodos
        para llegar a una misma solución, 
        por lo que en algunas ocaciones 
        tenemos para elegir ciertos metodos
        al idear una aplicación sin 
        embargo algunos pasos o algoritmos no
        son los más practicos o convenientes
        es por eso que el Próposito de esta Aplicación
        es dar un sencillo algoritmo o una
        serie de metodos para poder realizar
        un Sistema de Comentarios utlizando 
        las herramientas más potentes que encontramos
        hoy en dia, lenguajes como HTML5, CSS y CSS3
        (por parte de un Framework para el Diseño 
        de la Aplicación) , AJAX con JQuery y sin
        duda no podemos olvidar a PHP que es la
        herramienta que hará más fácil este trabajo.
        No obstante los metodos presentados no son
        de lo más eficaz ya que no presentan 
        cierta seguridad evitando entradas de SPAM o MySQL 
        injection, por lo que este Sistema no cuenta con
         los Filtros necearios para evitar esas
        amenazas informaticas, aunque sin duda alguna 
        cabe aclarar que este Sistema nos ayudará 
        para podernos dar cuenta de Como realizar una 
        serie de pasos en los Algoritmos para
        llegar a una misma solución, de tal manera
        que si usted lo desea puede copiar el Codigo
        de Fuente de este Sistema y Modificarlo a su 
        manera, pero obviamente dejando los Derechos
        de Autor de esta aplicación.  </p>
        <h2 id="librerias">Librerias</h2>
        <p> En el desarrollo de esta aplicación
        podrán notar que se utilizaron ciertas librerias
        elementales para la facil y rápida creación de
        este Sistema de Comentarios.</p>
        <h3> [ARCHIVO: index.php] </h3>
        <strong>Estilos CSS</strong>
        <p>Para agregar estilos CSS a nuestra aplicación
          utilizamos las librerias
          de Bootstrap que nos facilitaron
          el desarrollo de esta aplicacion pudiendo colocar
          rapidamente una maquetacion y colores
          unicos de este Framework. Cabe Aclarar que este
          Framework cuenta con la mejor tecnología para
          aplicar propiedades de CSS sin problemas en 
          todos los navegadores, además cuenta con
          su responsive design que nos permite la adaptacion
          de esta misma en diferentes resoluciones
          lo que mejora aún su presentación. </p>
          <p>Librerias empleadas para el Diseño de la Aplicación: </p>
          
          <pre class="prettyprint linenums">
              &lt;link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"&gt;
              &lt;link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css"&gt;
              &lt;link rel="stylesheet" type="text/css" href="assets/css/docs.css"&gt;
          </pre>
          <p id="code_js"></p>
          <p></p>
          <br>
          <br>
          <h2> Utilizando AJAX/JQuery </h2>
          <p> Al idear esta aplicación surge la idea
          de tratar de hacer llegar la información entrante
          de manera instantania por lo que procedimos 
          a utilizar la libreria Principa de Jquery
          para hacer uso de AJAX que es una herramienta
          muy util para poder menejar datos e información
          de manera rápida mediante una serie de metodos
          empleados y eventos que nos facilitarán 
          la rapida creación de este sistema, aunque
          si usted lo desea esta aplicación
          puede hacer uso de XMLHTTPRequest por parte
          de Javascript sin embargo utilizar JQuery nos
          ahorrará mucho tiempo. ¿Y si solo utilizo PHP?
          Es tambien una manera de hacerlo sin embargo
          viendolo del lado del cliente a muchos no les
          gustaría enviar información o comentarios
          y tener que recargar el navegador
          cada vez que se envie cierta información
          es por eso que utilizamos de la libreria de 
          JQuery que podrá enviar y traer datos
          sin recargar el navegador por lo que será
          una manera más eficaz de hacer el Sistema.
          </p>
          <p>[ARCHIVO: index.php] Codigo Fuente del Script:  </p>
          <pre class="prettyprint linenums">
  <!--LIBRERIA DE JQuery 1.8.2 -->
  &lt;script src="jquery-1.8.2.min.js"&gt;&lt;/script>&gt;
  <!--<script>-->
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
  &lt;/script&gt;

          </pre>
          <p id="estilos_app"></p>
          <br>
          <br>
          <h2> Estilos CSS propios </h2>
          <p> Al Desarrollar esta aplicación surge
          la idea de revisar el contenido de un comentario
          al ver que si una palabra se repetia 200 veces
          esto por defecto hacia que se pasara de
          ancho del contenedor es por eso que se hizó uso
          de los Siguientes Estilos: </p>
          <h3> [ARCHIVO: index.php] </h3>

<pre class="prettyprint linenums">
<!-- Algunos Estilos CSS necesarios -->
&lt;style type="text/css"&gt;

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

&lt;/style&gt;
</pre>
        <p id="archv_comentarios">
        </p>
        <br>
        <br>
        <h2> ARCHIVO: comentarios.php </h2>
        <h3> MANEJO DE DATOS </h3>
        <p>Codigo de la Estructurá para el manejo de
          datos/informacion y envió de la misma
          mediante Consultas MySQL.</p>
<pre class="prettyprint linenums">


< ?php

$nombre=$_POST['nombre'];
$asunto=$_POST['asunto'];
$fecha=$_POST['fecha'];
$comentario=$_POST['comentario'];

include("conexion.php");

if(isset($nombre) && !empty($nombre) &&
isset($asunto) && !empty($asunto) &&
isset($fecha) && !empty($fecha) &&
isset($comentario) && !empty($comentario)){

$conexion=mysql_connect($host,$user,$password)or die('Error en la Conexion al Servidor');
mysql_select_db($db,$conexion)or die('Error al Conectar con la DB');
mysql_query("INSERT INTO aqui_tu_tabla (nombre,asunto,fecha,comentario) VALUES('$_POST[nombre]','$_POST[fecha]','$_POST[asunto]','$_POST[comentario]')",$conexion);

}

?>
&lt;style type="text/css"&gt;

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

&lt;/style&gt;

  &lt;div class="container container-fluid margin-auto"&gt;
      &lt;div class="row-fluid"&gt;
        &lt;div class="span8 well"&gt;
        &lt;h4&gt;<?=$nombre?>&lt;/h4&gt;
        &lt;p&gt;<?=$asunto?>&lt;/p&gt;
        &lt;p&gt;<?=$fecha?>&lt;/p&gt;
        &lt;p class="content-wrapper"><?=$comentario?>&lt;/p&gt;
        &lt;img src="assets/img/usuario.png" class="img" title="Mi Comentario" alt="usuario"&gt;
      &lt;/div>
    &lt;/div>
  &lt;/div>

</pre>
        <p id="archv_conexion"></p>
        <br>
        <br>
        <h2> ARCHIVO: conexion.php </h2>
        <h3> Conexion a la DB y el Servidor. </h3>
        <p> Aqui un pequeño archivo que nos servirá de
        ayuda para la conexion indispensable al Servidor
        para poder generar las Consultas a la DB. </p>

<pre class="prettyprint linenums">
< ?php
$host='localhost';
$user='root';
$password='';
$db='dbcomentarios'; // <--- Aqui tu Base de Datos
?>
</pre>
        <p id="recomendacion"></p>
        <br>
        <br>
        <h2> Recomendaciónes </h2>
        <p> Como consejo yo los invito a Copiar y Compartir
         sin ningún Problema la estructura de esta
         aplicación. No obstante ustedes pueden hacerle
         las modificaciones necesarias para
         personalizar este Sistema a su manera, Claro
         pidiendoles Cordialmente que mantengan este
         Sistema con Su Copyright o Derechos de Autor.</p>
         <h2> By: Michael Serrato. </h2>


      </article>
    </section>
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