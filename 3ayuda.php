<?php
    ob_start();
?>
 <?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="2")

      header('Location: https://encuentraentlaxcala.com/');
    
?>
<?php
     include('contador.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Ayuda</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="#ff0000" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
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
	    include('3categorias-principales.php');
    ?>
    
    <div class="col-md-10">
<?php
	include('3header.php');
?>




<!--banner-->
<div id="principal-header" class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Ayuda</h2>
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
        <h3>Insertar una dirección de Google maps</h3>
      </div>
		          <td><h4 id="h4-bootstrap-heading">Para poder insertar la dirección de tu local o establecimiento sigue las siguientes indicaciones:<br>
		          	 <ol><br>
		          	<li>Abre <a href="">Google Maps..</a></li><br>
					<li>Escribe la dirección de tu local o establecimiento.</li><br>
					<li>Posteriormente pulsa el icono de compartir.</li><br>
					<li>Entonces te mostrará dos opciones y escogeras la opción de Incorporar mapa y escoges el tamaño de mapa que mejor se adapte a tus necesidades.</li><br>
					<li>Despúes de esto copia el codigo <b>iframe</b> que se te ha generado.</li><br>
					<li>Finalmente acudes a tu página y pegas el codigo en la sección que se muestra en la imagen. Y listo ya podrás visualizar los resultados.</li>
					 <ol>
		          </h4></td>
		        </tr>
		      </tbody>
		    </table>


		    <table data-wow-delay=".8s" class="table">
		      <tbody>          
		        <tr>
		        <div class="page-header">
        <h3>Insertar video de youtube</h3>
      </div>
		         <td><h4 id="h4-bootstrap-heading">Para poder insertar un video tienes que seguir los siguientes pasos:<br>
		          	 <ol><br>
		          	<li>Abre <a href="">YouTube</a></li><br>
					<li>Busca el video que deseas utilizar.</li><br>
					<li>Posteriormente pulsa el icono de compartir.</li><br>
					<li>Entonces te mostrará tres opciones y escogeras la opción de Insertar vínculo.</li><br>
					<li>Despúes de esto copia el codigo <b>iframe</b> que se te ha generado.</li><br>
					<li>Finalmente acudes a tu página y pegas el codigo en la sección que se muestra en la imagen. Y listo ya podrás visualizar los resultados.</li>
					 <ol>
		          </h4></td>
		        </tr>
		      </tbody>
		    </table>
          </div>


         
        </div><!-- /.col-sm-4 -->
        
        <div class="col-sm-4">
          
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">¿Necesitas más ayuda?</h3>
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
	include('3footer.php');
?>
</div>
</body>
</html>

<?php
    ob_end_flush();
?>