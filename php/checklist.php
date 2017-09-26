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
	 die("Connection Error: ".$conn->connect_error);
 }

 $result = $conn->query("SELECT * FROM checklist;");
 if(!$result)
	 echo "NO LISTINGS IN TABLE";
 else{
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
<body id='body' >
<div class='container col-sm-11 '>

    <div class='panel panel-default  panel-primary' id='panel1'>

        <div class='panel-heading'><span class='heading2'><b>Employee&nbsp;Checklist</b></span></div>
		
        <div class='panel-body' >

		<div id='panelBody'>

            <div class='table-responsive' style='margin-top:10px'>
                <table class='table table-striped table-bordered' id='myTable'>
                    <thead>
                    <tr>
                        <th><center>S&nbsp;No.</center></th>
                        <th><center>Employee&nbsp;ID</center></th>
                        <th><center>Employee&nbsp;Name</center></th>
                        <th><center>Checklist&nbsp;Status</center></th>
                        
                    </tr>
                    </thead>
                    <tbody>";
                    if($result->num_rows > 0){
				while($row = mysqli_fetch_array($result)){
					
					echo "<tr>
						
						<td><center>".$row['serialNo']."</center></td>
						<td><center>".$row['EmployeeID']."</center></td>
						<td><center>".$row['name']."</center></td>";
						if ($row['checklistStatus'])
							echo '<td><center>Complete</center></td>';
						else echo '<td><center><center>Pending</center></center></td>';
						
						
						echo "
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
        $('.a3').addClass('active');
    $('.a31').addClass('active');
});
</script>" ;
require_once('../html/footer.html');
	 
 }
 
?>

