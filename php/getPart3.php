<?php

	
require_once('../includes/config.inc.php');
$year = intval($_GET['q']);


$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM `employees` WHERE YEAR(DOJ) = '$year';");

if(!$result){
	echo '';
}
$code = 0;
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	$code += 1;
	
	}
}
     echo   $part3 = $code + 1;
	 
	 ?>
		