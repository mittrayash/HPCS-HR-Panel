<?php
	
	require_once('../includes/function.inc.php');
	session_start();
	if (check_login_status() == false) 
	{
		redirect('../index.php');
	} 
	else 
	{
		unset($_SESSION['hpcs_admin_logged_in']);

		unset($_SESSION['hpcs_admin_username']);
		
		unset($_SESSION['hpcs_admin_userid']);
		session_destroy();
		redirect('../index.php');
	}
?>