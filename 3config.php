<?php
    ob_start();
?>
<?php
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'encuen21_ustlax');
	define('DB_PASSWORD', 'RK0gW2x^oVT7');
	define('DB_DATABASE', 'encuen21_Tlaxcala');
	//db server connecting
	$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if($db->connect_error)
	die("connect error : ".$db->connect_error);
	$db->query("SET NAMES 'utf8'");
?>

<?php
    ob_end_flush();
?>