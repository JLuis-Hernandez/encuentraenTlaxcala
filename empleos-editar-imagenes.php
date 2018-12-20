<?php
    ob_start();
?>
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="5")

      header('Location: https://encuentraentlaxcala.com');
    
?>
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php
     include('contador.php');
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<title>Editar anuncio</title>
<meta name="theme-color" content="#ff0000" />
<!-- for-mobile-apps -->
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
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>
	<script type="text/javascript">
			function VistaPrevia() 
			{
			    ObjReader = new FileReader();
			    ObjReader.readAsDataURL(document.getElementById("fotito").files[0]);
			    ObjReader.onload = function (ObjEvent) {
					document.getElementById("foto1").src = ObjEvent.target.result;
			    };
			    } 
		 </script>
		 <style>
	       .file-input-wrapper {
    width: 150px;
    height: 40px;
    overflow: hidden;
    position: relative;
  }
  .file-input-wrapper > input[type="file"] {
    font-size: 200px;
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0;
  }
  .file-input-wrapper > .btn-file-input {
    display: inline-block;
    width: 150px;
    height: 40px;
  }
  #borde{
    border: 3px solid #fe6060;
    border-radius: 6px;
    width: 156px;
    height: auto;
}

  .file-input-wrapper2 {
    width: 150px;
    height: 40px;
    overflow: hidden;
    position: relative;
  }
  .file-input-wrapper2 > input[type="file"] {
    font-size: 200px;
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0;
  }
  .file-input-wrapper2 > .btn-file-input2 {
    display: inline-block;
    width: 150px;
    height: 40px;
  }
  #borde2{
    border: 3px solid #fe6060;
    border-radius: 6px;
    width: 156px;
    height: auto;
}



		</style>
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
<body>
<?php
	include('empleos-header.php');
?>


<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Actualizar datos</h2>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
	<div class="login">
		<div class="container">

		<form action="" enctype="multipart/form-data" method="post">
		<div class="page-header">
        	<h3>Imagenes del anuncio</h3>
      	</div>
<?php
             //Conectarse a base de datos
$link = mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');
if (!$link) {
die('No se puede conectar: ' . mysql_error());
}

//seleccionar base de datos
$db_selected = mysql_select_db('encuen21_Tlaxcala', $link);
if (!$db_selected) {
die ('Error al seleccionar BD : ' . mysql_error());
}
    $query = "SELECT idEmpleos, img1 FROM empleos where idCliente='".$_SESSION['sess_user_id']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>

             <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["sess_username"]=$rsEmp['idEmpleos'];?>
			<div class="col-md-12 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div class="login-mail">
					<center><div id="borde">
				   <img src="images/iconos/camara.png" id="foto1" style="width: 150px; height: 160px; " />
			       <div class="file-input-wrapper">
				 <button class="btn-file-input">Seleccionar Foto</button>
				 <input id="fotito"  type="file" value="Upload" name="foto1" onchange="VistaPrevia();" />
			       </div>
			       </div></center>
				</div>
				 
			</div>
<?php } ?>

			<div class="col-md-12 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<label class="hvr-sweep-to-top login-sub">
					<input type="submit"  name="registrar" value="Actualizar">
					</label>
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
error_reporting(E_ALL ^ E_DEPRECATED);
  mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
  mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.
  if(isset($_POST['registrar'])){

    @$foto1=$_FILES['foto1']['name'];
    @$origen_img1=$_FILES['foto1']['tmp_name'];
    @$dest_img1="../images/anuncios/".$foto1;
    @copy($origen_img1,$dest_img1);


    $sqlUsuario = mysql_query("update cliente set nombreCliente='$nombre', apellidosCliente='$apellidos' where idCliente=22");
    $sqlAnuncio = mysql_query("update anuncios set img1='$dest_img1' where idCliente='".$_SESSION['sess_user_id']."' ");
    if($sqlAnuncio){
      echo "<script>alert('Tu informaci\u00F3n fue actuaizada correctamente.');</script>";
      echo "<script>location.href = 'empleos-perfil';</script>";
    }
  }
  ?>
  <?php
    ob_end_flush();
?>