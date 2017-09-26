<?php
require_once('../includes/config.inc.php');
$q = $_GET["q"];
$conn = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql="SELECT `Salary` FROM `employees` WHERE `EmployeeID` = '".$q."'";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
    $row = mysqli_fetch_array($result);
    echo "Current Salary: ₹".$row['Salary'];
}
mysqli_close($conn);


?>