<?php

	session_start();
	require_once('../includes/function.inc.php');	
	require_once('../includes/validate.inc.php');
	require_once('../includes/config.inc.php');
	
			
			$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			if (mysqli_connect_errno()) 
			{
				printf("Unable to connect to database: %s", mysqli_connect_error());
				exit();
			}
			
			if(isset($_POST['HpcsEmpId']) && isset($_POST['userOldPassword']) && isset($_POST['userNewPassword']))
			{
				$username = $_POST['HpcsEmpId'];
				$oldPassword = $_POST['userOldPassword'];
				$newPassword = $_POST['userNewPassword'];
				
				$sql1 = "SELECT * FROM login WHERE loginId ='".$username."' AND loginPassword='" . $oldPassword . "'";
				$result=$mysqli->query($sql1);
				
				if ($result->num_rows == 1) 
				{	
					$sql= "Update `login` Set `loginPassword` = '$newPassword' WHERE `loginId` = '$username'";
					$mysqli->query($sql);
					
					if ( $mysqli->affected_rows !== 0) 
					{
						echo "Password Changed Successfully";
					}
					else 
					{
						echo "Problem occured in password updation.";
					}
				}
				else{
					echo "Username and Password combination is not matched.<br>Please fill correct Username and Password";
				}
			}
			else{
				echo "Username, Old Password and New Password fields are mandatory. <br>Please Fill all the fields.";
			}
			
?>
		