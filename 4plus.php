<?php
    ob_start();
?>
<?php
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.

$id = utf8_decode($_GET['id']);
$sql = mysql_query("select * from anuncios where idAnuncio=$id");
while ($row = mysql_fetch_array($sql))
{
  $nombre = utf8_encode($row['nombreNegocio']);
  $categoria = utf8_encode($row['categoria']);
  $subcategoria = utf8_encode($row['subcategoria']);
  $domicilio = utf8_encode($row['domicilio']);
  $cp = $row['codPostal'];
  $municipio = utf8_encode($row['municipio']);
  $colonia = utf8_encode($row['coloniaLocalidad']);
  $telefono = $row['telefono'];
  $correo = utf8_encode($row['correoNegocio']);
  $celular = $row['celular'];
  $facebook = utf8_encode($row['facebook']);
  $twitter = utf8_encode($row['twitter']);
  $img1 = utf8_encode($row['img1']);
  $img2 = utf8_encode($row['img2']);
  $contador = $row['contVisitas'];
  $descripcion = utf8_encode($row['descripcion']);

  $img3 = utf8_encode($row['img3']);
  $img4 = utf8_encode($row['img4']);
  $img5 = utf8_encode($row['img5']);
  $sitioWeb = utf8_encode($row['linkSitioWeb']);
  $whatsapp = $row['whatsapp'];
  $audio = utf8_encode($row['audio']);

}
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
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<title><?php echo $nombre; ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/audioplayer.css" />

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
	    include('4categorias-principales.php');
    ?>
    
    <div class="col-md-10">
<?php
	include('4header.php');
?>




<div id="principal-header" class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s"><?php echo $nombre; ?></h2>
		<div class="clearfix"> </div>
	</div>
</div>

		<div class="product">
			<div class="container">
		<div class="col-md-3 product-bottom ">
			<!--categories-->
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					    <?php
						include('4categorias.php');
					?>
			</div>
 	    </div>
 	    
			<div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
				<div class="col-md-5 grid-im">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="<?php echo $img1; ?>">
			        <div class="thumb-image"> <img src="<?php echo $img1; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo $img2; ?>">
			         <div class="thumb-image"> <img src="<?php echo $img2; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo $img3; ?>">
			         <div class="thumb-image"> <img src="<?php echo $img3; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo $img4; ?>">
			         <div class="thumb-image"> <img src="<?php echo $img4; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?php echo $img5; ?>">
			         <div class="thumb-image"> <img src="<?php echo $img5; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="span_2_of_a1 simpleCart_shelfItem">
				<h3> <?php echo $nombre; ?></h3>
				<p class="in-para"> <?php echo $categoria; ?>,  <?php echo $subcategoria; ?></p>
			    
				
				 
			   
			<div class="clearfix"> </div>
			</div>
		   <!----- tabs-box ---->
		<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <!--<ul style="margin-left: 20%;" class="resp-tabs-list cl-effect-20">-->
						  <ul style="margin-left: 20%; float: left;">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Descripci&#243;n</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Contacto</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Redes sociales</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
								   <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2>
								   	<div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
										<div class="facts">
									  		<p > <?php echo $descripcion; ?></p>
									  		   <audio preload="auto" controls>
				<source src="<?php echo $audio; ?>">
			</audio>
			<script src="js/jquery.js"></script>
			<script src="js/audioplayer.js"></script>
			<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
							        	</div>

							    	</div>

							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Contacto</h2>
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts1">
											<ul style="margin-left: 23%;"><br>
												<li><b>Municipio:</b> <?php echo $municipio; ?></li><br>
												<li><b>Colonia:</b> <?php echo $colonia; ?></li><br>
												<li><img width="18px;" src="images/iconos/direccion.png"> <?php echo $domicilio; ?> C.P. <?php echo $cp; ?></li><br>
												<li><img width="18px;" src="images/iconos/telefono.png"> <?php echo $telefono; ?></li><br>
												<li><img width="18px;" src="images/iconos/whatsapp.png"> <?php echo $whatsapp; ?></li><br>
												<li><img width="18px;" src="images/iconos/email.png"> <?php echo $correo; ?></li><br>
												<li><img width="18px;" src="images/iconos/web.png"> <a target="_blank" href="<?php echo $sitioWeb; ?>"><?php echo $sitioWeb; ?></a></li>
											</ul>   
								 	</div>

								</div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span><span style="font-size: 20px;">Redes sociales</span></h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="comments-top-top">
										<div>
											<center><h6 ><a title"facebook" target="_blank" href="<?php echo $facebook; ?>"><img width="180px;" src="images/iconos/Facebook-logo-anuncio.png"></a> 
												&nbsp;&nbsp;&nbsp;
												<a title"facebook" target="_blank" href="<?php echo $twitter; ?>"><img width="180px;" src="images/iconos/twitter-anuncio.png"></a></h6></center>
										</div>
									</div>
							 </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
<!---->
					</div>
			
</div>

<div class="clearfix"> </div>
<div class=" col-md-si">
<?php
       $resultado = mysql_query("select idAnuncio, nombreNegocio, categoria, municipio,  img1, img2 from cliente, anuncios where cliente.idCliente=anuncios.idCliente and cliente.rol=2  ORDER BY RAND() LIMIT 3; ");
    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
    {
      echo "
						<div class='col-sm-4 item-grid simpleCart_shelfItem'>
				<div style='height: 363px;' class='grid-pro'>
						<center><h4>".utf8_encode($row['nombreNegocio'])."</h4></center><br>
						<div  class='grid-product' >
							<figure>	
								<a href='4plus?id=".$row['idAnuncio']."'>
									<div class='grid-img'>
										<img  src=".$row['img1']." class='img-responsive'>
									</div>
									<div class='grid-img'>
										<img  src=".$row['img2']." class='img-responsive'>
									</div>			
								</a>		
							</figure>	
						</div>
					<div class='women'>
						<h6  style='color: #ff0000;''>".utf8_encode($row['categoria'])."</a></h6>
						<p><em class='item_price'>".utf8_encode($row['municipio'])."</em> <br></p>
						<a href='4plus?id=".$row['idAnuncio']."' data-text='Ver anuncio' class='but-hover1 item_add'>Ver anuncio</a>
					</div>
				</div>
			</div>
						";
    }
    ?>
						<div class="clearfix"> </div>
		</div>
			</div class="clearfix"></div>
			</div>			
		<br><br><br>
				

<?php
	include('4footer.php');
?>
</div>

<script src="js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>


</body>
</html>
<?php
    ob_end_flush();
?>