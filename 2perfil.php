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
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php
     include('contador.php');
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<title><?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'.$_SESSION['apellidosCliente'].''; } ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
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
<!-- Add jQuery library -->



  <script type="text/javascript" src="virus/lib/jquery-1.10.2.min.js"></script>


  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="virus/source/jquery.fancybox.pack.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="virus/source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="virus/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="virus/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->

  <script type="text/javascript">
    $(document).ready(function() {
    
      $('.fancybox').fancybox();



      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      


      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>
  <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
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

</head>
	
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
    						<li><a href="https://encuentraentlaxcala.com/2index"><img style="width: 20px; margin-top: -10px;" src="images/logo-icono.png"><span id="letras-eslogan">EL DIRECTORIO COMERCIAL WEB DEL ESTADO DE TLAXCALA</span></a></li>

    					</ul>
    				</div>
    				<div class="header-right" data-wow-delay=".5s">
        				<div class="header-right1 ">
        					<ul>
        		
        						
        					</ul>
        				</div>
        				<div style="margin-top: 8px;" class="header-right">
        						<ul>
        							<li><i class="glyphicon glyphicon-log-in" ></i><a href="2perfil">Mi Cuenta</a></li>
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
                <li><a href="2index">Inicio</a></li>
                <li><a href="2conocenos">Con&#243;cenos</a></li>
                <li><a href="2ayuda">Ayuda</a></li>
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
			        <form action="2resultadodebusqueda" method="get">
    			        <div class="col-md-4">
    					    <center><a href="https://encuentraentlaxcala.com/2index"><h1 class="animated wow pulse" data-wow-delay=".5s"><img id="logito" src="images/logo.png"></h1></a></center>
    					</div>
    					<div class="col-md-3">
    					    <b style="font-size: 17px">&#191;QUE BUSCAS?</b><br>
            				<div class="login-mail">
            					<input type="text" placeholder="Bienes ra��ces, Vehiculos, Celulares, Ropa, Muebles, Servicios, Empleo, etc." name="servicio" id="serviciosearch" list="datalist1"  autofocus>
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
                              <option value="Apetatitl��n de Antonio Carvajal" style="color:#000;">Apetatitl��n de Antonio Carvajal</option>
                              <option value="Atlangatepec" style="color:#000;">Atlangatepec</option>
                              <option value="Apizaco" style="color:#000;">Apizaco</option>
                              <option value="Benito Ju��rez" style="color:#000;">Benito Ju��rez</option>
                              <option value="Calpulalpan" style="color:#000;">Calpulalpan</option>
                              <option value="Chiautempan" style="color:#000;">Chiautempan</option>
                              <option value="Contla de Juan Cuamatzi" style="color:#000;">Contla de Juan Cuamatzi</option>
                              <option value="Cuapiaxtla" style="color:#000;">Cuapiaxtla</option>
                              <option value="Cuaxomulco" style="color:#000;">Cuaxomulco</option>
                              <option value="El Carmen Tequexquitla" style="color:#000;">El Carmen Tequexquitla</option>
                              <option value="Emiliano Zapata" style="color:#000;">Emiliano ZapataEmiliano Zapata</option>
                              <option value="Espa�0�9ita" style="color:#000;">Espa�0�9ita</option>
                              <option value="Huamantla" style="color:#000;">Huamantla</option>
                              <option value="Hueyotlipan" style="color:#000;">Hueyotlipan</option>
                              <option value="Ixtacuixtla de Mariano Matamoros" style="color:#000;">Ixtacuixtla de Mariano Matamoros</option>
                              <option value="Ixtenco" style="color:#000;">Ixtenco</option>
                              <option value="La Magdalena Tlaltelulco" style="color:#000;">La Magdalena Tlaltelulco</option>
                              <option value="L��zaro C��rdenas" style="color:#000;">L��zaro C��rdenas</option>
                              <option value="Mazatecochco de Jos�� Mar��a Morelos" style="color:#000;">Mazatecochco de Jos�� Mar��a Morelos</option>
                              <option value="Mu�0�9oz de Domingo Arenas" style="color:#000;">Mu�0�9oz de Domingo Arenas</option>
                              <option value="Mu�0�9oz de Domingo Arenas" style="color:#000;">Mu�0�9oz de Domingo Arenas</option>
                              <option value="Nanacamilpa de Mariano Arista" style="color:#000;">Nanacamilpa de Mariano Arista</option>
                              <option value="Nativitas" style="color:#000;">Nativitas</option>
                              <option value="Panotla" style="color:#000;">Panotla</option>
                              <option value="Papalotla de Xicoht��ncatl" style="color:#000;">Papalotla de Xicoht��ncatl</option>
                              <option value="Sanctorum de L��zaro C��rdenas" style="color:#000;">Sanctorum de L��zaro C��rdenas</option>
                              <option value="San Dami��n Texoloc" style="color:#000;">San Dami��n Texoloc</option>
                              <option value="San Francisco Tetlanohcan" style="color:#000;">San Francisco Tetlanohcan</option>
                              <option value="San Jer��nimo Zacualpan" style="color:#000;">San Jer��nimo Zacualpan</option>
                              <option value="San Jos�� Teacalco" style="color:#000;">San Jos�� Teacalco</option>
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
                              <option value="Tepetitla de Lardiz��bal" style="color:#000;">Tepetitla de Lardiz��bal</option>
                              <option value="Tepeyanco" style="color:#000;">Tepeyanco</option>
                              <option value="Terrenate" style="color:#000;">Terrenate</option>
                              <option value="Tetla de la Solidaridad" style="color:#000;">Tetla de la Solidaridad</option>
                              <option value="Tetlatlahuca" style="color:#000;">Tetlatlahuca</option>
                              <option value="Tlaxcala" style="color:#000;">Tlaxcala</option>
                              <option value="Tlaxco" style="color:#000;">Tlaxco</option>
                              <option value="Tocatl��n" style="color:#000;">Tocatl��n</option>
                              <option value="Totolac" style="color:#000;">Totolac</option>
                              <option value="Tzompantepec" style="color:#000;">Tzompantepec</option>
                              <option value="Xaloztoc" style="color:#000;">Xaloztoc</option>
                              <option value="Xaltocan" style="color:#000;">Xaltocan</option>
                              <option value="Xicohtzinco" style="color:#000;">Xicohtzinco</option>
                              <option value="Yauhquemecan" style="color:#000;">Yauhquemecan</option>
                              <option value="Zacatelco" style="color:#000;">Zacatelco</option>
                              <option value="Zitlaltepec de Trinidad S��nchez Santos" style="color:#000;">Zitlaltepec de Trinidad S��nchez Santos</option>
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">PERFIL B&Aacute;SICO</h2>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
<!--content-->
<div class="container">
	<div class="page">

      <div class="row wow fadeInRight animated">
          <div class="col-sm-12">
            <center>
                <a href="2editar-imagenes">ACTUALIZAR IM&Aacute;GENES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <a href="2editar-perfil">ACTUALIZAR DATOS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <a href="2Actualizar_contrasena">ACTUALIZAR CONTRASE&#209;A</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                  <?php

$link = mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');
if (!$link) {
die('No se puede conectar: ' . mysql_error());
}

$db_selected = mysql_select_db('encuen21_Tlaxcala', $link);
if (!$db_selected) {
die ('Error al seleccionar BD : ' . mysql_error());
}
             $query = "SELECT * FROM anuncios where idCliente='".$_SESSION['sess_username']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>
                                 <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["idAnuncio"]=$rsEmp['idCliente'];?>

                                <?php echo "<a href='2basico?id=$rsEmp[idCliente]'>VER ANUNCIO</a>"; ?> 
                                <?php } ?>
                                <br><br>

                                
   </center>
          </div>
        <div class="col-sm-7">
          <div class="">
             <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">INFORMACI&#211;N DEL USUARIO</h3>
            </div>
            <div class="panel-body">
              <b>ID CLIENTE:</b> <?php if (isset($_SESSION['sess_user_id'])) { echo ''.$_SESSION['sess_user_id'].'B'; } ?><br>
              <b>NOMBRE:</b> <?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'.$_SESSION['apellidosCliente'].''; } ?><br>
              <b>CORREO:</b> <?php if (isset($_SESSION['correoCliente'])) { echo ''.$_SESSION['correoCliente'].'&nbsp;'; } ?>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">INFORMACI&#211;N DEL ANUNCIO</h3>
            </div>
            <div class="panel-body">
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
    $query = "SELECT idAnuncio, nombreNegocio, descripcion, categoria, subcategoria, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, facebook, twitter, img1, img2 FROM anuncios where idCliente='".$_SESSION['sess_user_id']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>

             <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["sess_username"]=$rsEmp['idAnuncio'];?>


              <b>NOMBRE DEL NEGOCIO:</b> <?php echo $rsEmp['nombreNegocio']; ?><br>
              <b>DESCRIPCI&#211;N:</b> <?php echo $rsEmp['descripcion']; ?><br>
              <b>CATEGOR&Iacute;A:</b> <?php echo $rsEmp['categoria']; ?><br>
              <b>SUBCATEGOR&Iacute;A:</b> <?php echo $rsEmp['subcategoria']; ?><br>

              <b>DOMICILIO:</b> <?php echo $rsEmp['domicilio']; ?><br>
			  <b>COD.POSTAL:</b> <?php echo $rsEmp['codPostal']; ?><br>
			  <b>ESTADO:</b> Tlaxcala<br>
			  <b>MUNICIPIO:</b> <?php echo $rsEmp['municipio']; ?><br>
			  <b>COLONIA/LOCALIDAD:</b> <?php echo $rsEmp['coloniaLocalidad']; ?><br>
			  <b>TEL&Eacute;FONO DE CONTACTO:</b> <?php echo $rsEmp['telefono']; ?><br>
			  <b>CORREO DE CONTACTO:</b> <?php echo $rsEmp['correoNegocio']; ?><br>
			  <b>FACEBOOK:</b> <a target="_blank" href="<?php echo $rsEmp['facebook']; ?>"><?php echo $rsEmp['facebook']; ?></a><br>
			  <b>TWITTER:</b> <a target="_blank" href="<?php echo $rsEmp['twitter']; ?>"><?php echo $rsEmp['twitter']; ?></a><br>

            </div>
          </div>

           <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">MULTIMEDIA DEL ANUNCIO</h3>
            </div>
            <div class="panel-body">
              <div class="form-body">
        
          <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img1']; ?>"><img width="80px;" src="<?php echo $rsEmp['img1']; ?>" alt="" /></a>

          <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img2']; ?>"><img width="80px;" src="<?php echo $rsEmp['img2']; ?>" alt="" /></a>

        
                                                </div>

            </div>
          </div>

<?php } ?>


          </div>


         
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Contrata un paquete llama o manda un email</h3>
            </div>
            <div class="panel-body">
              <img width="20px;" src="images/iconos/persona.png"> Lic. Justino Nava<br>
              <a href="https://api.whatsapp.com/send?phone=522461068540&text=Hola%20quisiera%20saber%20más%20información%20sobre%20los%20paquetes%20PLUS%20y%20VIP%20de%20Encuentra%20en%20Tlaxcala" target="_blank" style="text-decoration: none; color: #33BB04;"><img width="20px;" src="images/iconos/whatsapp.png"> 246 106 85 40</a><br>
              <img width="20px;" src="images/iconos/email.png"> contacto@encuentraentlaxcala.com<br>
            </div>
            
            <div class="panel-body">
              <img width="20px;" src="images/iconos/persona.png"> Lic. Alfredo Guti&eacute;rrez<br>
              <a href="tel: 2464582894" style="text-decoration: none; color: #BB0404;"><img width="20px;" src="images/iconos/telefono.png"> 246 458 28 94</a><br>
              <img width="20px;" src="images/iconos/email.png"> contacto@encuentraentlaxcala.com<br>
            </div>
          </div>

          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">PAQUETES QUE PODR&Aacute;S CONTRATAR</h3>
            </div>
            <div class="panel-body">
              <!--<img width="20px;" src="images/iconos/paquete0.png">
              <span>PAQUETE BASICO</span><br><br>-->
              <img width="30px;" src="images/iconos/paquete1.png">
              PAQUETE PLUS<br><br>
              <img width="40px;" src="images/iconos/paquete2.png">
              PAQUETE VIP
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
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
			            <li><a href="2resultadodebusqueda?servicio=Automotriz&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/autos.png"> Autos, Camiones y Motos</a></li>
			            <li><a href="2resultadodebusqueda?servicio=BIenes+ra��ces&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/bienes-raices.png"> Bienes ra&#237;ces</a></li>
			            <li><a href="2resultadodebusqueda?servicio=Tecnolog��as+e+inform��tica&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/tecnologia-informatica.png"> Tecnolog&#237;a e Inform&#225;tica</a></li>
			            <li><a href="2resultadodebusqueda?servicio=Mascotas&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/mascotas.png"> Mascotas</a></li>
			            <li><a href="2resultadodebusqueda?servicio=Ropa&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/moda.png"> Moda</a></li>
			        </ul>
			</div>
			<div class="col-md-2">
			    <center><b style="color: #ffffff; font-size: 19px;">REDES SOCIALES</b></center><br>
			        <ul style="margin-left: 40px;">
			            <li><a href="https://facebook.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/Facebook-logo.png"> Facebook</a></li>
			            <li><a href="https://twitter.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/twitter.png"> Twitter</a></li>
			            <li><a href="https://instagram.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/instagram.png"> Instagram</a></li>
			            <li><a href="https://youtube.com" style="color: #ffffff;" target="_blank"><img width="20px;" src="images/iconos/youtube-logo.png"> Youtube</a></li>
			        </ul>
			</div>
			<div class="col-md-2">
			     <center><b style="color: #ffffff; font-size: 19px;">CONTRATAR PAQUETE</b></center><br>
			        <ul style="margin-left: 50px;">
			            <li><a href="#contratar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> PLUS</a></li>
			            <li><a href="#contratar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> VIP</a></li>
			        </ul>
			</div>
			<div class="col-md-2">
			     <center><b style="color: #ffffff; font-size: 19px;">CLIENTES PREMIUM</b></center><br>
			        <ul style="margin-left: 50px;">
			            <li><a href="2perfil" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> Mi Cuenta</a></li>
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
			            <li><a href="2resultadodebusqueda?servicio=Automotriz&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/autos.png"> Autos, Camiones y Motos</a></li>
			            <li><a href="2resultadodebusqueda?servicio=BIenes+ra��ces&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/bienes-raices.png"> Bienes ra&#237;ces</a></li>
			            <li><a href="2resultadodebusqueda?servicio=Tecnolog��as+e+inform��tica&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/tecnologia-informatica.png"> Tecnolog&#237;a e Inform&#225;tica</a></li>
			            <li><a href="2resultadodebusqueda?servicio=Mascotas&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/mascotas.png"> Mascotas</a></li>
			            <li><a href="2resultadodebusqueda?servicio=Ropa&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/moda.png"> Moda</a></li>
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
			            <li><a href="#contratar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> PLUS</a></li>
			            <li><a href="#contratar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> VIP</a></li>
			        </ul>
			    </center>
			</div>
			<div class="col-md-2"><br>
			     <center><b style="color: #ffffff; font-size: 19px;">PERFIL</b></center><br>
			     <center>
			        <ul>
			            <li><a href="2perfil" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> Mi Cuenta</a></li>
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
                  <a href="https://api.whatsapp.com/send?phone=522461068540&text=Hola%20quisiera%20saber%20m��s%20informaci��n%20sobre%20los%20paquetes%20PLUS%20y%20VIP%20de%20Encuentra%20en%20Tlaxcala" target="_blank" style="text-decoration: none; color: #33BB04;"><img width="20px;" src="images/iconos/whatsapp.png"> 246 106 85 40</a><br>
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
    ob_end_flush();
?>