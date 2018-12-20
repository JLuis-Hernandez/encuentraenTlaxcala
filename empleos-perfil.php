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

<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">
<title><?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'.$_SESSION['apellidosCliente'].''; } ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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

<script type="text/javascript">
        document.oncontextmenu = function(){return false;}
    </script>
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
<?php
	include('empleos-header.php');
?>



<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">PERFIL EMPLEO</h2>
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
              
                <a href="empleos-editar-imagenes">ACTUALIZAR IM&Aacute;GEN</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <a href="empleos-editar-perfil">ACTUALIZAR DATOS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <a href="empleos-Actualizar_contrasena">ACTUALIZAR CONTRASE&#209;A</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                 <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["idEmpleos"]=$rsEmp['idCliente'];?>

                                <?php echo "<a href='empleos-plus?id=$rsEmp[idCliente]&amp;nombreNegocio=$rsEmp[nombreNegocio]&amp;categoria=$rsEmp[categoria]'>VER ANUNCIO</a>"; ?> 
                                <?php } ?><br><br>
   </center>
          </div>
          
          
        <div class="col-sm-6">
          <div class="">
             <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">DATOS DE LA CUENTA</h3>
            </div>
            <div class="panel-body">
              <b>ID CLIENTE:</b> <?php if (isset($_SESSION['sess_user_id'])) { echo ''.$_SESSION['sess_user_id'].'Ep'; } ?><br>
              <b>CORREO:</b> <?php if (isset($_SESSION['correoCliente'])) { echo ''.$_SESSION['correoCliente'].'&nbsp;'; } ?><br>
              <b>NOMBRE RESPONSABLE:</b> <?php if (isset($_SESSION['nombreCliente'])) { echo ''.$_SESSION['nombreCliente'].'&nbsp;'.$_SESSION['apellidosCliente'].''; } ?>
            </div>
          </div>
         

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">DATOS DE LA EMPRESA</h3>
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
   $query = "SELECT idEmpleos, nombre_empresa, giro_empresarial, municipio, direccion, codigo_postal, descripcion, sueldo, turno, horario, prestaciones, cargo, telefono_oficina, telefono_whatsapp, correo_contacto, img1, linkgoogle, linksitioweb  FROM empleos where idCliente='".$_SESSION['sess_user_id']."' ";
             $queEmp = mysql_query($query) or die(mysql_error());
            ?>

             <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { $_SESSION["sess_username"]=$rsEmp['idEmpleos'];?>

              <b>Nombre de la empresa:</b> <?php echo $rsEmp['nombre_empresa']; ?><br>
              <b>Giro:</b> <?php echo $rsEmp['giro_empresarial']; ?><br>
              <b>Municipio:</b> <?php echo $rsEmp['municipio']; ?><br>
              <b>Codigo Postal:</b> <?php echo $rsEmp['codigo_postal']; ?><br>
              <b>Descripci&#243;n:</b> <?php echo $rsEmp['descripcion']; ?><br>
              <b>Sueldo:</b> $<?php echo $rsEmp['sueldo']; ?><br>
              <b>Turno:</b> <?php echo $rsEmp['turno']; ?><br>
              <b>Horarios:</b> <?php echo $rsEmp['horario']; ?><br>
              <b>prestaciones de ley:</b> <?php echo $rsEmp['prestaciones']; ?><br>
              <b>Cargo :</b> <?php echo $rsEmp['cargo']; ?><br>
              <b>Telefono de oficina:</b> <?php echo $rsEmp['telefono_oficina']; ?><br>
              <b>Telefono whatsapp:</b> <?php echo $rsEmp['telefono_whatsapp']; ?><br>
              <b>Email de contacto:</b> <?php echo $rsEmp['correo_contacto']; ?><br>
              <b>Link sitio web:</b> <a target="_blank" href="<?php echo $rsEmp['linksitioweb']; ?>"><?php echo $rsEmp['linksitioweb']; ?></a><br>
            </div>
          </div>
          </div>
        </div><!-- /.col-sm-4 -->
        
        <div class="col-sm-1"></div>
        
        <div class="col-sm-5">
          <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">MULTIMEDIA DEL ANUNCIO</h3>
                </div>
                <div class="panel-body">
                  <div class="form-body">
                        <b>LOGO DE EMPRESA</b><br>
                        <a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $rsEmp['img1']; ?>"><img width="80px;" src="<?php echo $rsEmp['img1']; ?>" alt="" /></a>
                   </div>
                </div>
          </div>
          
          <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">UBICACI&#211;N</h3>
                </div>
                <div class="panel-body">
                  <div class="form-body">
                        <iframe src="<?php echo $rsEmp['linkGoogle']; ?>" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                   </div>
                </div>
          </div>
        </div><!-- /.col-sm-4 -->
    <?php } ?>
      </div>
      
	</div>
</div>


<?php
	include('empleos-footer.php');
?>
</body>
</html>
<?php
    ob_end_flush();
?>