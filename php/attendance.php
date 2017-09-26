<?php
session_start();
require_once('../includes/config.inc.php');
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
$month = $_GET['month'];
$year = $_GET['year'];


$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}





// GET EmpID and NAME from Employee Table
$result = $conn->query("SELECT `EmployeeID`, `name`, `DOJ` FROM `employees`");


if(!$result){
echo "No result";
exit(1);
}


if($result->num_rows > 0){
echo '

<div class="container-fluid col-sm-11">

    <div class="panel panel-default  panel-primary" id="panel1">
        <div class="panel-heading"><span class="heading2"><center><b> Employee Attendance</b></center></span></div>
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="table-responsive" style="margin-top:10px;">
                        <table class="table table-striped table-bordered" id="myTable">
                            <thead>
                            <th style="background-color: white;"><center>Employee&nbsp;Name&nbsp; <span class="glyphicon glyphicon-arrow-down" ></span></center></th>
                            <th><center>Date&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></center></th>

                            ';

							$limit = cal_days_in_month(CAL_GREGORIAN,$month,$year);
							
                            for($i = 1; $i <= $limit; $i++){
                            echo '<th><center>'.$i.'</center></th>';
                            }

                            echo'
                            </thead>

							<tbody>
	


                            ';
while($row = $result->fetch_assoc()){
	$eid = $row['EmployeeID'];
	$doj = $row['DOJ'];
	
// GET EntryTime, ExitTime, AttendanceDate, AttendanceDay from AttendanceTable and store in array for current employee being examined.
	$sql12 = "SELECT * FROM `attendance_table` WHERE EmpId = '$eid' AND MONTH(AttendanceDate) = '$month' AND YEAR(AttendanceDate) = '$year'";
	$attendance = $conn->query($sql12);

	if(!$attendance){
	echo "No result";
	break;
	}

	$entryTime = array();
	$exitTime = array();
	$date = array();
	$fullDate = array();
	if($attendance->num_rows > 0){

	
	while($row1 = $attendance->fetch_assoc()){
		
		
		array_push($entryTime, $row1["EntryTime"]);
		
		array_push($exitTime, $row1["ExitTime"]);
		
		$temp = explode("-",$row1["AttendanceDate"]);
		array_push($date, $temp[2]);
		array_push($fullDate, $row1["AttendanceDate"]);
	}
	
}
// Array has been generated up till now
// DISPLAY THE TABLE
						
				
                            echo '
                            
                            <tr>
                                <td rowspan="3">'.$row["name"].'</td>
								
							<td>Entry&nbsp;Time</td>
							
						<!-- PRINT ENTRY TIME DATA -->
								
								';
							
							
							$j = 0;
							for ($i = 1; $i <= $limit; $i++){
								error_reporting(E_ERROR);
								if($i == $date[(array_search($i, $date))]){
									
									echo '<td>'.$entryTime[$j].'</td>';
									$j += 1;
									// echo '<td>'.$i.'</td>';
								}
								else {
									$dateString = $year."-".$month."-".$i;
									$timestamp = strtotime($dateString);
									$day = date('D', $timestamp);
									// NOW to check if employee did exist
									$joining = strtotime($doj);
									$ask = strtotime($dateString);
									$today = date("Y-m-d");
									
									if($day == "Sun" || $day == "Sat"){
										echo '<td>Weekly&nbsp;Off</td>';
									}
									else if($ask < $joining){
										
										echo '<td>No&nbsp;data found</td>';
									}
									else if($ask > strtotime($today)){
										echo '<td>No&nbsp;data found</td>';
									}
									else{
										echo '<td><b>Absent</b></td>';
									}
								
							}
								
							}
								
								
							echo '
								
							</tr>
							
					
                            <tr><td>Exit&nbsp;Time</td>';
							
							$j = 0;
							for ($i = 1; $i <= $limit; $i++){
								
								if($i == $date[(array_search($i, $date))]){
									
									echo '<td>'.$exitTime[$j].'</td>';
									$j += 1;
									// echo '<td>'.$i.'</td>';
								}
								else {
									$dateString = $year."-".$month."-".$i;
									$timestamp = strtotime($dateString);
									$day = date('D', $timestamp);
									// NOW to check if employee did exist
									$joining = strtotime($doj);
									$ask = strtotime($dateString);
									$today = date("Y-m-d");
									if($day == "Sun" || $day == "Sat"){
										echo '<td>Weekly&nbsp;Off</td>';
									}
									//To check if the user entered a date when the employee was not a part of the company
									else if($ask < $joining){
										
										echo '<td>No&nbsp;data found</td>';
									}
									//TO check if the user entered a date in the future
									else if($ask > strtotime($today)){
										echo '<td>No&nbsp;data found</td>';
									}
									else{
										echo '<td><b>Absent</b></td>';
									}
								
							}
								
							}
							
							
							echo '
							</tr>
                            <tr><td>Hours</td>
                            ';

							
							$j = 0;
							
							for ($i = 1; $i <= $limit; $i++){
								
								if($i == $date[(array_search($i, $date))]){
									
									$t1 = strtotime($exitTime[$j]);
									$t2 = strtotime($entryTime[$j]);
									
									echo '<td>'.round(((abs($t1-$t2))/(60*60)),2).'</td>';
									$j += 1;
									// echo '<td>'.$i.'</td>';
								}
								else {
									$dateString = $year."-".$month."-".$i;
									$timestamp = strtotime($dateString);
									$day = date('D', $timestamp);
									$today = date("Y-m-d");
									// NOW to check if employee did exist
									$joining = strtotime($doj);
									$ask = strtotime($dateString);
									if($day == "Sun" || $day == "Sat"){
										echo '<td>Weekly&nbsp;Off</td>';
									}
									else if($ask < $joining){
										
										echo '<td>No&nbsp;data found</td>';
									}
									else if($ask > strtotime($today)){
										echo '<td>No&nbsp;data found</td>';
									}
									else{
										echo '<td><b>Absent</b></td>';
									}
								
							}
								
							}
							
							echo '</tr>';
							

                            }
                            echo '
							
							</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    ';


    }


    ?>