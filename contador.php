<?php
ob_start();
?>


<?php
// protección IP en segundos
$counter_expire = 10;

// lista de ignorados 
$counter_ignore_agents = array('bot', 'bot1', 'bot3');

// lista de ignorados ip
$counter_ignore_ips = array('127.0.0.2', '127.0.0.3');


// ajustes datebase
$counter_host = "localhost";
$counter_user = "encuen21_ustlax";
$counter_password = "RK0gW2x^oVT7";
$counter_database = "encuen21_Tlaxcala";

// 
$counter_agent = $_SERVER['HTTP_USER_AGENT'];
$counter_ip = $_SERVER['REMOTE_ADDR']; 
$counter_time = time();



// conectar base de datos
$counter_connected = true;
$link = mysqli_connect($counter_host, $counter_user, $counter_password, $counter_database);
if (!$link) 
{
 	// no se puede conectar a la base de datos
	$counter_connected = false;
	die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	exit;
}

if ($counter_connected == true) 
{
   $ignore = false; 
   
   // obtener información de contadores
   $sql = "SELECT * FROM counter_values LIMIT 1";
   $res = mysqli_query($link, $sql);
   
   // llenar en vacío
   if (mysqli_num_rows($res) == 0)
   {	  
	  $sql = "INSERT INTO `counter_values` (`id`, `day_id`, `day_value`, `yesterday_id`, `yesterday_value`, `week_id`, `week_value`, `month_id`, `month_value`, `year_id`, `year_value`, `all_value`, `record_date`, `record_value`) VALUES ('1', '" . date("z") . "',  '1', '" . (date("z")-1) . "',  '0', '" . date("W") . "', '1', '" . date("n") . "', '1', '" . date("Y") . "',  '1',  '1',  NOW(),  '1')";
	  mysqli_query($link, $sql);

	  // recargar con ajustes
	  $sql = "SELECT * FROM counter_values LIMIT 1";
      $res = mysqli_query($link, $sql);
	  
	  $ignore = true;
   }   
   $row = mysqli_fetch_assoc($res);
   
   $day_id = $row['day_id'];
   $day_value = $row['day_value'];
   $yesterday_id = $row['yesterday_id'];
   $yesterday_value = $row['yesterday_value'];
   $week_id = $row['week_id'];
   $week_value = $row['week_value'];
   $month_id = $row['month_id'];
   $month_value = $row['month_value'];
   $year_id = $row['year_id'];
   $year_value = $row['year_value'];
   $all_value = $row['all_value'];
   $record_date = $row['record_date'];
   $record_value = $row['record_value'];
   
   
   // comprobar listas
   $length = sizeof($counter_ignore_agents);
   for ($i = 0; $i < $length; $i++)
   {
	  if (substr_count($counter_agent, strtolower($counter_ignore_agents[$i])))
	  {
	     $ignore = true;
		 break;
	  }
   }
   
   $length = sizeof($counter_ignore_ips);
   for ($i = 0; $i < $length; $i++)
   {
	  if ($counter_ip == $counter_ignore_ips[$i])
	  {
	     $ignore = true;
		 break;
	  }
   }
   
      
   // eliminar ips gratuitas
   if ($ignore == false)
   {
      $sql = "DELETE FROM counter_ips WHERE unix_timestamp(NOW())-unix_timestamp(visit) >= $counter_expire"; 
      mysqli_query($link, $sql);	  
   }
      
   // comprobar entrada
   if ($ignore == false)
   {
      $sql = "update counter_ips set visit = NOW() where ip = '$counter_ip'";
	  mysqli_query($link, $sql);
	  
	  if (mysqli_affected_rows($link) > 0)
	  {
		 $ignore = true;						   		 
	  }
	  else
	  {
		 // iinsertar ip
	     $sql = "INSERT INTO counter_ips (ip, visit) VALUES ('$counter_ip', NOW())";
   	     mysqli_query($link, $sql); 
	  }	  	  
   }
   
   // online
   $sql = "SELECT * FROM counter_ips";
   $res = mysqli_query($link, $sql);
   $online = mysqli_num_rows($res);
      
   // añadir counter
   if ($ignore == false)
   {     	  
		 
	  // 
	  $sql = "UPDATE counter_values SET day_id = '$day_id', day_value = '$day_value', yesterday_id = '$yesterday_id', yesterday_value = '$yesterday_value', week_id = '$week_id', week_value = '$week_value', month_id = '$month_id', month_value = '$month_value', year_id = '$year_id', year_value = '$year_value', all_value = '$all_value', record_date = '$record_date', record_value = '$record_value' WHERE id = 1";
	  mysqli_query($link, $sql);  	  
   }	  
	  	
?>
<?php
}
?>


<?php
ob_end_flush();
?>