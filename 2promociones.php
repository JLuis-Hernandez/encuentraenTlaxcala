<?php
    ob_start();
?>
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="1")

      header('Location: https://encuentraentlaxcala.com/');
    
?>
<?php
     include('contador.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Promociones</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="#ff0000" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
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
	    include('2categorias-principales.php');
    ?>
    
    <div class="col-md-10">
<?php
	include('2header.php');
?>



<!--banner-->
<div id="principal-header" class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Promociones</h2>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
<!--content-->
<div class="container">
	<div class="page">
		<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.
?>
			
			<?php
			    $resultado = mysql_query("select idAnuncio, nombreNegocio, descripcion, categoria, municipio,  img1, img2 from cliente, anuncios where cliente.idCliente=anuncios.idCliente and cliente.rol=3  ORDER BY 1 DESC LIMIT 100;  ");
			    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
			    	{
			      		echo "
			      		<div class='col-md-12 col-m1 animated wow fadeInLeft' data-wow-delay='.1s'>
				      		<div class='col-1'>
	      						<div class='col-md-6 col-2'>
								<a href='2vip?id=".$row['idAnuncio']."'><img src='".$row['img1']."' style='width: 100%; height: 212px;' class='img-responsive'></a>
								<br><hr><br>
								</div>
								<div class='col-md-6 col-p'>
									<h5>".utf8_encode($row['nombreNegocio'])."</h5>
									<p>".utf8_encode($row['descripcion'])."</p>
									<a href='2vip?id=".$row['idAnuncio']."' class='shop' data-hover='Ver Promoci&#243;n y/o Aviso'>Ver Promoci&#243;n y/o Aviso</a>
									<br><hr style='margin-top: 225px; position: absolute;'><br>
								</div>
							</div>
						</div>
						";
					}
			?>
			
	</div>
</div>

<?php
	include('2footer.php');
?>
</div>
</body>
</html>
<?php
    ob_end_flush();
?>