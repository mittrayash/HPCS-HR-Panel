<?php
	$fnameErr = $lnameErr = $nameErr = $phoneErr = $emailErr =  $checkinErr = $checkoutErr = "";
	$fname = $lname = $name = $phone = $email = $checkin = $checkout = "";
	
	$usernameErr = $passwordErr = "";
	$username = $password = "";
	
	function validateInputs($data)
	{
		if (empty($data)) 
		{
			return false;
		}
		return true;
	}
	function DateCheck($checkin, $checkout)
	{
	   if((strtotime($checkout) - strtotime($checkin))<=0)
		{
			return false;
		}
		return true;
	}
	function login($username, $password)
	{
	if (empty($data)) 
		{
			return false;
		}
		return true;
	}
	function test_input($data) 
	{
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
?>	
