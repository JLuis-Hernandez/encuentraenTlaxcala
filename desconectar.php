<?php
    ob_start();
?>
 <?php
    session_start();   //mantiene datos de la sesion 
    session_destroy(); //destruye toda la informacion de la sesion activa
    header('location: https://encuentraentlaxcala.com/');//redirecciona a index.html
?> 
<?php
    ob_end_flush();
?>