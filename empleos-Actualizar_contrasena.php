<?php
    ob_start();
?>
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="5")

      header('Location: https://encuentraentlaxcala.com/');
      
      echo $_SESSION['sess_user_id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Actualizar contraseña</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="theme-color" content="#ff0000" />
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
	include('empleos-header.php');
?>


<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Actualizar contraseña</h2>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
	<div class="login">
		<div class="container">

		<form  action="empleos-Actualizar_contrasena_conf" method="post">
		<div class="page-header">
        	<h3>Actualizar contraseña</h3>
      	</div><br>
      	<div class="col-md-3">
      	</div>
			<div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div class="login-mail">
					<input type="password" name="contrasenaCliente"  placeholder="Por Favor ingresa tu contraseña actual" required>
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="contrasena1" placeholder="Por Favor ingresa tu nueva contraseña" required>
					<i class="glyphicon glyphicon-lock"></i>
				</div>
			
				<div class="login-mail">
					<input type="password" name="contrasena2" placeholder="Por Favor repita su contraseña"   required>
					<i class="glyphicon glyphicon-lock"></i>
				</div>

			
			<div class="login-do animated wow fadeInRight" data-wow-delay=".5s"><br>
				<label class="hvr-sweep-to-top login-sub">
					<input type="submit"  value="Guardar"></label>
			</div>

			<div class="col-md-3">
      	</div>

			<div class="clearfix"> </div><br><br><br>
			</form>
		</div>


	</div>

<?php
	include('empleos-footer.php');
?>

</body>
</html>

<?php
    ob_end_flush();
?>