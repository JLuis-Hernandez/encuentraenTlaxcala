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
<title>Buscador </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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

.center {
    text-align: center;
}

.pagination {
    display: inline-block;
    width: 100%;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}

.pagination a.active {
    background-color: red;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

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




<!--banner-->
<div id="principal-header" class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Resultado</h2>
		<div class="clearfix"> </div>
	</div>
</div>
	<!--content-->
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
				<div class="mens-toolbar">
<p style="position: absolute; margin-top: -30px;">   
<?php
  header('Content-Type: text/html; charset=UTF-8');
  error_reporting(E_ALL ^ E_DEPRECATED);
  mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
  mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.
  $porPagina = 15;
  if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
  }else{
    $pagina = 1;
  }
  $empieza = ($pagina-1) * $porPagina;
  $servicio = utf8_decode($_GET['servicio']);
  $municipio = utf8_decode(utf8_encode( $_GET['municipio']));

  if ($servicio == null  and $municipio == null){
    $resultado = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2, rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente ORDER BY rol DESC, NombreNegocio ASC Limit $empieza, $porPagina");

    if(mysql_num_rows($resultado)==0) sinResultados();
    elseif($resultado){
      while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
        if($row['rol'] == 3) imprimirVip($row);
        elseif ($row['rol'] == 2) imprimirPlus($row);
        elseif ($row['rol'] == 1) imprimirBasico($row);
        else imprimirGratis($row);
      }
      $res = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2, rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente ORDER BY rol DESC, NombreNegocio ASC");
      $totalRegistros = mysql_num_rows($res);
      $totalPaginas = ceil($totalRegistros / $porPagina);
      echo "<div class='center'><div class='pagination'>";
      echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=1'>".'&laquo; '."</a>";

      for ($i=1; $i <=$totalPaginas ; $i++) { 
        echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=".$i."' class='active'>".$i."</a>";
      }
      if ($totalPaginas>1)  
      {
        echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=$totalPaginas'>".'&raquo'."</a>";
      }
      echo "</div></div>";
    }else echo 'error';
  }elseif ($servicio == null and $municipio != null) {
    $resultado = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2, rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente and municipio='$municipio' ORDER BY rol DESC, NombreNegocio ASC Limit $empieza, $porPagina");

    if(mysql_num_rows($resultado)==0) sinResultados();
    elseif($resultado){
      while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
        if($row['rol'] == 3) imprimirVip($row);
        elseif ($row['rol'] == 2) imprimirPlus($row);
        elseif ($row['rol'] == 1) imprimirBasico($row);
        else imprimirGratis($row);
      }
      $res = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2, rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente and municipio='$municipio' ORDER BY rol DESC, NombreNegocio ASC");
      $totalRegistros = mysql_num_rows($res);
      $totalPaginas = ceil($totalRegistros / $porPagina);
      echo "<div class='center'><div class='pagination'>";
      echo "<center><a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=1'>".'&laquo; '."</a>"; 
      for ($i=1; $i <=$totalPaginas ; $i++) { 
        echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=".$i."'>".$i."</a>";
      }
      if ($totalPaginas>1) 
      {
        echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=$totalPaginas'>".'&raquo'."</a></center>";
      }
      echo "</div></div>";
    }else echo 'error';
  }elseif ($servicio != null and $municipio == null){
    if ( strcasecmp( $servicio, 'Empleos' ) == 0 ){ 
        $resultado = mysql_query("select * from empleos ORDER BY idEmpleos ASC Limit $empieza, $porPagina");
        if(mysql_num_rows($resultado)==0) sinResultados();
        else{
            while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
                imprimirEmpleo($row);
            }
            $res = mysql_query("select * from empleos ORDER BY idEmpleos ASC");
            $totalRegistros = mysql_num_rows($res);
            $totalPaginas = ceil($totalRegistros / $porPagina);
            echo "<div class='center'><div class='pagination'>";
            echo "<center><a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=1'>".'&laquo; '."</a>";
            for ($i=1; $i <=$totalPaginas ; $i++) { 
              echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=".$i."'>".$i."</a>";
            }
            if ($totalPaginas>1) {
              echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=$totalPaginas'>".'&raquo'."</a></center>";
            }
            echo "</div></div>";
        }
    }else{
        $resultado = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2, rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente and categoria='$servicio' ORDER BY rol DESC, NombreNegocio ASC Limit $empieza, $porPagina");

        if(mysql_num_rows($resultado)==0) sinResultados();
        elseif($resultado){
          while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
          {
            if($row['rol'] == 3) imprimirVip($row);
            elseif ($row['rol'] == 2) imprimirPlus($row);
            elseif ($row['rol'] == 1) imprimirBasico($row);
            else imprimirGratis($row);
          }
          $res = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2, rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente and categoria='$servicio' ORDER BY rol DESC, NombreNegocio ASC");
          $totalRegistros = mysql_num_rows($res);
          $totalPaginas = ceil($totalRegistros / $porPagina);
          echo "<div class='center'><div class='pagination'>";
          echo "<center><a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=1'>".'&laquo; '."</a>";
          for ($i=1; $i <=$totalPaginas ; $i++) { 
            echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=".$i."'>".$i."</a>";
          }
          if ($totalPaginas>1) {
            echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=$totalPaginas'>".'&raquo'."</a></center>";
          }
          echo "</div></div>";
        }else echo 'error';
    }
  }else{
    $resultado = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2 rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente and municipio='$municipio' and categoria='$servicio' ORDER BY rol DESC, NombreNegocio ASC Limit $empieza, $porPagina");

    if(mysql_num_rows($resultado)==0) sinResultados();
    elseif($resultado){
      while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
      {
        if($row['rol'] == 3) imprimirVip($row);
        elseif ($row['rol'] == 2) imprimirPlus($row);
        elseif ($row['rol'] == 1) imprimirBasico($row);
        else imprimirGratis($row);
      }
      $res = mysql_query("select idAnuncio, NombreNegocio, categoria, subcategoria, descripcion, domicilio, codPostal, municipio, coloniaLocalidad, telefono, correoNegocio, img1, img2, rol from anuncios, cliente where cliente.idCliente=anuncios.idCliente and municipio='$municipio' and categoria='$servicio' ORDER BY rol DESC, NombreNegocio ASC");
      $totalRegistros = mysql_num_rows($res);
      $totalPaginas = ceil($totalRegistros / $porPagina);
      echo "<div class='center'><div class='pagination'>";
      echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=1'>".'&laquo; '."</a>";
      for ($i=1; $i <=$totalPaginas ; $i++) { 
        echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=".$i."'>".$i."</a>";
      }
      if ($totalPaginas>1) {
        echo "<a href='4resultadodebusqueda?servicio=$servicio&municipio=$municipio&pagina=$totalPaginas'>".'&raquo'."</a>";
      }
      echo "</div></div>";
    }else echo 'error';
  }
?>
</p>
	                
					 
    	      
                	<div class="clearfix"></div>		
		        </div>

			<div class="mid-popular">
				
<?php
    function sinResultados(){
      echo "
        <ul id='servicesgratis'>
          <li>
            <div class='resultado'>
              <div id='resultado2'>
                <center><h3>Sin resultados</h3></center>
              </div>
            </div>
          </li>
        </ul>
      ";
    }
    
    function imprimirGratis($row){
      echo "
        <div class='col-sm-4 item-grid simpleCart_shelfItem'>
          <div style='height: 366px;'  class='grid-pro'><br>
            <center><h4>".utf8_encode($row['categoria'])."</h4></center>
    
            <div class='women'>
              <h6  style='color: #ff0000;'>".utf8_encode($row['NombreNegocio'])."</a></h6>
              <p><em class='item_price'>".utf8_encode($row['municipio']).", Tlaxcala</em> <br>
              <p>".utf8_encode($row['domicilio']).", ".utf8_encode($row['coloniaLocalidad']).", C.P ".$row['codPostal'].", ".utf8_encode($row['municipio']).", Tlax.</p>
              <p>".$row['telefono']."</p>
            </div>
          </div><br><br>
        </div>
      ";
    }
    
    function imprimirBasico($row){
      echo "
        <div  class='col-sm-4 item-grid simpleCart_shelfItem'>
          <div style='height: 366px;' class='grid-pro'>
            <center><h4>".utf8_encode($row['NombreNegocio'])."</h4></center><br>
            <div  class='grid-product' >
              <figure>  
                <a href='4basico?id=".$row['idAnuncio']."'>
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
              <p><em class='item_price'>".utf8_encode($row['municipio']).", Tlaxcala</em> <br></p><br>
              <a href='4basico?id=".$row['idAnuncio']."' data-text='Ver anuncio' class='but-hover1 item_add'>Ver anuncio</a>
            </div>
          </div><br><br>
        </div>
      ";
    }
    
    function imprimirPlus($row){
      echo "
        <div class='col-sm-4 item-grid simpleCart_shelfItem'>
          <div style='height: 366px;' class='grid-pro'>
            <center><h4>".utf8_encode($row['NombreNegocio'])."</h4></center><br>
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
              <p><em class='item_price'>".utf8_encode($row['municipio']).", Tlaxcala</em> <br></p><br>
              <a href='4plus?id=".$row['idAnuncio']."' data-text='Ver anuncio' class='but-hover1 item_add'>Ver anuncio</a>
            </div>
          </div><br><br>
        </div>
      ";
    }
    
    function imprimirVip($row){
      echo "
        <div class='col-sm-4 item-grid simpleCart_shelfItem'>
          <div style='height: 366px;' class='grid-pro'>
            <center><h4>".utf8_encode($row['NombreNegocio'])."</h4></center><br>
            <div  class='grid-product' >
              <figure>  
                <a href='4vip?id=".$row['idAnuncio']."'>
                  <div class='grid-img'>
                    <img src=".$row['img1']." class='img-responsive'>
                  </div>
                  <div class='grid-img'>
                    <img src=".$row['img2']." class='img-responsive'>
                  </div>      
                </a>    
              </figure> 
            </div>
            <div class='women'>
              <h6  style='color: #ff0000;''>".utf8_encode($row['categoria'])."</a></h6>
              <p><em class='item_price'>".utf8_encode($row['municipio']).", Tlaxcala</em> <br></p><br>
              <a href='4vip?id=".$row['idAnuncio']."' data-text='Ver anuncio' class='but-hover1 item_add'>Ver anuncio</a>
            </div>
          </div><br><br>
        </div>
      ";
    }
    
    function imprimirEmpleo($row){
      echo "
        <div class='col-sm-4 item-grid simpleCart_shelfItem'>
          <div style='height: 366px;' class='grid-pro'>
            <center><h4>".utf8_encode($row['nombre_empresa'])."</h4></center><br>
            <div  class='grid-product' >
              <figure>  
                <a href='4empleos.php?id=".$row['idEmpleos']."'>
                  <div class='grid-img'>
                    <img src=".$row['img1']." class='img-responsive'>
                  </div>
                  <div class='grid-img'>
                    <img src=".$row['img1']." class='img-responsive'>
                  </div>      
                </a>    
              </figure> 
            </div>
            <div class='women'>
              <h6  style='color: #ff0000;''>".utf8_encode($row['giro_empresarial'])."</a></h6>
              <p><em class='item_price'>".utf8_encode($row['municipio']).", Tlaxcala</em> <br></p><br>
              <a href='4empleos?id=".$row['idEmpleos']."' data-text='Ver empleo' class='but-hover1 item_add'>Ver empleo</a>
            </div>
          </div><br><br>
        </div>
      ";
    }
?>

						
						 
					<div class="clearfix"></div>
				</div>
			</div>

		
			</div class="clearfix"></div>
				<!--//products-->


<?php
	include('4footer.php');
?>
</div>
<!-- //footer -->
</body>
</html>
 <?php
    ob_end_flush();
?>
