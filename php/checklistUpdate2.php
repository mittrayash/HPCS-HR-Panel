<?php 

	
require_once('../includes/config.inc.php');

$conn = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql="SELECT `EmployeeID` FROM `checklist`";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
 $arr = array();
    while($row = mysqli_fetch_array($result)) {

 array_push($arr,$row['EmployeeID']);
 
 }
 echo json_encode($arr);
}
 mysqli_close($conn); 
?>