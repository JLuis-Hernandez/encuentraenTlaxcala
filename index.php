<?php
    ob_start();
?>

<?php 
    error_reporting(E_ALL ^ E_DEPRECATED);
    mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion
    mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos. 
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<title>Encuentra en Tlaxcala</title>
<!-- for-mobile-apps -->
 <link rel="shortcut icon" href="images/icono.ico"/>
<meta name="theme-color" content="#ff0000" />
<meta name="description" content="Servicio de anuncios clasificados asi como ventas, rentas, servicios. en el estado de Tlaxcala">
<meta name="author" content="Luis Hernández">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--<script type="text/javascript">
        document.oncontextmenu = function(){return false;}
    </script>-->
    
        <link rel="stylesheet" href="categoria0/css/style.css" media="screen" type="text/css" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129378781-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129378781-1');
</script>

<!--<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
</head>
	
<body>

<div id="elementovip" class="col-md-2">
    <aside>
      <ul>
        <li class="store"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/trabajos.png"></span><a href="resultadodebusqueda?servicio=Empleos&municipio=" id="textito-no">Busco Empleo</a></li>
        <li class="movies"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/trabajos.png"></span><a href="formulario-trabajo" id="textito-no">Ofresco Empleo</a></li>
        <li class="music"><span class="movies-icon"></span><a href="resultadodebusqueda?servicio=Centros+de+entrenimiento&municipio=" id="textito-no">Centro de entretenimiento</a></li>
        <li class="books"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/hospedaje.png"></span><a href="resultadodebusqueda?servicio=Hospedajes&municipio=" id="textito-no">Hospedaje</a></li>
        <li class="magazines"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/alimentos.png"></span><a href="resultadodebusqueda?servicio=Alimentos+%26+bebidas&municipio=" id="textito-no">Alimentos & Bebidas</a></li>
        <li class="devices"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/bienes-raices.png"></span><a href="resultadodebusqueda?servicio=BIenes+raíces&municipio=" id="textito-no">Bienes ra&#237;ces</a></li>
        <li class="turismo"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/piramide.png"></span><a href="resultadodebusqueda?servicio=Turismo+%26+Recreación&municipio=" id="textito-no">Turismo & Recreaci&#243;n</a></li>
        <li class="servicii"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/tecnologia-informatica.png"></span><a href="resultadodebusqueda?servicio=Tecnologías+e+informática&municipio=" id="textito-no">Tecnolog&#237;a</a></li>
        <li class="turismo"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/hospital.png"></span><a href="resultadodebusqueda?servicio=Servicios+de+Salud&municipio=" id="textito-no">Servicios de salud</a></li>
        <li class="devices"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/mascotas.png"></span><a href="resultadodebusqueda?servicio=Mascotas&municipio=" id="textito-no">Mascotas</a></li>
        <li class="magazines"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/autos.png"></span><a href="resultadodebusqueda?servicio=Automotriz&municipio=" id="textito-no">Automotriz</a></li>
        <li class="books"><span class="magazines-icon"></span><a href="resultadodebusqueda?servicio=Materiales+de+Construcción&municipio=" id="textito-no">Material de construción</a></li>
        <li class="music"><span><img style="width: 30px; position: absolute; margin-left: 10px; margin-top: 10px;" src="images/iconos/purificadora.png"></span><a href="resultadodebusqueda?servicio=Purificadoras&municipio=" id="textito-no">Purificadoras</a></li>
      </ul>
    </aside>
</div>
		    
<div class="col-md-10">
<!-- header -->
	<div class="header">
			<div id="principal-header" class="header-grid">
			    <div class="container">
    				<div id="logiyu" class="header-left" data-wow-delay=".5s">
    					<ul id="logo-icono">
    						<li><a href="https://encuentraentlaxcala.com"><img style="width: 20px; margin-top: -10px;" src="images/logo-icono.png"> <span id="letras-eslogan">EL DIRECTORIO COMERCIAL WEB DEL ESTADO DE TLAXCALA</span></a></li>
    					</ul>
    				</div>
    				<div id="banner-categoria">
        				<marquee id="principal-pc-b"  behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                            <a href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Bienes+ra%C3%ADces&municipio=" style="color: #ffffff; text-decoration: none;"><img width="20px;" src="images/iconos/casa.png"> Bienes Ríces</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Empleos&municipio=" style="color: #ffffff; text-decoration: none;"><img width="20px;" src="images/iconos/trabajos.png"> Empleos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Mascotas&municipio=" style="color: #ffffff; text-decoration: none;"><img width="20px;" src="images/iconos/mascos.png"> Mascotas</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Tecnolog%C3%ADas+e+inform%C3%A1tica&municipio=" style="color: #ffffff; text-decoration: none;"><img width="20px;" src="images/iconos/tiendas.png"> Tiendas Online</a>
                        </marquee>
                    </div>

    				<div class="header-right" data-wow-delay=".5s">
        				<div id="margen-tamano">
        						<ul>
        							<li><i class="glyphicon glyphicon-book" ></i><a href="registro"> Reg&#237;strate</a></li>
        							<li><i class="glyphicon glyphicon-log-in" ></i><a title="Usuarios con paquete contratado" href="login"> Ingresar</a></li>
        							<li><a title="Abrir menu"  class="burger" href="#"><span class="burger"></span></a></li>
        						</ul>
        						<div class="clearfix"> </div>
        				</div>
    				</div>
			    </div>
			</div>
			
			
            <nav><a title="Cerra menu" style="color: #ff0000;" class="burger"  href="#"><span class="burger" style="color: #ff0000;"></span></a>
              <ul class="main">
                <li><a href="https://encuentraentlaxcala.com">Inicio</a></li>
                <li><a href="conocenos">Con&#243;cenos</a></li>
                <li><a href="ayuda">Ayuda</a></li>
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
	</div>

<div class="content">
    <div class="content-head">
        <div class="col-md-12">
			<div id="elementovip" class="col-md-90 col-m1 ">
			    <div style="margin-left: 13px;"  class="banner-right" >
					<ul id="flexiselDemo3">		
            <?php
                   $resultado = mysql_query("select idAnuncio, nombreNegocio, categoria, municipio,  img1, img2 from cliente, anuncios where cliente.idCliente=anuncios.idCliente and cliente.rol=3 ORDER BY 1 DESC LIMIT 6;");
                while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
                {
                  echo "
					<li>
						<div class='banner-grid' style='width: 100%; margin-top: 0px; height: 200px; position: relative;' >
							<center><h2>".utf8_encode($row['nombreNegocio'])."</h2></center>
							<div class='wome'>
							
							    <a href='vip?id=".$row['idAnuncio']."'>
								    <img style='width:132px; margin-top: -20px; margin-left: 40px;' class='img-responsive' src=".$row['img1']." />
								</a>
								
								<div style='margin-top: 16px; margin-left: -5px;' class='women simpleCart_shelfItem'>
									<h6 style='color: #ff0000;'  style='font-size: 20px;'><b>".utf8_encode($row['categoria'])."</b></h6>
									<p class='ba-price' style='font-size: 23px;'><em class='item_price'>".utf8_encode($row['municipio'])."</em><br>
								</div>							
							</div>							
						</div>
					</li>
                  ";
                }
                ?>
					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 4000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 1
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 1
		    		}
		    	}
		    });
		    
		});
	</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
        		 <br>
			    <img style="margin-left: 0px;" id="publicidad" src="images/publicidad.jpg">
			</div>
		</div>
			    
			    
    <div class="col-md-6 col-m1">
        <div id="buscador-logo">
           <form action="resultadodebusqueda" method="get">

			<div class="col-md-12 login-do1">
			 <br>
			    <center><a href="https://encuentraentlaxcala.com"><img id="logito" width="150px" src="images/logi.png"></a></center>
			 <br>
			 <center><b style="font-size: 17px">¿QUE BUSCAS?</b></center><br>
				<div class="login-mail">
					<input type="text" placeholder="Bienes raíces, Vehiculos, Celulares, Ropa, Muebles, Servicios, Empleo, etc." name="servicio" id="serviciosearch" list="datalist1" required autofocus>
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

				<center><b style="font-size: 17px">¿EN QUE LUGAR?</b></center><br>
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
			
				 <div id="login-boton2" class="login-do"><br><br>
					<center><label class="hvr-sweep-to-top login-sub">
						<input style="background: #ff0000;" type="submit" id="botoN"  value="Buscar">
					</label></center><hr style="width: 100%; position: absolute; border-bottom: #D6D6D6 solid 1px; margin-top: 28px; margin-left: -34px;">
				</div>
			</div>
		
			<div class="clearfix"> </div>
			</form>
	    </div>
    </div>

			  <div id="elementovip" class="col-md-90" data-wow-delay=".1s" >
					<div style="margin-left: 13px;" class="banner-right" >
					<ul id="flexiselDemo2">		
<?php
       $resultado = mysql_query("select idAnuncio, nombreNegocio, categoria, municipio,  img1, img2 from cliente, anuncios where cliente.idCliente=anuncios.idCliente and cliente.rol=3 ORDER BY 1 DESC LIMIT 6;");
    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
    {
      echo "
					<li>
						<div class='banner-grid' style='width: 100%; margin-top: 0px; height: 200px; position: relative;' >
							<center><h2>".utf8_encode($row['nombreNegocio'])."</h2></center>
							<div class='wome'>
							<center>
							    <a href='vip?id=".$row['idAnuncio']."'>
								    <img style='width:132px; margin-top: -20px; margin-left: 0px;' class='img-responsive' src=".$row['img1']." />
								</a>
								</center>
								<div style='margin-top: 16px; margin-left: 10px;' class='women simpleCart_shelfItem'><br>
									<h6 style='color: #ff0000;'  style='font-size: 20px;'><b>".utf8_encode($row['categoria'])."</b></h6>
									<p class='ba-price' style='font-size: 23px;'><em class='item_price'>".utf8_encode($row['municipio'])."</em><br>
								</div>							
							</div>							
						</div>
					</li>
      ";
    }
    ?>
					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 5000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 1
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 1
		    		}
		    	}
		    });
		    
		});
	</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script><br>
				   <a href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Empleos&municipio="> <img style="margin-left: -2px;" id="publicidad" src="images/publicidad2.jpg"></a>
				</div>
			</div>
			    
        </div>
    </div>
</div>
<!--content-->
		<div class="content">
		    <div class="content-head">
					<div class="col-md-12 col-m2 animated wow fadeInRight" data-wow-delay=".1s">
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 4,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
							 
						       <div id="owl-demo" class="owl-carousel">
						            <div class='item'>					                	 
                                        <a href="formulariopublicidad">
                                        	<img width='40%'  src="images/anunciate aqui.png" />
                                        </a> 
                                    </div>
						            <?php 
                                        $resultado = mysql_query("select idAnuncioBanner, img from anunciobanner where idAnuncioBanner and anunciobanner.activo=1 ORDER BY  RAND() LIMIT 20; ");
                                        while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
                                        {
                                          echo "
                                                <div class='item'>					                	 
                                        			<a data-fancybox='Fernanda' href=".$row['img'].">
                                        				<img width='40%'  src=".$row['img']." />
                                        			</a>
                                        		</div>
                                          ";
                                        }
                                    ?>
							    </div>
					</div>
				<div class="clearfix"></div>
			</div>	
		</div>
				
				<div class="content-top">
					<div class="col-md-12 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
					<h2>TE RECOMENDAMOS</h2><hr><br>
						<?php
       $resultado = mysql_query("select idAnuncio, nombreNegocio, categoria, municipio,  img1, img2 from cliente, anuncios where cliente.idCliente=anuncios.idCliente and cliente.rol=2 ORDER BY 1 DESC LIMIT 6; ");
    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
    {
      echo "
<div class='col-sm-3 item-grid simpleCart_shelfItem'>
							<div class='grid-pro'>
								<center><h4>".utf8_decode(utf8_encode($row['nombreNegocio']))."</h4></center><br>
								<div  class='grid-product' >
									<center><figure>	
										<a href='plus?id=".$row['idAnuncio']."'>
											<div class='grid-img'>
												<img  src=".$row['img1']." class='img-responsive'>
											</div>
											<div class='grid-img'>
												<img  src=".$row['img2']." class='img-responsive'>
											</div>			
										</a>		
									</figure></center>	
								</div>
								<div class='women'>

									<h6  style='color: #ff0000;''>".utf8_encode($row['categoria'])."</a></h6>
									<p><em class='item_price'>".utf8_decode(utf8_encode($row['municipio']))."</em></p>
									<a href='plus?id=".$row['idAnuncio']."' data-text='Ver anuncio' class='but-hover1 item_add'>Ver anuncio</a>
								</div>
								</div>
						</div>
      ";
    }
    ?>
						
					<div class="clearfix"></div>
					</div>
				</div>
				
				
				<div id="categoria-pc" class="content-top">
					<div class="col-md-12 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
						<h2>CATEGOR&#205;AS DESTACADAS</h2><hr><br>
            			
            			<div  class="col-sm-4 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="resultadodebusqueda?servicio=Automotriz&municipio=">
            				    <div id="categoriauno" class='grid-pro'>
            					    <center><h3>Autos, Camiones y Motos</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-4 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="resultadodebusqueda?servicio=BIenes+raíces&municipio=">
            				    <div id="categoriados" class='grid-pro'>
            					    <center><h3>Bienes ra&#237;ces</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			
            			<div  class="col-sm-4 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="resultadodebusqueda?servicio=Tecnologías+e+informática&municipio=">
            				    <div id="categoriatres" class='grid-pro'>
            					    <center><h3>Tecnolog&#237;a e inform&#225;tica</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-4 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="resultadodebusqueda?servicio=Mascotas&municipio=">
            				    <div id="categoriacuatro" class='grid-pro'>
            					    <center><h3>Mascotas</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-4 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="resultadodebusqueda?servicio=Ropa&municipio=">
            				    <div id="categoriacinco" class='grid-pro'>
            					    <center><h3>Moda</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-3 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Empleos&municipio=">
            				    <div id="categoriaseis" class='grid-pro'>
            					    <center><h3>Empleos</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			<div  class="col-sm-4 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Materiales+de+Construcci%C3%B3n&municipio=">
            				    <div id="categoriasiete" class='grid-pro'>
            					    <center><h3>Material de construcción</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			<div  class="col-sm-4 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Servicios+de+Salud&municipio=">
            				    <div id="categoriaocho" class='grid-pro'>
            					    <center><h3>Servicios de salud</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
					</div>
				</div>


                <div id="categoria-movil" class="content-top">
					<div class="col-md-12 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
						<h2>Categor&#237;as destacadas</h2><hr><br>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadocategorias?id=5">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/autos.jpg);" class='grid-pro'>
            					    <center><h3>Autos, Camiones y Motos</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadocategorias?id=7">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/casa.jpg);" class='grid-pro'>
            					    <center><h3>Bienes ra&#237;ces</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadocategorias?id=19">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/pc.jpg);" class='grid-pro'>
            					    <center><h3>Tecnolog&#237;a e inform&#225;tica</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadocategorias?id=3">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/mascotas.jpg);" class='grid-pro'>
            					    <center><h3>Mascotas</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadocategorias?id=28">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/moda.jpg);" class='grid-pro'>
            					    <center><h3>Moda</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Empleos&municipio=">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/mueble.jpg);" class='grid-pro'>
            					    <center><h3>Empleos</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Materiales+de+Construcci%C3%B3n&municipio=">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/materiales.jpg);" class='grid-pro'>
            					    <center><h3>Material de construción</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="https://encuentraentlaxcala.com/resultadodebusqueda?servicio=Servicios+de+Salud&municipio=">
            				    <div id="tamano-categoria-movil" style="background-image: url(images/categorias/salud.jpg);" class='grid-pro'>
            					    <center><h3>Servicio de Salud</h3></center><br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div id="espacio-categoria" class="col-sm-6 item-grid simpleCart_shelfItem">
            			<br><br><br><br><br><br><br><br><br><br><br><br>
            			</div>
					</div>
				</div>
				
				
				<div class="content-top">
					
					<div class="col-md-12 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
						<h2>LO M&#193;S BUSCADO</h2><hr><br>

							<?php
       $resultado = mysql_query("select idAnuncio, nombreNegocio, categoria, municipio,  img1, img2 from cliente, anuncios where cliente.idCliente=anuncios.idCliente and cliente.rol=1 ORDER BY 1 DESC LIMIT 6;");
    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
    {
      echo "
			<div class='col-sm-3 item-grid simpleCart_shelfItem'>
				<div class='grid-pro'>
						<center><h4>".utf8_decode(utf8_encode($row['nombreNegocio']))."</h4></center><br>
						<div  class='grid-product' >
							<center><figure>	
								<a href='basico?id=".$row['idAnuncio']."'>
									<div class='grid-img'>
										<img  src=".$row['img1']." class='img-responsive'>
									</div>
									<div class='grid-img'>
										<img  src=".$row['img2']." class='img-responsive'>
									</div>			
								</a>		
							</figure></center>	
						</div>
					<div class='women'>
						<h6  style='color: #ff0000;'>".utf8_encode($row['categoria'])."</a></h6>
						<p><em class='item_price'>".utf8_decode(utf8_encode($row['municipio']))."</em></p>
						<a href='basico?id=".$row['idAnuncio']."' data-text='Ver anuncio' class='but-hover1 item_add'>Ver anuncio</a>
					</div>
				</div><br>
			</div>
      ";
    }
    ?>
					
					<div class="clearfix"></div>
					</div>
					<div id="talvez-pc" class="content-top">
					<div class="col-md-12 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
						<h2>Te puede interesar</h2><hr><br>
            			<center>
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="">
            				    <div style="background-image: url(images/categorias/banner1.jpg);" id="talvez-imagen" class='grid-pro'>
            					    <br>
            				    </div>
            				</a><br><br>
            			</div>
            			
            			<div  class="col-sm-6 item-grid simpleCart_shelfItem">
            				<a style="text-decoration: none;" href="">
            				    <div style="background-image: url(images/categorias/banner2.jpg);" id="talvez-imagen" class='grid-pro'>
            					    <br>
            				    </div>
            				</a><br><br>
            			</div>
            		    </center>
					</div>
				</div>
				
				<div id="talvez-movil" class="content-top">
					<div class="col-md-12 animated wow fadeInLeft" data-wow-delay=".1s">
						<h2>&nbsp; Te puede interesar</h2><hr><br>
            			
            			<div  class="col-md-6">
            				<center><a style="text-decoration: none;" href="">
            				    <div style="background-image: url(images/categorias/banner1.jpg);" id="talvez-imagen" class='grid-pro'>
            					   <br>
            				    </div>
            				</a></center><br><br>
            			</div>
            		
            			<div  class="col-md-6">
            				<center><a style="text-decoration: none;" href="">
            				    <div style="background-image: url(images/categorias/banner2.jpg);" id="talvez-imagen" class='grid-pro'>
            					    <br>
            				    </div>
            				</a></center>
            			</div>
            			
					</div>
				</div>
					<div class="clearfix"></div><br>
			</div>


<link rel="stylesheet" href="zoom/css/jquery.fancybox.min.css" />
<script src="zoom/js/jquery.fancybox.min.js"></script>
<script src="js/seccion.js"></script>



<?php
	include('footer.php');
?>
<script>
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#modalInicio").modal("show");
    setTimeout(function() {
        $("#modalInicio").modal("hide");
    },8000);
  });
</script>

    <div class="modal fade" id="modalInicio" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ANUNCIATE GRATIS</h4>
                </div>
                <a href="registro">
                    <div>
                        <img width="100%" src="images/anuncio.jpg">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
ob_end_flush();
?>
