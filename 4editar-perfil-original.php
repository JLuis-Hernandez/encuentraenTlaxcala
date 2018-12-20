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
<title>Registrar anuncio</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>

	<script type="text/javascript">
			function VistaPrevia() 
			{
			    ObjReader = new FileReader();
			    ObjReader.readAsDataURL(document.getElementById("fotito1").files[0]);
			    ObjReader.onload = function (ObjEvent) {
					document.getElementById("foto1").src = ObjEvent.target.result;
			    };
			    } 
		 </script>
		<script type="text/javascript">
			function VistaPrevia2() 
			{
			    ObjReader = new FileReader();
			    ObjReader.readAsDataURL(document.getElementById("fotito2").files[0]);
			    ObjReader.onload = function (ObjEvent) {
					document.getElementById("foto2").src = ObjEvent.target.result;
			    };
			    } 
		 </script>
		 <script type="text/javascript">
			function VistaPrevia3() 
			{
			    ObjReader = new FileReader();
			    ObjReader.readAsDataURL(document.getElementById("fotito3").files[0]);
			    ObjReader.onload = function (ObjEvent) {
					document.getElementById("foto3").src = ObjEvent.target.result;
			    };
			    } 
		 </script>
		 <script type="text/javascript">
			function VistaPrevia4() 
			{
			    ObjReader = new FileReader();
			    ObjReader.readAsDataURL(document.getElementById("fotito4").files[0]);
			    ObjReader.onload = function (ObjEvent) {
					document.getElementById("foto4").src = ObjEvent.target.result;
			    };
			    } 
		 </script>
		 <script type="text/javascript">
			function VistaPrevia5() 
			{
			    ObjReader = new FileReader();
			    ObjReader.readAsDataURL(document.getElementById("fotito5").files[0]);
			    ObjReader.onload = function (ObjEvent) {
					document.getElementById("foto5").src = ObjEvent.target.result;
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
  	margin-left: -16px;
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
  	margin-left: -16px;
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
	include('4header.php');
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

		<form enctype="multipart/form-data" action="" method="post">
		<div class="page-header">
        	<h3>Datos personales</h3>
      	</div>
			<div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input value="<?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'; } ?>" disabled="disabled" name="nombre" type="text" placeholder="Nombre(s) "  autofocus>
					<i><img width="16px;" src="images/iconos/usuario.png"></i>
				</div>
				<div style="border-color: #800000; border-width: 2px;"  class="login-mail">
					<input type="text" value="<?php if (isset($_SESSION['correoCliente'])) { echo ''.$_SESSION['correoCliente'].'&nbsp;'; } ?>" disabled="disabled">
					<i><img width="16px;" src="images/iconos/emailf.png"></i>
				</div>
				
				 
			</div>
			<div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;"  class="login-mail">
					<input  value="<?php if (isset($_SESSION['apellidosCliente'])) { echo ''.$_SESSION['apellidosCliente'].'&nbsp;'; } ?>" disabled="disabled" name="apellidos" type="text" placeholder="Apellidos"  autofocus>
					<i><img width="16px;" src="images/iconos/usuario.png"></i>
				</div>
				<div style="border-color: #800000; border-width: 2px;"  class="login-mail">
					<input type="password" name="contrasena" type="password" value="***************" disabled="disabled">
					<i><img width="16px;" src="images/iconos/contrasef.png"></i>
				</div>
			</div>



		<div class="page-header">
        	<h3>Datos de la empresa y/o servicio</h3>
      	</div>
<?php
             //Conectarse a base de datos
$link = mysql_connect('localhost', 'lubrisen_Tlax', 'RK0gW2x^oVT7');
if (!$link) {
die('No se puede conectar: ' . mysql_error());
}

//seleccionar base de datos
$db_selected = mysql_select_db('lubrisen_encuentra', $link);
if (!$db_selected) {
die ('Error al seleccionar BD : ' . mysql_error());
}
    $query = "SELECT idAnuncio, nombreNegocio, descripcion, categoria, subcategoria, domicilio, codPostal, municipio, ciudad, coloniaLocalidad, telefono, correoNegocio, facebook, twitter, whatsapp, linkSitioWeb, linkYoutube, linkGoogle, audio, img1, img2, img3, img4, img5 FROM anuncios where idCliente='".$_SESSION['sess_user_id']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>

             <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["sess_username"]=$rsEmp['idAnuncio'];?>
      	<div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input type="text" value="<?php echo $rsEmp['nombreNegocio']; ?>" type="text" placeholder="Nombre de la empresa o anunciante" autofocus disabled="disabled">
					<i><img width="16px;" src="images/iconos/empresaf.png"></i>
				</div>

				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input type="text" name="categoria" type="text" value="<?php echo $rsEmp['categoria']; ?>"  placeholder="Categoría" disabled="disabled">
					<i> <img width="16px;" src="images/iconos/categoriaf.png"></i>
				</div>

				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
				<input type="text"  value="<?php echo $rsEmp['municipio']; ?>"  placeholder="Municipio" disabled="disabled">
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>

				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input value="<?php echo $rsEmp['coloniaLocalidad']; ?>" disabled="disabled"  type="text" placeholder="Localidad / Colonia / Sección / Pueblo" required>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>

				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input value="<?php echo $rsEmp['codPostal']; ?>" disabled="disabled" type="text" placeholder="&#35; Codigo Postal" autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>

				
	
			</div>
			<div class="col-md-6 login-do animated wow fadeInLeft" data-wow-delay=".5s">
				<div class="login-mail">
					<input  value="<?php echo $rsEmp['correoNegocio']; ?>" name="correoEmpresa" type="text" placeholder="E-mail de contacto" autofocus>
					<i><img width="16px;" src="images/iconos/emailf.png"></i>
				</div>
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input type="text" name="subcategoria" value="<?php echo $rsEmp['subcategoria']; ?>" disabled="disabled" placeholder="Subcategoría" autofocus>
					<i><img width="16px;" src="images/iconos/subcategoria.png"></i>
				</div>

				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input value="<?php echo $rsEmp['ciudad']; ?>" disabled="disabled"  type="text" placeholder="Ciudad" autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>

				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input value="<?php echo $rsEmp['domicilio']; ?>" disabled="disabled"  type="text" placeholder="Domicilio" autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>

				<div class="login-mail">
					<input value="<?php echo $rsEmp['telefono']; ?>"  name="telefono" type="text" placeholder="Telefono" autofocus>
					<i><img width="16px;" src="images/iconos/telefonof.png"></i>
				</div>
			</div>

  			<div class="col-md-12">
				<div class="login-mail">
  					<input  value="<?php echo $rsEmp['descripcion']; ?>"  name="descripcion" type="text" placeholder="Descripción del anuncio">
  					<i><img width="16px;" src="images/iconos/descripcion.png"></i>
  				</div>
  			</div>
  			
		<div class="page-header">
        	<h3>Redes sociales</h3>
      	</div>
			<div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div class="login-mail">
					<input value="<?php echo $rsEmp['facebook']; ?>" name="facebook" type="text" placeholder="Facebook" autofocus>
					<i><img width="16px;" src="images/iconos/facebook.png"></i>
				</div>
				 <div class="login-mail">
					<input value="<?php echo $rsEmp['whatsapp']; ?>"  name="whats" type="text" placeholder="Numero de Whatsapp"  autofocus>
					<i><img width="16px;" src="images/iconos/whatsaap.png"></i>
				</div>
			</div>
			<div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
					<input value="<?php echo $rsEmp['twitter']; ?>"  name="twitter" type="text" placeholder="Twitter" autofocus>
					<i><img width="16px;" src="images/iconos/twitter1.png"></i>
				</div>
				<div class="login-mail">
					<input value="<?php echo $rsEmp['linkSitioWeb']; ?>"  name="linkweb" type="text" placeholder="Link de tu sitio Web" autofocus>
					<i><img width="16px;" src="images/iconos/web2.png"></i>
				</div>
			</div>


<div class="page-header">
        	<h3>Imagenes del anuncio</h3>
      	</div>
			<div class="col-md-3 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
				<div class="login-mail">
					<center><div id="borde">
				   <img src="images/iconos/camara.png" id="foto1" style="width: 150px; height: 160px; " />
			       <div class="file-input-wrapper">
				 <button class="btn-file-input">Seleccionar Foto</button>
				 <input id="fotito1"  type="file" value="Upload" name="foto1" onchange="VistaPrevia();"  />
			       </div>
			       </div>
			       </center>
				</div>
				 
			</div>
			<div class="col-md-2 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
					<center><div id="borde2">
				   <img src="images/iconos/camara.png" id="foto2" style="width: 150px; height: 160px; " />
			       <div class="file-input-wrapper2">
				 <button class="btn-file-input2">Seleccionar Foto</button>
				 <input id="fotito2"  type="file" value="Upload" name="foto2" onchange="VistaPrevia2();"  />
			       </div>
			       </div></center>
				</div>
			</div>

			<div class="col-md-2 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
					<center><div id="borde2">
				   <img src="images/iconos/camara.png" id="foto3" style="width: 150px; height: 160px; " />
			       <div class="file-input-wrapper2">
				 <button class="btn-file-input2">Seleccionar Foto</button>
				 <input id="fotito3"  type="file" value="Upload" name="foto3" onchange="VistaPrevia3();" />
			       </div>
			       </div></center>
				</div>
			</div>

			<div class="col-md-2 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
					<center><div id="borde2">
				   <img src="images/iconos/camara.png" id="foto4" style="width: 150px; height: 160px; " />
			       <div class="file-input-wrapper2">
				 <button class="btn-file-input2">Seleccionar Foto</button>
				 <input id="fotito4"  type="file" value="Upload" name="foto4" onchange="VistaPrevia4();"  />
			       </div>
			       </div></center>
				</div>
			</div>

			<div class="col-md-3 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
					<center><div id="borde2">
				   <img src="images/iconos/camara.png" id="foto5" style="width: 150px; height: 160px; " />
			       <div class="file-input-wrapper2">
				 <button class="btn-file-input2">Seleccionar Foto</button>
				 <input id="fotito5"  type="file" value="Upload" name="foto5" onchange="VistaPrevia5();"  />
			       </div>
			       </div></center>
				</div>
			</div>
		


		<div class="page-header">
        	<h3>Audio & Video</h3>
      	</div>
			
			<div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
				<center> <input type="file" name="audio"  ></center>
				<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
			</div>
			<div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
					<center>
				<input value="<?php echo $rsEmp['linkYoutube']; ?>"  name="video" type="text" placeholder="Link de video de YouTube" autofocus></center>
					<i><img width="16px;" src="images/iconos/youtube.png"></i>
				</div>
			</div>
		<div class="page-header">
        	<h3>Ubicación de empresa</h3>
      	</div>
			
			<div class="col-md-12 login-do animated wow fadeInRight" data-wow-delay=".5s">
				<div class="login-mail">
					<input value="<?php echo $rsEmp['linkGoogle']; ?>"  name="mapa" type="text" placeholder="Link de Google Maps" autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
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
	include('4footer.php');
?>


</body>
</html>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect('localhost', 'lubrisen_Tlax', 'RK0gW2x^oVT7');//conexion  
mysql_select_db("lubrisen_encuentra");//nombre de la base de datos.
  if(isset($_POST['registrar'])){
   //datos del cliente
    $nombre = utf8_decode($_POST['nombre']);
    $apellidos = utf8_decode($_POST['apellidos']);
    //datos de la empresa
    //$empresa = utf8_decode($_POST['empresa']);
    $desc = utf8_decode($_POST['descripcion']);
    //$municipio = utf8_decode($_POST['municipio']);
    //$ciudad = utf8_decode($_POST['ciudad']);
    //$localidad = utf8_decode($_POST['localidad']);
    //$domicilio = utf8_decode($_POST['domicilio']);
    //$codPost = $_POST['codPost'];
    $telefono = $_POST['telefono'];
    $correoEmpresa = utf8_decode($_POST['correoEmpresa']);

    @$foto1=$_FILES['foto1']['name'];
    @$origen_img1=$_FILES['foto1']['tmp_name'];
    @$dest_img1="images/anuncios/".$foto1;
    copy($origen_img1,$dest_img1);

    @$foto2=$_FILES['foto2']['name'];
    @$origen_img2=$_FILES['foto2']['tmp_name'];
    @$dest_img2="images/anuncios/".$foto2;
    copy($origen_img2,$dest_img2);

    @$foto3=$_FILES['foto3']['name'];
    @$origen_img3=$_FILES['foto3']['tmp_name'];
    @$dest_img3="images/anuncios/".$foto3;
    copy($origen_img3,$dest_img3);

    @$foto4=$_FILES['foto4']['name'];
    @$origen_img4=$_FILES['foto4']['tmp_name'];
    @$dest_img4="images/anuncios/".$foto4;
    copy($origen_img4,$dest_img4);

    @$foto5=$_FILES['foto5']['name'];
    @$origen_img5=$_FILES['foto5']['tmp_name'];
    @$dest_img5="images/anuncios/".$foto5;
    copy($origen_img5,$dest_img5);

    @$Aud=$_FILES['audio']['name'];
    @$origen_aud=$_FILES['audio']['tmp_name'];
    @$dest_aud="images/anuncios/".$Aud;
    copy($origen_aud,$dest_aud);

    $whats = $_POST['whats'];
    $face = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $web = $_POST['linkweb'];

    $sqlUsuario = mysql_query("update cliente set nombreCliente='$nombre', apellidosCliente='$apellidos' where idCliente=8");
    $sqlAnuncio = mysql_query("update anuncios set descripcion='$desc',   telefono='$telefono', correoNegocio='$correoEmpresa', 
    	whatsapp='$whats',facebook='$face', twitter='$twitter', img1='$dest_img1', img2='$dest_img2', img3='$dest_img3', img4='$dest_img4', img5='$dest_img5', audio='$dest_aud', linksitioweb='$web', linkYoutube='$video', linkGoogle='$mapa' where idCliente='".$_SESSION['sess_user_id']."' "
    	);
    if($sqlAnuncio){
      echo "<script>alert('Tu información fue actuaizada correctamente.');</script>";
      echo "<script>location.href = '4perfil';</script>";
    }
  }
  ?>
  <?php
    ob_end_flush();
?>