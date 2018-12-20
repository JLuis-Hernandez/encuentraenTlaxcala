<?php
    ob_start();
?>
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="3")

      header('Location: https://encuentraentlaxcala.com/');
    
?>
<?php
     include('contador.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Conocenos</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="#ff0000" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
<style>
/* Effect 20: 3D side */
.cl-effect-20 a {
	line-height: 2em;
	-webkit-perspective: 800px;
	-moz-perspective: 800px;
	perspective: 800px;
}

.cl-effect-20 a span {
	position: relative;
	display: inline-block;
	background: #fff;
	/*box-shadow: inset 0 3px #2f4351;*/
	-webkit-transition: background 0.6s;
	-moz-transition: background 0.6s;
	transition: background 0.6s;
	-webkit-transform-origin: 50% 0;
	-moz-transform-origin: 50% 0;
	transform-origin: 50% 0;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
	-webkit-transform-origin: 0% 50%;
	-moz-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
}

.cl-effect-20 a span::before {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #ff0000;
	color: #fff;
	content: attr(data-hover);
	-webkit-transform: rotateX(270deg);
	-moz-transform: rotateX(270deg);
	transform: rotateX(270deg);
	-webkit-transition: -webkit-transform 0.6s;
	-moz-transition: -moz-transform 0.6s;
	transition: transform 0.6s;
	-webkit-transform-origin: 0 0;
	-moz-transform-origin: 0 0;
	transform-origin: 0 0;
	pointer-events: none;
}

.cl-effect-20 a:hover span,
.cl-effect-20 a:focus span {
	background: #2f4351;
}

.cl-effect-20 a:hover span::before,
.cl-effect-20 a:focus span::before {
	-webkit-transform: rotateX(10deg);	
	-moz-transform: rotateX(10deg);
	transform: rotateX(10deg);
}

</style>
</head>
	
<body>
<?php
	    include('4categorias-principales.php');
    ?>
    
    <div class="col-md-10">
<?php
	include('4header.php');
?>




<!--banner-->
<div id="principal-header" class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Conocenos</h2>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
<!--content-->
<div class="container">
	<div class="page">

      <div class="row wow fadeInRight animated">
        <div class="col-sm-8">
          <div class="">
             <table data-wow-delay=".5s" class="table">
		      <tbody>          
		        <tr>
		        <div class="page-header">
        <h3>Misión</h3>
      </div>
		          <td><h4 id="h4-bootstrap-heading">Nuestra misión es ofrecer, de manera eficiente y eficaz, los servicios de una plataforma web que permite anunciar a empresarios, profesionistas y personas que ofrezcan un servicio de ayuda o apoyo para otra(s) persona(s), en el contexto de empresarios.</h4></td>
		        </tr>
		      </tbody>
		    </table>


		    <table data-wow-delay=".8s" class="table">
		      <tbody>          
		        <tr>
		        <div class="page-header">
        <h3>Visión</h3>
      </div>
		          <td><h4 id="h4-bootstrap-heading">Nuestra visión es que nuestra plataforma web sea conocida y consultada por toda aquella persona que tenga acceso a un dispositivo electrónico con acceso a internet con la finalidad de encontrar los productos, bienes o servicios que necesita.</h4></td>
		        </tr>
		      </tbody>
		    </table>

		    <table data-wow-delay=".8s" class="table">
		      <tbody>          
		        <tr>
		        <div class="page-header">
        <h3>Objetivos</h3>
      </div>
		          <td><h4 id="h4-bootstrap-heading">Posicionarnos en el más alto nivel de manera regional en un lapso de seis meses y a nivel nacional en tres años, como una plataforma web que permite a cualquier empresa o profesional anunciarse con sus datos mínimos de manera GRATUITA. Con la finalidad de ayudar a cualquier usuario que busque algún producto, bien o servicio. Sus dos preguntas básicas: ¿Qué buscas? y ¿Dónde?, permite al usuario visitante, acercarlo al(os) producto(s), bien(es) o servicio(s) cerca del sitio que decida. A fin de acortar el tiempo de la búsqueda sin ser necesario que recorra distancias o trasladarse a otros sitios.</h4></td>
		        </tr>
		      </tbody>
		    </table>

		    <table data-wow-delay=".8s" class="table">
		      <tbody>          
		        <tr>
		        <div class="page-header">
        <h3>Filosofía</h3>
      </div>
		          <td><h4 id="h4-bootstrap-heading">El trabajo, que por cierto… ¡disfrutamos lo que hacemos!, nos permite ver con antelación un futuro de mejora para todos, y eso incluye a los visitantes, empresas de cualquier tamaño, profesionistas y profesionales que se registran en nuestra plataforma web. Encontrar de manera fácil y sencilla, en cualquier tipo de dispositivo electrónico, algún tipo de producto, bien o servicio es una necesidad que vivimos como empresa y que al platicar con otros símiles, también habían pasado por la misma experiencia. De ahí, nace la idea de disponer una plataforma que permita encontrar lo que se busca. Todo el potencial que tiene nuestro equipo: conocimientos, experiencia, innovación, creatividad, disciplina, constancia, calidad humana e interés por el medio ambiente, así como metas bien establecidas; son solo algunos de los rubros que compartimos en cada uno de nuestros proyectos. Y que está a disposición para cumplir con nuestros objetivos.</h4></td>
		        </tr>
		      </tbody>
		    </table>

		    <table data-wow-delay=".8s" class="table">
		      <tbody>          
		        <tr>
		        <div class="page-header">
        <h3>Valores</h3>
      </div>
		          <td><h4 id="h4-bootstrap-heading">
		          	<li>Compromiso.</li>
					<li>Responsabilidad.</li>
					<li>Trabajo en equipo interdisciplinario.</li>
					<li>Innovación.</li>
					<li>Nos gusta conocer su opinión.</li>
					<li>Somos profesionales.</li>
					<li>La creatividad y expansión, ¡Nos gusta!.</li>

		          </h4></td>
		        </tr>
		      </tbody>
		    </table>
          </div>


         
        </div><!-- /.col-sm-4 -->
        
        <div class="col-sm-4">
          
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">¿Quieres saber más de nosotros?</h3>
            </div>
            <div class="panel-body">
              Buscanos en nuestras diferentes redes sociales, y acercate a nosotros, para que estes enterado de nuestros diferentes servicios que ofrecemos y tal vez alguno te sirva. Ven y conocenos.
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>
      
	</div>
</div>



<?php
	include('4footer.php');
?>
</div>

</body>
</html>
<?php
    ob_end_flush();
?>