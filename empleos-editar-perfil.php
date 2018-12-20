<?php
    ob_start();
?>
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="5")

      header('Location: https://encuentraentlaxcala.com/');
    
?>
<?php
     include('contador.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Editar Información</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="theme-color" content="#ff0000" />
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>

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

		<form enctype="multipart/form-data" action="" method="post">
		<div class="page-header">
        	<h3>Datos personales</h3>
      	</div>
			<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input title="Nombre(s)" value="<?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'; } ?>" readonly="readonly" name="nombre" type="text" placeholder="Nombre(s) "  autofocus>
					<i><img width="16px;" src="images/iconos/usuario.png"></i>
				</div>
			</div>
			
			<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;"  class="login-mail">
					<input title="Apellidos" value="<?php if (isset($_SESSION['apellidosCliente'])) { echo ''.$_SESSION['apellidosCliente'].'&nbsp;'; } ?>" readonly="readonly" name="apellidos" type="text" placeholder="Apellidos"  autofocus>
					<i><img width="16px;" src="images/iconos/usuario.png"></i>
				</div>
			</div>
			
			<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;"  class="login-mail">
					<input type="text" title="Email de inicio de sesión" value="<?php if (isset($_SESSION['correoCliente'])) { echo ''.$_SESSION['correoCliente'].'&nbsp;'; } ?>" readonly="readonly">
					<i><img width="16px;" src="images/iconos/emailf.png"></i>
				</div>
			</div>
			
			<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;"  class="login-mail">
					<input  style="background: #fff;" title="Contraseña (Link abajo para cambiarla)" type="password" name="contrasena" type="password" value="***************" disabled="disabled">
					<i><a style="text-decoration: none;" href="empleos-Actualizar_contrasena"><img width="16px;" src="images/iconos/contrasef.png"> Editar contrase&#241;a</i></a>
				</div>
			</div>


		<div class="page-header">
        	<h3>Datos del anuncio</h3>
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
    $query = "SELECT idEmpleos, nombre_empresa, giro_empresarial, municipio, direccion, codigo_postal, descripcion, sueldo, turno, horario, prestaciones, cargo, telefono_oficina, telefono_whatsapp, correo_contacto, linkgoogle, linksitioweb  FROM empleos where idCliente='".$_SESSION['sess_user_id']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>

             <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["sess_username"]=$rsEmp['idEmpleos'];?>
      		<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input type="text" value="<?php echo $rsEmp['cargo']; ?>" type="text" title="Cargo del anunciante" autofocus readonly="readonly">
					<i><img width="16px;" src="images/iconos/usuario.png"></i>
				</div>
            </div>

      		<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input type="text" value="<?php echo $rsEmp['nombre_empresa']; ?>" type="text" title="Nombre de la empresa ( <?php echo $rsEmp['nombre_empresa']; ?>)" autofocus readonly="readonly">
					<i><img width="16px;" src="images/iconos/empresaf.png"></i>
				</div>
            </div>
            
            <div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input type="text" name="giro_empresarial" type="text" value="<?php echo $rsEmp['giro_empresarial']; ?>"  title="Categoría" readonly="readonly">
					<i> <img width="16px;" src="images/iconos/empresaf.png"></i>
				</div>
            </div>
            
            <div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
				<input type="text"  value="<?php echo $rsEmp['municipio']; ?>"  title="Municipio" readonly="readonly">
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
            </div>
            
            <div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input value="<?php echo $rsEmp['direccion']; ?>" readonly="readonly"  type="text" title="domicilio" required>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
			</div>
			
            <div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 2px;" class="login-mail">
					<input value="<?php echo $rsEmp['codigo_postal']; ?>" readonly="readonly" type="text" title="Codigo Postal" autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
			</div>
			
			<div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
					<input type="text" value="<?php echo $rsEmp['sueldo']; ?>" name="sueldo" title="Sueldo que propone" autofocus>
					<i><img width="16px;" src="images/iconos/sueldo.png"></i>
				</div>
			</div>
			
			<div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
					<select style="width: 100%; height: 22px;" name="turno" title="Turno" autofocus>
                        <option selected="selected" value="<?php echo $rsEmp['turno']; ?>"><?php echo $rsEmp['turno']; ?></option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                        <option value="Nocturno">Nocturno</option> 
                        <option value="Tiempo completo">Tiempo completo</option>
                        <option value="Medio tiempo">Medio tiempo</option>
                        <option value="Disponibilidad de rolar turno">Disponibilidad de rolar turno</option>
                    </select>
					<i><img width="16px;" src="images/iconos/turnof.png"></i>
				</div>
            </div>
			
            <div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
					<input type="text" value="<?php echo $rsEmp['horario']; ?>" name="horario" title="Horario del trabajo" autofocus>
					<i><img width="16px;" src="images/iconos/horario.png"></i>
				</div>
			</div>

            <div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
				    <select style="width: 100%; height: 22px;" title="Prestaciones de ley" name="prestaciones" autofocus>
                      <option selected="selected" value="<?php echo $rsEmp['prestaciones']; ?>"><?php echo $rsEmp['prestaciones']; ?></option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
					<i><img width="16px;" src="images/iconos/prestacionesf.png"></i>
				</div>
            </div>
            
            <div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
  					<input type="text"  value="<?php echo $rsEmp['linksitioweb']; ?>"  name="linksitioweb" title="Sitio web de <?php echo $rsEmp['nombre_empresa']; ?>" placeholder="Descripción del anuncio">
  					<br><i><img width="16px;" src="images/iconos/web2.png"></i>
  				</div>
            </div>
            
            <div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
  					<input type="text"  value="<?php echo $rsEmp['descripcion']; ?>"  name="descripcion"  title="Descripción del empleo">
  					<br><i><img width="16px;" src="images/iconos/descripcion.png"></i>
  				</div>
            </div>
            
       
		
		<div class="col-md-12" data-wow-delay=".5s">
    		<div class="page-header">
            	<h3>Datos de contacto</h3>
          	</div>
      	</div>
      	
			<div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
					<input value="<?php echo $rsEmp['telefono_oficina']; ?>" name="telefono_oficina" type="text" title="telefono de contacto" autofocus>
					<i><img width="16px;" src="images/iconos/telefonof.png"></i>
				</div>
			</div>
			
			<div class="col-md-6" data-wow-delay=".5s">
				 <div class="login-mail">
					<input value="<?php echo $rsEmp['telefono_whatsapp']; ?>"  name="telefono_whatsapp" type="text" title="Numero de Whatsapp"  autofocus>
					<i><img width="16px;" src="images/iconos/whatsaap.png"></i>
				</div>
			</div>
			<div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
					<input value="<?php echo $rsEmp['correo_contacto']; ?>"  name="correo_contacto" type="text" title="email de contacto" autofocus>
					<i><img width="16px;" src="images/iconos/emailf.png"></i>
				</div>
			</div>
			
			<div class="col-md-6" data-wow-delay=".5s">
				<div class="login-mail">
					<input value="<?php echo $rsEmp['linkGoogle']; ?>" name="linkGoogle" type="text" title="Link de Google Maps" autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
			</div>

<?php } ?>
			<div class="col-md-12 login-do animated wow" data-wow-delay=".5s">
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
mysql_select_db("encuen21_Tlaxcala"); //nombre de la base de datos.
  if(isset($_POST['registrar'])){
    //datos del cliente
    $nombre_empresa = utf8_decode($_POST['nombre_empresa']);
    $giro_empresarial = utf8_decode($_POST['giro_empresarial']);
    $municipio = utf8_decode($_POST['municipio']);
    $direccion = utf8_decode($_POST['direccion']);
    $codigo_postal = utf8_decode($_POST['codigo_postal']);
    $descripcion = utf8_decode($_POST['descripcion']);
    $sueldo = utf8_decode($_POST['sueldo']);
    $turno = $_POST['turno'];
    $horario = $_POST['horario'];
    $prestaciones = utf8_decode($_POST['prestaciones']);
    $cargo = $_POST['cargo'];
    $telefono_oficina = $_POST['telefono_oficina'];
    $telefono_whatsapp = $_POST['telefono_whatsapp'];
    $correo_contacto = $_POST['correo_contacto'];
    $linkgoogle = $_POST['linkgoogle'];
    $linksitioweb = $_POST['linksitioweb'];

  	$sqlUsuario = mysql_query("update cliente set nombreCliente='$nombre', apellidosCliente='$apellidos' where idCliente=7");
    $sqlAnuncio = mysql_query("update empleos set sueldo='$sueldo',   turno='$turno', horario='$horario', 
    	prestaciones='$prestaciones', descripcion='$descripcion', telefono_oficina='$telefono_oficina', telefono_whatsapp='$telefono_whatsapp', correo_contacto='$correo_contacto', linkgoogle='$linkgoogle', linksitioweb='$linksitioweb' where idCliente='".$_SESSION['sess_user_id']."' ");
    if($sqlAnuncio){
      echo "<script>alert('Tu información fue actuaizada correctamente.');</script>";
      echo "<script>location.href = 'empleos-perfil';</script>";
    }
  }
  ?>
  <?php
    ob_end_flush();
?>