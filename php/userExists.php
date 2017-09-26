<?php
session_start();
	
require_once('../includes/config.inc.php');
$q = $_GET["q"];
$reply  = "";


	$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
		
$result = $conn->query("SELECT EmployeeID FROM employees WHERE EmployeeID = '$q';");
//echo $result;

if($result->num_rows > 0){
//echo $reply = "Username already exists!";

}
else{
	echo $reply = "User does not exist! Please enter a valid username.";

}

?>