<?php
    ob_start();
?>
<?php
   // define database related variables
   $database = 'encuen21_Tlaxcala';
   $host = 'localhost';
   $user = 'encuen21_ustlax';
   $pass = 'RK0gW2x^oVT7';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "Incapaz de conectar a la base de datos";
   }
   
?>
<?php
    ob_end_flush();
?>


