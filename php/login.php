<?php
	session_start();
	require_once('../includes/function.inc.php');	
	require_once('../includes/validate.inc.php');
	require_once('../includes/config.inc.php');
		
		//if(isset($_POST['hpcs_Universe_rememberme'])){
			
		//	setcookie("userid","");
		//}
		//if(isset($_POST['hpcs_Universe_username']) && isset($_POST['hpcs_Universe_password']))
		//{
			$username = test_input($_POST['hpcs_admin_username']);
			if(!validateInputs($username))	$usernameErr = "Username can not be empty !";
			//if (!preg_match("/^[a-zA-Z0-9 ]*$/",$username)) $usernameErr = "Only alphanumeric characters allowed in Username !";
			
			if($usernameErr=="")
			{
				$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
				if (mysqli_connect_errno()) 
				{
					printf("Unable to connect to database: %s", mysqli_connect_error());
					exit();
				}

				$username = $mysqli->real_escape_string($_POST['hpcs_admin_username']);
				$password = $mysqli->real_escape_string($_POST['hpcs_admin_password']);
				
				$sql = "SELECT * FROM login WHERE ( loginId ='".$username."'OR Name ='".$username."' OR EmpId ='".$username."' ) AND loginPassword='" . $password . "'";
				$result=$mysqli->query($sql);
				
				if ($result->num_rows == 1) 
				{	
					if(isset($_POST['hpcs_Universe_rememberme'])){ //remember me checked
						setcookie("hpc_ad_username",$username,time() + (86400  * 30),"/");
						setcookie("hpc_ad_pass",$password,time() + (86400  * 30),"/");
					}
					
					$rows = mysqli_fetch_array($result);
					$name = explode(" ",$rows["Name"]);
					$_SESSION['hpcs_admin_logged_in'] = true;
					$_SESSION['hpcs_admin_userid'] = $rows["loginId"];//$username;//$_POST['username'];
					$_SESSION['hpcs_admin_username'] = $name[0];
					redirect('AdminHome.php');
					/*if($username == "admin")
					{
						redirect('welcomeManager.php');
					}
					else
					{
						redirect('welcomeFDU.php');
					} */
				}
				else 
				{
					echo "<script type='text/javascript'> alert('Invalid Username and/or Password!');</script>";	
					redirect('../index.php');
				}	
			}
			else 
			{
				echo "<script type='text/javascript'> alert(' $usernameErr ');</script>";	
				redirect('../index.php');
			}
		

?>		
