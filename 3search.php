<?php
    ob_start();
?>
<?php
if(!isset($_REQUEST['term']))
exit();
 
require('3config.php');
 

$resault = $db->query('
	SELECT nombreRubro FROM rubro 
	WHERE nombreRubro 
	LIKE "'.ucfirst($_REQUEST['term']).'%" 
	ORDER BY nombreRubro ASC 
	LIMIT 0,10' );

$data = array();

while($row = mysqli_fetch_array($resault, MYSQL_ASSOC)){
	$data[] = array(
		'label' => $row['nombreRubro'],
		'value' => $row['nombreRubro'],
	);	
}

echo json_encode($data);
flush(); // Vide les tampons de sortie

?>
<?php
    ob_end_flush();
?>
