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

<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<!DOCTYPE html>
<html>
<head>
<title><?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'.$_SESSION['apellidosCliente'].''; } ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset=UTF-8>
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
#border-monster{
    border-right: 2px #079F37 dashed; 
    border-left: 2px #079F37 dashed; 
    border-bottom: 2px #079F37 dashed; 
    border-top: 2px #079F37 solid;
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
    						<li><a href="https://encuentraentlaxcala.com/4index"><img style="width: 20px; margin-top: -10px;" src="images/logo-icono.png"><span id="letras-eslogan">EL DIRECTORIO COMERCIAL WEB DEL ESTADO DE TLAXCALA</span></a></li>

    					</ul>
    				</div>
    				<div class="header-right" data-wow-delay=".5s">
        				<div class="header-right1 ">
        					<ul>
        		
        						
        					</ul>
        				</div>
        				<div style="margin-top: 8px;" class="header-right">
        						<ul>
        							<li><i class="glyphicon glyphicon-log-in" ></i><a href="4perfil">Mi Cuenta</a></li>
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
                <li><a href="4index">Inicio</a></li>
                <li><a href="4conocenos">Con&#243;cenos</a></li>
                <li><a href="4ayuda">Ayuda</a></li>
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
			        <form action="4resultadodebusqueda" method="get">
    			        <div class="col-md-4">
    					<center><a href="https://encuentraentlaxcala.com/4index"><h1 class="animated wow pulse" data-wow-delay=".5s"><img id="logito" src="images/logo.png"></h1></a></center>
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
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">PERFIL VIP</h2>
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
               <a href="4editar-imagenes">ACTUALIZAR IM&Aacute;GENES</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
               <a href="4editar-audio">ACTUALIZAR AUDIO</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
               <a href="4editar-perfil">ACTUALIZAR DATOS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <a href="4Actualizar_contrasena">ACTUALIZAR CONTRASE&#209;A</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
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
             $query = "SELECT * FROM anuncios where idCliente='".$_SESSION['sess_username']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>
                                 <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["idAnuncio"]=$rsEmp['idCliente'];?>

                                <?php echo "<a href='4vip?id=$rsEmp[idCliente]&amp;nombreNegocio=$rsEmp[nombreNegocio]&amp;categoria=$rsEmp[categoria]'>VER ANUNCIO</a>"; ?> 
                                <?php } ?><br><br>

                                
   </center>
          
          </div>
          
        <div class="col-sm-7">
          <div class="">
           
          
             <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">INFORMACI&#211;N DEL USUARIO</h3>
            </div>
            <div class="panel-body">
              <b>ID CLIENTE:</b> <?php if (isset($_SESSION['sess_user_id'])) { echo ''.$_SESSION['sess_user_id'].'V'; } ?><br>
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
   $query = "SELECT idAnuncio, nombreNegocio, descripcion, categoria, subcategoria, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, facebook, twitter, whatsapp, linkSitioWeb, audio, img1, img2, img3, img4, img5, linkYoutube, linkGoogle FROM anuncios where idCliente='".$_SESSION['sess_user_id']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>

             <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["sess_username"]=$rsEmp['idAnuncio'];?>


              <b>NOMBRE DEL NEGOCIO:</b> <?php echo ($rsEmp['nombreNegocio']); ?><br>
              <b>DESCRIPCI&#211;N:</b> <?php echo $rsEmp['descripcion']; ?><br>
              <b>CATEGOR&Iacute;A:</b> <?php echo $rsEmp['categoria']; ?><br>
              <b>SUBCATEGOR&Iacute;A:</b> <?php echo $rsEmp['subcategoria']; ?><br>


              <b>DOMICILIO:</b> <?php echo $rsEmp['domicilio']; ?><br>
			  <b>COD. POSTAL:</b> <?php echo $rsEmp['codPostal']; ?><br>
			  <b>MUNICIPIO:</b> <?php echo $rsEmp['municipio']; ?><br>
			  <!--<b>CIUDAD:</b> <?php echo $rsEmp['ciudad']; ?><br>-->
			  <b>COLONIA/LOCALIDAD:</b> <?php echo $rsEmp['coloniaLocalidad']; ?><br>
			  <b>TEL&Eacute;FONO DE CONTACTO:</b> <?php echo $rsEmp['telefono']; ?><br>
			  <b>CORREO DE CONTACTO:</b> <?php echo $rsEmp['correoNegocio']; ?><br>
        <b>WHATSAPP:</b> <?php echo $rsEmp['whatsapp']; ?><br>
			  <b>FACEBOOK:</b> <a target="_blank" href="<?php echo $rsEmp['facebook']; ?>"><?php echo $rsEmp['facebook']; ?></a><br>
        <b>TWITTER:</b> <a target="_blank" href="<?php echo $rsEmp['twitter']; ?>"><?php echo $rsEmp['twitter']; ?></a><br>
        <b>SITIO WEB:</b> <a target="_blank" href="<?php echo $rsEmp['linkSitioWeb']; ?>"> <?php echo $rsEmp['linkSitioWeb']; ?></a><br>
            </div>
          </div>



          </div>


         
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-1"></div>
         <div class="col-sm-4">
         
                     <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">MULTIMEDIA DEL ANUNCIO</h3>
            </div>
            <div class="panel-body">
              <div class="form-body">
        <b>FOTOS DEL ANUNCIO</b><br>
          <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img1']; ?>"><img width="80px;" src="<?php echo $rsEmp['img1']; ?>" alt="" /></a>

          <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img2']; ?>"><img width="80px;" src="<?php echo $rsEmp['img2']; ?>" alt="" /></a>

          <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img3']; ?>"><img width="80px;" src="<?php echo $rsEmp['img3']; ?>" alt="" /></a>

          <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img4']; ?>"><img width="80px;" src="<?php echo $rsEmp['img4']; ?>" alt="" /></a>

          <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img5']; ?>"><img width="80px;" src="<?php echo $rsEmp['img5']; ?>" alt="" /></a><br><br>
          <b>AUDIO DEL ANUNCIO</b><br>
          <audio controls>
<source src="<?php echo $rsEmp['audio']; ?>">
</audio><br><br>
<b>VIDEO DEL ANUNCIO</b><br>
 
 <iframe width="330" height="250" src="<?php echo $rsEmp['linkYoutube']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 
 <br><br>
<b>UBICACI&Oacute;N DE TU EMPRESA/SERVICIO</b><br>


<iframe src="<?php echo $rsEmp['linkGoogle']; ?>" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>

            </div>
          </div>

<?php } ?>

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
			            <li><a href="4resultadodebusqueda?servicio=Automotriz&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/autos.png"> Autos, Camiones y Motos</a></li>
			            <li><a href="4resultadodebusqueda?servicio=BIenes+raíces&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/bienes-raices.png"> Bienes ra&#237;ces</a></li>
			            <li><a href="4resultadodebusqueda?servicio=Tecnologías+e+informática&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/tecnologia-informatica.png"> Tecnolog&#237;a e Inform&#225;tica</a></li>
			            <li><a href="4resultadodebusqueda?servicio=Mascotas&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/mascotas.png"> Mascotas</a></li>
			            <li><a href="4resultadodebusqueda?servicio=Ropa&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/moda.png"> Moda</a></li>
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
			            <li><a href="#contratar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> VIP</a></li>
			        </ul>
			</div>
			<div class="col-md-2">
			     <center><b style="color: #ffffff; font-size: 19px;">CLIENTES PREMIUM</b></center><br>
			        <ul style="margin-left: 50px;">
			            <li><a href="4perfil" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> Mi Cuenta</a></li>
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
			            <li><a href="4resultadodebusqueda?servicio=Automotriz&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/autos.png"> Autos, Camiones y Motos</a></li>
			            <li><a href="4resultadodebusqueda?servicio=BIenes+raíces&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/bienes-raices.png"> Bienes ra&#237;ces</a></li>
			            <li><a href="4resultadodebusqueda?servicio=Tecnologías+e+informática&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/tecnologia-informatica.png"> Tecnolog&#237;a e Inform&#225;tica</a></li>
			            <li><a href="4resultadodebusqueda?servicio=Mascotas&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/mascotas.png"> Mascotas</a></li>
			            <li><a href="4resultadodebusqueda?servicio=Ropa&municipio=" style="color: #ffffff;"><img width="16px;" src="images/iconos/moda.png"> Moda</a></li>
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
			            <li><a href="4perfil" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/entra.png"> Mi Cuenta</a></li>
			            <li><a href="desconectar" style="color: #ffffff;"><img style="width: 16px; margin-top: -3px;" src="images/iconos/salir.png"> Salir</a></li>
			        </ul>
			    </center>
			</div>
		</div>
		
		
		
		
		<br>
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
              <div id="border-monster" class="panel panel-danger">
                <div style="background: #079F37; border: 3px #079F37 dashed;" class="panel-heading">
                  <h3 id="BASICO" style="color: #ffffff;" class="panel-title">ACTUALMENTE TIENES EL PAQUETE M&#193;S COMPLETO</h3>
                </div>
                <div class="panel-body">
                  </center><img width="40%" src="images/iconos/vip-ful.jpg"></center><br>
                  <img width="20px;" src="images/iconos/email.png"> soporte@encuentraentlaxcala.com<br>
                </div>
                
              </div>
            </div><!-- /.col-sm-4 -->
        </div>


</body>
</html>
<?php
ob_end_flush();
?>