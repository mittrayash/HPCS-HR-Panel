<?php
session_start();
	
require_once('../includes/config.inc.php');
$p = $_GET["p"];
$reply  = "";


		$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT pContactNo FROM employees WHERE pContactNo = '$p';");
if(!$result){
echo "no result";
}
if($result->num_rows > 0){
echo $reply = "Contact Number already registered!";
}

?>