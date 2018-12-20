<?php
    ob_start();
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="2")

      header('Location: index.php');
?>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.

$id = utf8_decode($_GET['id']); 
$sql = mysql_query("select * from cliente where idCliente=$id");
while ($row = mysql_fetch_array($sql))
{
  $nombreEmpresario = utf8_decode(utf8_encode($row['nombreCliente']));
  $apellidos = utf8_decode(utf8_encode($row['apellidosCliente'])); 
}
?>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect('localhost', 'encuen21_ustlax', 'RK0gW2x^oVT7');//conexion  
mysql_select_db("encuen21_Tlaxcala");//nombre de la base de datos.

$id = utf8_decode($_GET['id']); 
$sql = mysql_query("select * from empleos where idEmpleos=$id");
while ($row = mysql_fetch_array($sql))
{
  $cargo = utf8_decode(utf8_encode($row['cargo'])); 
  $nombre = utf8_decode(utf8_encode($row['nombre_empresa'])); 
  $giro = utf8_decode(utf8_encode($row['giro_empresarial']));
  $estado = utf8_decode(utf8_encode($row['estado']));
  $municipio = utf8_decode(utf8_encode($row['municipio']));
  $direccion = utf8_decode(utf8_encode($row['direccion']));
  $cp = utf8_decode(utf8_encode($row['codigo_postal']));
  $descripcion = utf8_decode(utf8_encode($row['descripcion']));
  $sueldo = utf8_decode(utf8_encode($row['sueldo']));
  $turno = utf8_decode(utf8_encode($row['turno']));
  $horario = utf8_decode(utf8_encode($row['horario']));
  $prestaciones = utf8_decode(utf8_encode($row['prestaciones']));
  $telefono = utf8_decode(utf8_encode($row['telefono_oficina']));
  $whatsapp = utf8_decode(utf8_encode($row['telefono_whatsapp']));
  $correo = utf8_decode(utf8_encode($row['correo_contacto']));
  $logo = utf8_decode(utf8_encode($row['img1']));
  $linkgoogle = utf8_decode(utf8_encode($row['linkgoogle'])); 
  $web = utf8_decode(utf8_encode($row['linksitioweb'])); 
}
?>
<?php 
  include('contador.php');
?>
<!DOCTYPE html>
<html lang="es"> 
<head>
<title><?php echo $nombre; ?></title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#ff0000" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


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
<link rel="stylesheet" href="css/audioplayer.css" />

<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

<style>
/* Effect 20: 3D side */
.cl-effect-20 a {
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
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
</head>
  
<body>
<!-- header -->
<?php
	    include('3categorias-principales.php');
    ?>
    
    <div class="col-md-10">  
<?php
  include('3header.php');
?>


<div id="principal-header" class="banner-top">
  <div class="container">
    <h2 class="animated wow fadeInLeft" data-wow-delay=".5s"><?php echo utf8_encode($nombre); ?></h2>
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
        <div class="col-md-5 grid-im">    
    <div class="flexslider">
        <ul class="slides">
          <li data-thumb="<?php echo $logo; ?>">
              <div class="thumb-image"> <img  src="<?php echo $logo; ?>" data-imagezoom="true" class="img-responsive"> </div>
          </li>
          
        </ul>
    </div>
  </div>  
<div class="col-md-7 single-top-in">
            <div class="span_2_of_a1 simpleCart_shelfItem">
        <center><h3> <?php echo utf8_encode($nombre); ?></h3>
        <p class="in-para"> <?php echo utf8_encode($giro); ?></p></center>
          
        
         
         
      <div class="clearfix"> </div>
      </div>
       <!----- tabs-box ---->
    <div class="sap_tabs">  
             <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
              <ul class="resp-tabs-list cl-effect-20">
                <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Descripci&#243;n empleo</span></li>
                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Datos de empresa</span></li>
                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Datos de contacto</span></li>
                <div class="clearfix"></div>
              </ul>         
              <div class="resp-tabs-container">
                   <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Descripci&#243;n</h2>
                    <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                        <div class="facts">
                            <ul>
                                <li title="Sueldo"><img width="18px;" src="images/iconos/sueldos.png"> $<?php echo utf8_encode($sueldo); ?></li>
                                <li title="Tipo de contrato"><img width="18px;" src="images/iconos/jornada.png"> <?php echo utf8_encode($turno); ?></li>
                                <li title="Horario de trabajo"><img width="18px;" src="images/iconos/horarios.png"> <?php echo utf8_encode($horario); ?></li>
                                <li title="Prestaciones de ley"><img width="18px;" src="images/iconos/contrato.png"> <?php echo utf8_encode($prestaciones); ?></li>
                                <li><b>Descripci&#243;n del empleo:</b> </li>
                              </ul>  
                              <textarea rows="15" style="width: 100%; border: none;" readonly><?php echo utf8_encode($descripcion);?></textarea>
                         </div>
                    </div>

                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Contacto</h2>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="facts">
                          <ul>
                            <li title="Dirección de la empresa y/o servicio"><img width="18px;" src="images/iconos/direccion.png"> <?php echo utf8_encode($direccion); ?> C.P. <?php echo $cp; ?></li>
                            <li title="Municipio"><img width="18px;" src="images/iconos/direccion.png"> <?php echo utf8_encode($municipio); ?></li>
                            <li title="Sitio web <?php echo utf8_encode($nombre); ?>"><img width="18px;" src="images/iconos/web.png"> <a  target="_blank" href="<?php echo $web; ?>"><?php echo $web; ?></a></li>
                            <li><b>Ubicaci&#243;n:</b> </li>
                          </ul> 
                          <iframe src="<?php echo $linkGoogle ?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                    </div> 
                
                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span><span style="font-size: 20px;">Redes sociales</span></h2>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="facts">
                             <ul>
                                <li title="Nombre de contacto"><img width="18px;" src="images/iconos/empresario.png"> <?php echo utf8_encode($nombreEmpresario); ?> <?php echo utf8_encode($apellidos); ?></li>
                                <li title="Cargo y/o puesto"><img width="18px;" src="images/iconos/cargo.png"> <?php echo utf8_encode($cargo); ?></li>
                                <li title="Teléfono de oficina"><img width="18px;" src="images/iconos/telefono.png"> <?php echo utf8_encode($telefono); ?></a></li>
                                <li title="Teléfono de whatsapp"><img width="18px;" src="images/iconos/whatsapp.png"> <?php echo utf8_encode($whatsapp); ?> </li>
                                <li title="Email de contacto"><img width="18px;" src="images/iconos/email.png"> <?php echo utf8_encode($correo); ?> </li>
                              </ul>
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
       $resultado = mysql_query("select idAnuncio, nombreNegocio, categoria, municipio,  img1, img2 from cliente, anuncios where cliente.idCliente=anuncios.idCliente and cliente.rol=3  ORDER BY RAND() LIMIT 3; ");
    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))
    {
      echo "
            <div class='col-sm-4 item-grid simpleCart_shelfItem'>
        <div style='height: 363px;' class='grid-pro'>
            <center><h4>".utf8_decode(utf8_encode($row['nombreNegocio']))."</h4></center><br>
            <div  class='grid-product' >
              <figure>  
                <a href='vip?id=".$row['idAnuncio']."'>
                  <div class='grid-img'>
                    <img   src=".$row['img1']." class='img-responsive'>
                  </div>
                  <div class='grid-img'>
                    <img  src=".$row['img2']." class='img-responsive'>
                  </div>      
                </a>    
              </figure> 
            </div>
          <div class='women'>
            <h6  style='color: #ff0000;''>".utf8_decode(utf8_encode($row['categoria']))."</a></h6>
            <p><em class='item_price'>".utf8_decode(utf8_encode($row['municipio']))."</em> <br></p>
            <a href='vip?id=".$row['idAnuncio']."' data-text='Ver anuncio' class='but-hover1 item_add'>Ver anuncio</a>
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