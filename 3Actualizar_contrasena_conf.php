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
header('Content-Type: text/html; charset=ISO-8859-1');

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


    //Datos tomados del formulario Actualizar contrasena.php
$password = $_POST["contrasenaCliente"];
$password1 = $_POST["contrasena1"];
$password2 = $_POST["contrasena2"];


   $sql = mysql_query("SELECT * FROM cliente WHERE idCliente='".$_SESSION['sess_user_id']."' ");
  if($cambiopass= mysql_fetch_array($sql)){
    if($cambiopass["contrasenaCliente"] == SHA1("$password")){
                     
            if($password1!=$password2) {
                ?>
<script>alert('Tú nueva contraseña no coinciden ...Por favor vulve a intentar');</script>
<script>location.href = "2Actualizar_contrasena";</script>
<?php
     }else{
        mysql_query("UPDATE cliente SET contrasenaCliente=SHA1('$password2') WHERE idCliente='".$_SESSION['sess_user_id']."'",$link) or die(mysql_error());
?>
               
<script>alert('Tú contaseña ha sido cambiada correctamente...');</script>
<script>location.href = "2perfil";</script>
<?php

}
        }else{
                      
?>
  <script>alert('Tu contraseña actual no es correcta...Vulve a intentarlo');</script>
<script>location.href = "2Actualizar_contrasena";</script>

<?php
}

      }      
?>
<?php
    ob_end_flush();
?>