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
<title>Editar información del anuncio</title>
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
<!-- header -->
	<div class="header">
			<div style="margin-left: 0px;" id="principal-header" class="header-grid">
				<div class="container">
    				<div id="logiyu" class="header-left" data-wow-delay=".5s">
    					<ul id="logo-icono">
    						<!--<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
    						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:contacto@encuentraentlaxcala.com">contacto@encuentraentlaxcala.com</a></li>
    						<li><i class="glyphicon glyphicon-earphone" ></i>246 204 28 32</li>-->
    						<li><a href="https://encuentraentlaxcala.com/3index"><img style="width: 20px; margin-top: -10px;" src="images/logo-icono.png"><span id="letras-eslogan">EL DIRECTORIO COMERCIAL WEB DEL ESTADO DE TLAXCALA</span></a></li>

    					</ul>
    				</div>
    				<div class="header-right" data-wow-delay=".5s">
        				<div class="header-right1 ">
        					<ul>
        		
        						
        					</ul>
        				</div>
        				<div style="margin-top: 8px;" class="header-right">
        						<ul>
        							<li><i class="glyphicon glyphicon-log-in" ></i><a href="3perfil">Mi Cuenta</a></li>
							        <li><i><img  style="width: 16px; margin-top: -3px;" src="images/iconos/salir.png"></i><a href="desconectar"> Salir</a></li>
        							<li><a title="Abrir menu"  class="burger" href="#"><span class="burger"></span></a></li>
        						</ul>
        						<div class="clearfix"> </div>
        				</div>
    				</div>
		    	</div>
			</div>
			
			<nav><a title="Cerra menu" style="color: #ff0000;" class="burger"  href="#"><span class="burger" style="color: #ff0000;"></span></a>
              <ul class="main">
                <li><a href="3index">Inicio</a></li>
                <li><a href="3conocenos">Con&#243;cenos</a></li>
                <li><a href="3ayuda">Ayuda</a></li>
              </ul>
            </nav>

            <div class="overlay"></div>
            
            <script>
            $('.burger, .overlay').click(function(){
              $('.burger').toggleClass('clicked');
              $('.overlay').toggleClass('show');
              $('nav').toggleClass('show');
              $('body').toggleClass('overflow');
            });
            </script>
            <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
           
			<div class="container">
			    <div class="logo-nav">
			        <form action="3resultadodebusqueda" method="get">
    			        <div class="col-md-4">
    					    <center><a href="https://encuentraentlaxcala.com/3index"><h1 class="animated wow pulse" data-wow-delay=".5s"><img id="logito" src="images/logo.png"></h1></a></center>
    					</div>
    					<div class="col-md-3">
    					    <b style="font-size: 17px">&#191;QUE BUSCAS?</b><br>
            				<div class="login-mail">
            					<input type="text" placeholder="Bienes raíces, Vehiculos, Celulares, Ropa, Muebles, Servicios, Empleo, etc." name="servicio" id="serviciosearch" list="datalist1"  autofocus>
        					<datalist id="datalist1">
                    		    <?php
                    		    	$connection = mysqli_connect('127.0.0.1', 'encuen21_ustlax', 'RK0gW2x^oVT7','encuen21_Tlaxcala');
                    		    	$sqlId = mysqli_query($connection, "SELECT nombreRubro FROM rubro order by nombreRubro ASC ");
                    			    while ($row=mysqli_fetch_array($sqlId)){
                    			        echo "<option value='".utf8_encode($row['nombreRubro'])."'>";
                    			    }
                    		    ?>
                    	    </datalist>
            				</div>
    					</div>
    					
    					<div class="col-md-3">
    					    <b style="font-size: 17px">&#191;EN QUE LUGAR?</b><br>
        					<select style="width: 100%; height: 40px;" name="municipio"> 
                              <option value=""  style="color:#000;">Todo el Estado</option>
                              <option value="Acuamanala de Miguel Hidalgo" style="color:#000;">Acuamanala de Miguel Hidalgo</option>
                              <option value="Altzayanca" style="color:#000;">Altzayanca</option>
                              <option value="Amaxac de Guerrero" style="color:#000;">Amaxac de Guerrero</option>
                              <option value="Apetatitlán de Antonio Carvajal" style="color:#000;">Apetatitlán de Antonio Carvajal</option>
                              <option value="Atlangatepec" style="color:#000;">Atlangatepec</option>
                              <option value="Apizaco" style="color:#000;">Apizaco</option>
                              <option value="Benito Juárez" style="color:#000;">Benito Juárez</option>
                              <option value="Calpulalpan" style="color:#000;">Calpulalpan</option>
                              <option value="Chiautempan" style="color:#000;">Chiautempan</option>
                              <option value="Contla de Juan Cuamatzi" style="color:#000;">Contla de Juan Cuamatzi</option>
                              <option value="Cuapiaxtla" style="color:#000;">Cuapiaxtla</option>
                              <option value="Cuaxomulco" style="color:#000;">Cuaxomulco</option>
                              <option value="El Carmen Tequexquitla" style="color:#000;">El Carmen Tequexquitla</option>
                              <option value="Emiliano Zapata" style="color:#000;">Emiliano ZapataEmiliano Zapata</option>
                              <option value="Españita" style="color:#000;">Españita</option>
                              <option value="Huamantla" style="color:#000;">Huamantla</option>
                              <option value="Hueyotlipan" style="color:#000;">Hueyotlipan</option>
                              <option value="Ixtacuixtla de Mariano Matamoros" style="color:#000;">Ixtacuixtla de Mariano Matamoros</option>
                              <option value="Ixtenco" style="color:#000;">Ixtenco</option>
                              <option value="La Magdalena Tlaltelulco" style="color:#000;">La Magdalena Tlaltelulco</option>
                              <option value="Lázaro Cárdenas" style="color:#000;">Lázaro Cárdenas</option>
                              <option value="Mazatecochco de José María Morelos" style="color:#000;">Mazatecochco de José María Morelos</option>
                              <option value="Muñoz de Domingo Arenas" style="color:#000;">Muñoz de Domingo Arenas</option>
                              <option value="Muñoz de Domingo Arenas" style="color:#000;">Muñoz de Domingo Arenas</option>
                              <option value="Nanacamilpa de Mariano Arista" style="color:#000;">Nanacamilpa de Mariano Arista</option>
                              <option value="Nativitas" style="color:#000;">Nativitas</option>
                              <option value="Panotla" style="color:#000;">Panotla</option>
                              <option value="Papalotla de Xicohténcatl" style="color:#000;">Papalotla de Xicohténcatl</option>
                              <option value="Sanctorum de Lázaro Cárdenas" style="color:#000;">Sanctorum de Lázaro Cárdenas</option>
                              <option value="San Damián Texoloc" style="color:#000;">San Damián Texoloc</option>
                              <option value="San Francisco Tetlanohcan" style="color:#000;">San Francisco Tetlanohcan</option>
                              <option value="San Jerónimo Zacualpan" style="color:#000;">San Jerónimo Zacualpan</option>
                              <option value="San José Teacalco" style="color:#000;">San José Teacalco</option>
                              <option value="San Juan Huactzinco" style="color:#000;">San Juan Huactzinco</option>
                              <option value="San Lorenzo Axocomanitla" style="color:#000;">San Lorenzo Axocomanitla</option>
                              <option value="San Lucas Tecopilco" style="color:#000;">San Lucas Tecopilco</option>
                              <option value="San Pablo del Monte" style="color:#000;">San Pablo del Monte</option>
                              <option value="Santa Ana Nopalucan" style="color:#000;">Santa Ana Nopalucan</option>
                              <option value="Santa Apolonia Teacalco" style="color:#000;">Santa Apolonia Teacalco</option>
                              <option value="Santa Catarina Ayometla" style="color:#000;">Santa Catarina Ayometla</option>
                              <option value="Santa Cruz Quilehtla" style="color:#000;">Santa Cruz Quilehtla</option>
                              <option value="Santa Cruz Tlaxcala" style="color:#000;">Santa Cruz Tlaxcala</option>
                              <option value="Santa Isabel Xiloxoxtla" style="color:#000;">Santa Isabel Xiloxoxtla</option>
                              <option value="Tenancingo" style="color:#000;">Tenancingo</option>
                              <option value="Teolocholco" style="color:#000;">Teolocholco</option>
                              <option value="Tepetitla de Lardizábal" style="color:#000;">Tepetitla de Lardizábal</option>
                              <option value="Tepeyanco" style="color:#000;">Tepeyanco</option>
                              <option value="Terrenate" style="color:#000;">Terrenate</option>
                              <option value="Tetla de la Solidaridad" style="color:#000;">Tetla de la Solidaridad</option>
                              <option value="Tetlatlahuca" style="color:#000;">Tetlatlahuca</option>
                              <option value="Tlaxcala" style="color:#000;">Tlaxcala</option>
                              <option value="Tlaxco" style="color:#000;">Tlaxco</option>
                              <option value="Tocatlán" style="color:#000;">Tocatlán</option>
                              <option value="Totolac" style="color:#000;">Totolac</option>
                              <option value="Tzompantepec" style="color:#000;">Tzompantepec</option>
                              <option value="Xaloztoc" style="color:#000;">Xaloztoc</option>
                              <option value="Xaltocan" style="color:#000;">Xaltocan</option>
                              <option value="Xicohtzinco" style="color:#000;">Xicohtzinco</option>
                              <option value="Yauhquemecan" style="color:#000;">Yauhquemecan</option>
                              <option value="Zacatelco" style="color:#000;">Zacatelco</option>
                              <option value="Zitlaltepec de Trinidad Sánchez Santos" style="color:#000;">Zitlaltepec de Trinidad Sánchez Santos</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div id="login-boton2" class="login-do animated wow fadeInRight" data-wow-delay=".5s"><br>
                                <label class="hvr-sweep-to-top login-sub">
    						        <input style="background: #ff0000;" type="submit" id="botoN"  value="Buscar">
    					        </label>
    				        </div>
    					</div>
					</form>
				</div>
		</div>
	</div>
<!-- //header -->

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
      	        <div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input value="<?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'; } ?>" readonly="readonly" name="nombre" type="text" placeholder="Nombre(s) "  autofocus>
					<i><img width="16px;" src="images/iconos/usuario.png"></i>
				</div>
      	    </div>
          	<div class="col-md-6" data-wow-delay=".5s">
          	    <div style="border-color: #800000; border-width: 1px;"  class="login-mail">
					<input  value="<?php if (isset($_SESSION['apellidosCliente'])) { echo ''.$_SESSION['apellidosCliente'].'&nbsp;'; } ?>" readonly="readonly" name="apellidos" type="text" placeholder="Apellidos"  autofocus>
					<i><img width="16px;" src="images/iconos/usuario.png"></i>
				</div>
          	</div>
          	<div class="col-md-6" data-wow-delay=".5s">
          					<div style="border-color: #800000; border-width: 1px;"  class="login-mail">
					<input type="text" value="<?php if (isset($_SESSION['correoCliente'])) { echo ''.$_SESSION['correoCliente'].'&nbsp;'; } ?>" readonly="readonly">
					<i><img width="16px;" src="images/iconos/emailf.png"></i>
				</div>
          	</div>
          	<div class="col-md-6" data-wow-delay=".5s">
          	    <div style="border-color: #800000; border-width: 1px;"  class="login-mail">
					<input type="password" name="contrasena" type="password" value="***************" readonly="readonly">
					<i><a style="text-decoration: none;" href="3Actualizar_contrasena"><img width="16px;" src="images/iconos/contrasef.png"> Editar contrase&#241;a</i></a>
				</div>
          	</div>



		<div class="page-header">
        	<h3>Datos de la empresa y/o servicio</h3>
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
    $query = "SELECT idAnuncio, nombreNegocio, descripcion, categoria, subcategoria, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, facebook, twitter, whatsapp, linkSitioWeb FROM anuncios where idCliente='".$_SESSION['sess_user_id']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>

             <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["sess_username"]=$rsEmp['idAnuncio'];?>
      		        	<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" type="text" value="<?php echo $rsEmp['nombreNegocio']; ?>" type="text" placeholder="Nombre de la empresa o anunciante" required autofocus disabled="disabled">
					<i><img width="16px;" src="images/iconos/empresaf.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #079F37; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" value="<?php echo $rsEmp['correoNegocio']; ?>" name="correoEmpresa" type="text" placeholder="E-mail de contacto" required autofocus>
					<i><img width="16px;" src="images/iconos/emailf.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" type="text" name="categoria" type="text" value="<?php echo $rsEmp['categoria']; ?>"  placeholder="Categor&#237;a" disabled="disabled">
					<i> <img width="16px;" src="images/iconos/categoriaf.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" type="text" name="subcategoria" value="<?php echo $rsEmp['subcategoria']; ?>" disabled="disabled" required placeholder="Subcategor&#237;a" autofocus>
					<i><img width="16px;" src="images/iconos/subcategoria.png"></i>
				</div>
            </div>
            
            
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #800000; border-width: 1px;" class="login-mail">
				<input style="background: #fff;" type="text"  value="<?php echo $rsEmp['municipio']; ?>"  placeholder="Municipio" disabled="disabled">
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" value="Tlaxcala" disabled="disabled"  type="text" placeholder="Ciudad" required autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" value="<?php echo $rsEmp['domicilio']; ?>" disabled="disabled"  type="text" placeholder="Domicilio" required autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" value="<?php echo $rsEmp['coloniaLocalidad']; ?>" disabled="disabled"  type="text" placeholder="Localidad / Colonia / Secci贸n / Pueblo" required>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #800000; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" value="<?php echo $rsEmp['codPostal']; ?>" disabled="disabled" type="text" placeholder="&#35; Codigo Postal" required autofocus>
					<i><img width="16px;" src="images/iconos/domiciliof.png"></i>
				</div>
            </div>
            <div class="col-md-6" data-wow-delay=".5s">
                <div style="border-color: #079F37; border-width: 1px;" class="login-mail">
					<input style="background: #fff;" value="<?php echo $rsEmp['telefono']; ?>"  name="telefono" type="text" placeholder="Telefono" required autofocus>
					<i><img width="16px;" src="images/iconos/telefonof.png"></i>
				</div>
            </div>
  			<div class="col-md-12">
				<div style="border-color: #079F37; border-width: 1px;" class="login-mail">
  					<input style="background: #fff;" value="<?php echo $rsEmp['descripcion']; ?>"  name="descripcion" type="text" required placeholder="Descripci&#243;n del anuncio">
  					<i><img width="16px;" src="images/iconos/descripcion.png"></i>
  				</div>
  			</div>
        <div class="col-md-12">
		<div class="page-header">
        	<h3>Redes sociales</h3>
      	</div>
      	</div>
			<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #079F37; border-width: 1px;" class="login-mail">
					<input  style="background: #fff;" value="<?php echo $rsEmp['facebook']; ?>" name="facebook" type="text" placeholder="Facebook (https://www.facebook.com/EncuentraenTlaxcala)" autofocus>
					<i><img width="16px;" src="images/iconos/facebook.png"></i>
				</div>
				 
			</div>
			<div class="col-md-6" data-wow-delay=".5s">
				<div style="border-color: #079F37; border-width: 1px;" class="login-mail">
					<input  style="background: #fff;" value="<?php echo $rsEmp['twitter']; ?>"  name="twitter" type="text" placeholder="Twitter (https://www.twitter.com/EncuentraenTlaxcala)" autofocus>
					<i><img width="16px;" src="images/iconos/twitter1.png"></i>
				</div>
			</div>

<?php } ?>

			<div class="col-md-12 login-do animated wow " data-wow-delay=".5s">
				<label class="hvr-sweep-to-top login-sub">
					<input type="submit"  name="registrar" value="Actualizar">
					</label>
			</div>
			<div class="clearfix"> </div><br><br><br>
			</form>
		</div>
    </div>
</div>

<link href="css/responsive.css" rel="stylesheet" type="text/css" media="all" />
<!-- footer PC-->
<div style="margin-left: 0px;" id="footer-pc">
	<div class="footer">
	    <div class="col-md-12">
			<div class="col-md-3">
			   <center><b style="color: #ffffff; font-size: 19px;">INFORMACI&#211;N CORPORATIVA</b></center><br>
			        <ul style="margin-left: 40px;">
    			        <li><a href="" style="color: #ffffff;">Informaci&#243;n corporativa</a></li>
    			        <li><a href="" style="color: #ffffff;">Publicidad en encuentra en Tlaxcala</a></li>
    			        <li><a href="" style="color: #ffffff;">Seguridad en Encuentra en Tlaxcala</a></li>
    			        <li><a href="" style="color: #ffffff;">Aviso legal</a></li>
			        </ul>
			</div>
			<div class="col-md-3">
			    <center><b style="color: #ffffff; font-size: 19px;">CATEGOR&#205;AS DESTACADAS</b></center><br>
			        <ul style="margin-left: 55px;">
			            <li><a href="3resultadodebusqueda?servicio=Automotriz&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/autos.png"> Autos, Camiones y Motos</a></li>
			            <li><a href="3resultadodebusqueda?servicio=BIenes+raíces&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/bienes-raices.png"> Bienes ra&#237;ces</a></li>
			            <li><a href="3resultadodebusqueda?servicio=Tecnologías+e+informática&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/tecnologia-informatica.png"> Tecnolog&#237;a e Inform&#225;tica</a></li>
			            <li><a href="3resultadodebusqueda?servicio=Mascotas&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/mascotas.png"> Mascotas</a></li>
			            <li><a href="3resultadodebusqueda?servicio=Ropa&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/moda.png"> Moda</a></li>
			        </ul>
			</div>
			<div class="col-md-2">
			    <center><b style="color: #ffffff; font-size: 19px;">REDES SOCIALES</b></center><br>
			        <ul style="margin-left: 50px;">
			            <li><a href="https://facebook.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/Facebook-logo.png"> Facebook</a></li>
			            <li><a href="https://twitter.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/twitter.png"> Twitter</a></li>
			            <li><a href="https://instagram.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/instagram.png"> Instagram</a></li>
			            <li><a href="https://youtube.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/youtube-logo.png"> Youtube</a></li>
			        </ul>
			</div>
			<div class="col-md-2">
			     <center><b style="color: #ffffff; font-size: 19px;">CONTRATAR PAQUETE</b></center><br>
			        <ul style="margin-left: 50px;">
			            <li><a href="#contratar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> VIP</a></li>
			        </ul>
			</div>
			<div class="col-md-2">
			     <center><b style="color: #ffffff; font-size: 19px;">CLIENTES PREMIUM</b></center><br>
			        <ul style="margin-left: 50px;">
			            <li><a href="3perfil" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> Mi Cuenta</a></li>
			            <li><a href="desconectar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/salir.png"> Salir</a></li>
			        </ul>
			</div>
		</div><br><br><br><br><br><br><br><br>
			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>&copy 2018 Encuentra en Tlaxcala</p>
			</div>
		
	</div>
</div>
<!-- //footer -->


<!-- footer movil -->
<div id="footer-movil">
	<div class="footer">
	    <div class="col-md-12">
			<div class="col-md-3">
			   <center><b style="color: #ffffff; font-size: 19px;">INFORMACI&#211;N CORPORATIVA</b></center><br>
			  <center>
			        <ul>
    			        <li><a href="" style="color: #ffffff;">Informaci&#243;n corporativa</a></li>
    			        <li><a href="" style="color: #ffffff;">Publicidad en encuentra en Tlaxcala</a></li>
    			        <li><a href="" style="color: #ffffff;">Seguridad en Encuentra en Tlaxcala</a></li>
    			        <li><a href="" style="color: #ffffff;">Aviso legal</a></li>
			        </ul>
			   </center>
			</div>
			<div class="col-md-3"><br>
			    <center><b style="color: #ffffff; font-size: 19px;">CATEGOR&#205;AS DESTACADAS</b></center><br>
			    <center>
			        <ul>
			            <li><a href="3resultadodebusqueda?servicio=Automotriz&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/autos.png"> Autos, Camiones y Motos</a></li>
			            <li><a href="3resultadodebusqueda?servicio=BIenes+raíces&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/bienes-raices.png"> Bienes ra&#237;ces</a></li>
			            <li><a href="3resultadodebusqueda?servicio=Tecnologías+e+informática&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/tecnologia-informatica.png"> Tecnolog&#237;a e Inform&#225;tica</a></li>
			            <li><a href="3resultadodebusqueda?servicio=Mascotas&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/mascotas.png"> Mascotas</a></li>
			            <li><a href="3resultadodebusqueda?servicio=Ropa&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/moda.png"> Moda</a></li>
			        </ul>
			    </center>
			</div>
			<div class="col-md-3"><br>
			    <center><b style="color: #ffffff; font-size: 19px;">REDES SOCIALES</b></center><br>
			    <center>
			        <ul>
			            <li><a href="https://facebook.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/Facebook-logo.png"> Facebook</a></li>
			            <li><a href="https://twitter.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/twitter.png"> Twitter</a></li>
			            <li><a href="https://instagram.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/instagram.png"> Instagram</a></li>
			            <li><a href="https://youtube.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/youtube-logo.png"> Youtube</a></li>
			        </ul>
			    </center> 
			    
			</div>
			<div class="col-md-2"><br>
			     <center><b style="color: #ffffff; font-size: 19px;">CONTRATAR PAQUETE</b></center><br>
			     <center>
			        <ul>
			            <li><a href="#contratar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> VIP</a></li>
			        </ul>
			    </center>
			</div>
			<div class="col-md-2"><br>
			     <center><b style="color: #ffffff; font-size: 19px;">PERFIL</b></center><br>
			     <center>
			        <ul>
			            <li><a href="3perfil" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> Mi Cuenta</a></li>
			            <li><a href="desconectar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/salir.png"> Salir</a></li>
			        </ul>
			    </center>
			</div>
		</div><br>
			<div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
				<p>&copy 2018 Encuentra en Tlaxcala</p>
			</div>
		
	</div>
</div>
<!-- //footer -->

<link rel="stylesheet" href="https://www.jose-aguilar.com/scripts/jquery/remodal/css/remodal.css">
<link rel="stylesheet" href="https://www.jose-aguilar.com/scripts/jquery/remodal/css/remodal-default-theme.css">
<script src="https://www.jose-aguilar.com/scripts/jquery/remodal/js/remodal.js"></script>

        <div class="remodal" data-remodal-id="contratar" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"><br>
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div class="col-sm-12">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 id="BASICO" class="panel-title">Contrata un paquete llama o manda un email</h3>
                </div>
                <div class="panel-body">
                  <img width="20px;" src="images/iconos/persona.png"> Lic. Justino Nava<br>
                  <a href="https://api.whatsapp.com/send?phone=522461068540&text=Hola%20quisiera%20saber%20más%20información%20sobre%20el%20paquetes%20VIP%20de%20Encuentra%20en%20Tlaxcala" target="_blank" style="text-decoration: none; color: #33BB04;"><img width="20px;" src="images/iconos/whatsapp.png"> 246 106 85 40</a><br>
                  <img width="20px;" src="images/iconos/email.png"> contacto@encuentraentlaxcala.com<br>
                </div>
                
                <div class="panel-body">
                  <img width="20px;" src="images/iconos/persona.png"> Lic. Alfredo Guti&eacute;rrez<br>
                  <a href="tel: 2464582894" style="text-decoration: none; color: #BB0404;"><img width="20px;" src="images/iconos/telefono.png"> 246 458 28 94</a><br>
                  <img width="20px;" src="images/iconos/email.png"> contacto@encuentraentlaxcala.com<br>
                </div>
              </div>
            </div><!-- /.col-sm-4 -->
        </div>
</body>
</html>



  <?php
error_reporting(E_ALL ^ E_DEPRECATED);
  mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
  mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.
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

    $whats = $_POST['whats'];
    $face = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $web = $_POST['linkweb'];

  	$sqlUsuario = mysql_query("update cliente set nombreCliente='$nombre', apellidosCliente='$apellidos' where idCliente=7");
    $sqlAnuncio = mysql_query("update anuncios set descripcion='$desc',   telefono='$telefono', correoNegocio='$correoEmpresa', 
    	whatsapp='$whats',facebook='$face', twitter='$twitter',  linksitioweb='$web' where idCliente='".$_SESSION['sess_user_id']."' ");
    if($sqlAnuncio){
      echo "<script>alert('Tu información fue actuaizada correctamente.');</script>";
      echo "<script>location.href = '3perfil';</script>";
    }
  }
  ?>
  <?php
    ob_end_flush();
?>