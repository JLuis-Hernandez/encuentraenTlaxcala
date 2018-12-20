<?php
    ob_start();
?>
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    //if(!isset($_SESSION['sess_username']) && $rol!="Gratis"){
       if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['sess_username'])) && $rol!="5")
            header('Location: https://encuentraentlaxcala.com/');
    
    $connection = mysqli_connect('127.0.0.1', 'encuen21_ustlax', 'RK0gW2x^oVT7','encuen21_Tlaxcala');
    
    $password = $_POST["contrasenaCliente"];
    $password1 = $_POST["contrasena1"];
    $password2 = $_POST["contrasena2"]; 
    
    $sql = mysqli_query($connection, "SELECT * FROM cliente WHERE idCliente='".$_SESSION['sess_user_id']."' ");
    while ($row = mysqli_fetch_array($sql)){ $pass = $row['contrasenaCliente']; }
    if(strcmp ($password , $pass) == 0){
        if(strcmp ($password1 , $password2) == 0){
            $sqlpass = mysqli_query($connection,"update cliente set contrasenaCliente='$password1' where idCliente='".$_SESSION['sess_user_id']."'");
            echo "<script>alert('Tú contaseña ha sido cambiada correctamente...');</script>";
            echo "<script>location.href = 'empleos-perfil';</script>";
        }else{
            echo "<script>alert('Tú nueva contraseña no coinciden ...Por favor vulve a intentar');</script>";
            echo "<script>location.href = 'empleos-Actualizar_contrasena';</script>";
        }
    }else{
        echo "<script>alert('Tu contraseña actual no es correcta...Vulve a intentarlo');</script>";
        echo "<script>location.href = 'empleos-Actualizar_contrasena';</script>";
    }
?>
<?php
    ob_end_flush();
?>