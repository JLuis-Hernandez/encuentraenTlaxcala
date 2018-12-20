<?php
    ob_start();
?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.
$id = $_GET['id'];
$sql = mysql_query("select nombreCategoria, nombreRubro from categoria, rubro where categoria.idRubro=$id and rubro.idRubro=$id");
?>
 <?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="2")

      header('Location: https://encuentraentlaxcala.com/');
    
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<title>Resultados de categorías</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>
	
<body>
    <?php
	    include('3categorias-principales.php');
    ?>
    
    <div class="col-md-10">
<?php
	include('3header.php');
?>




<div id="principal-header" class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Subcategoria</h2>
		<div class="clearfix"> </div>
	</div>
</div>

		<div class="product">
			<div class="container">
		<div class="col-md-3 product-bottom ">
			<!--categories-->
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					    <?php
						include('3categorias.php');
					?>
			</div>
 	    </div>
<div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">

<div class="col-md-7 single-top-in">
			<div class="categories animated wow fadeInUp animated" data-wow-delay=".5s" >
					<h3>Subcategorias</h3>
					<ul class="cate">
    					<li><?php
                while ($row = mysql_fetch_array($sql)){
                  echo "<i class='glyphicon glyphicon-menu-right'></i><a  href='3resultadodebusqueda?servicio=".utf8_encode($row['nombreCategoria'])."&municipio=' style='text-decoration: none; color: black;'> ".utf8_encode($row['nombreCategoria'])."</a><br>";
                }
                ?></li>
    				</ul>
				</div>
	
			
</div>

<div class="clearfix"> </div>

			</div>			
		<br><br><br>
		</div></div>
		

<?php
	include('3footer.php');
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