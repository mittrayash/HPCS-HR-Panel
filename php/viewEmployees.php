<?php


	session_start();
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
	require_once('../includes/config.inc.php');

	require_once('../html/header.html');
	require_once('..\includes\config.inc.php');
    require_once('../html/NavBarn.html');
		$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

		$result = $conn->query("SELECT * FROM employees;");
		$sql = "SELECT * FROM `employees`";
		
		if(!$result)
echo "no result";

		
	echo "


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Add New Employee</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <![endif]-->

<style type='text/css'>
    .panel{
        top: 15px;
		
    }
	.panel-heading{
		width: 100%;
		
		text-align: center;
		
	}
	#panelBody{
		overflow-x: scroll;
	}
	th{
		background-color: #ddd;
	}
	body{
			background-color:#008F95;
			
		}
</style>
<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
</head>
<body id='body'>
<div class='container col-sm-11'>

    <div class='panel panel-default  panel-primary' id='panel1'>

        <div class='panel-heading'><span class='heading2'><b>View Employees</b></span></div>
		
        <div class='panel-body' >

		<div id='panelBody'>

            <div class='table-responsive' style='margin-top:10px;'>
                <table class='table table-striped table-bordered' id='myTable'>
                    <thead>
                    <tr>
                        <th>S&nbsp;No.</th>
						
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Mode of Employment</th>
                        <th>Post</th>
                        <th>Employee&nbsp;ID</th>
                        <th>HPC&nbsp;Universe Password</th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;DOJ&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Confirm&nbsp;Date</th>
                        <th>&nbsp;&nbsp;&nbsp;DOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Training&nbsp;Start</th>
                        <th>Training&nbsp;Complete</th>
                        <th>Certificate&nbsp;DOB</th>
                        <th>Actual&nbsp;DOB</th>
                        <th>Father's&nbsp;Name</th>
                        <th>Primary Contact Number</th>
                        <th>Emergency Contact Number</th>
                        <th>Present&nbsp;Addr&nbsp;(Local)</th>
                        <th>Present&nbsp;Addr&nbsp;(City)</th>
                        <th>Present&nbsp;Addr&nbsp;(Country)</th>
                        <th>Permanent&nbsp;Addr&nbsp;Local)</th>
                        <th>Permanent&nbsp;Addr&nbsp;(City)</th>
                        <th>Permanent&nbsp;Addr&nbsp;(Country)</th>
                        <th>Personal&nbsp;Email&nbsp;ID</th>
                        <th>Official&nbsp;Email&nbsp;ID</th>
                        <th>Official&nbsp;Email&nbsp;Password</th>
                        <th>Skype&nbsp;ID</th>
                        <th>Skype&nbsp;ID&nbsp;Passord</th>
                        <th>Blood&nbsp;Group</th>
                        <th>Aadhar&nbsp;ID</th>
                        <th>PAN&nbsp;ID</th>
                        <th>Voter&nbsp;ID</th>
                        <th>Passport&nbsp;ID</th>
                        <th>Spouse&nbsp;Contact</th>
                        <th>Bank&nbsp;Acc&nbsp;No.</th>
                        <th>Account&nbsp;Type</th>
                        <th>IFSC&nbsp;Code</th>
                        <th>Bank&nbsp;Name</th>
                        <th>Bank&nbsp;Address</th>
                        <th>10th Marks</th>
                        <th>12th Marks</th>
                        <th>Degree&nbsp;Name</th>
                        <th>Degree Marks</th>
                        <th>Passing Year</th>
                        <th>Salary</th>

                    </tr>
                    </thead>
                    <tbody>";
                    if($result->num_rows > 0){
				while($row = mysqli_fetch_array($result)){
					
					echo "<tr>
						
						<td>".$row['serialNo']."</td>
						<td><img src='"; echo $row['imgPath']; echo "' alt='No image uploaded for this employee' height='170px' width='140px'></td>
						<td>".$row['name']."</td>
						<td>".$row['modeOfEmployment']."</td>
						<td>".$row['Post']."</td>
						<td>".$row['EmployeeID']."</td>
						<td>".$row['HPC_Uni_Pass']."</td>
						<td>".$row['DOJ']."</td>
						<td>".$row['confirmDate']."</td>
						<td>".$row['DOR']."</td>
						<td>".$row['trainingStartDate']."</td>
						<td>".$row['trainingCompletionDate']."</td>
						<td>".$row['certiDOB']."</td>
						<td>".$row['actualDOB']."</td>
						<td>".$row['fatherName']."</td>
						<td>".$row['pContactNo']."</td>
						<td>".$row['eContactNo']."</td>
						<td>".$row['presentAddr']."</td>
						<td>".$row['presentAddrCity']."</td>
						<td>".$row['presentAddrCountry']."</td>
						<td>".$row['permanentAddr']."</td>
						<td>".$row['permaAddrCity']."</td>
						<td>".$row['permaAddrCountry']."</td>
						<td>".$row['pEmailID']."</td>
						<td>".$row['oEmailID']."</td>
						<td>".$row['offPass']."</td>
						<td>".$row['skypeID']."</td>
						<td>".$row['skypePass']."</td>
						<td>".$row['blood']."</td>
						<td>".$row['aadhar']."</td>
						<td>".$row['PAN']."</td>
						<td>".$row['voterID']."</td>
						<td>".$row['passport']."</td>
						<td>".$row['spouseContact']."</td>
						<td>".$row['BankAccountNum']."</td>
						<td>".$row['accountType']."</td>
						<td>".$row['IFSC']."</td>
						<td>".$row['IFSC']."</td>
						<td>".$row['bankAddress']."</td>
						<td>".$row['10th']."</td>
						<td>".$row['12th']."</td>
						<td>".$row['degName']."</td>
						<td>".$row['degMarks']."</td>
						<td>".$row['passYear']."</td>
						<td>".$row['Salary']."</td>
					
                    </tr>";
					}
					}
                    echo "</tbody>
                </table>
            </div>";


		mysqli_close($conn);

        echo "</div>
		</div>
    </div>

</div>
</body>
</html>

";
echo "<script>
$(document).ready(function(){
        $('.a2').addClass('active');
    $('.a23').addClass('active');
});
</script>" ;
require_once('../html/footer.html');
?>

