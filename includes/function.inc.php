<?php
	function redirect($page) 
	{
		header('refresh:0;url='.$page.'');
		exit();
	}
	function check_login_status() 
	{
		if (isset($_SESSION['hpcs_admin_logged_in'])) 
		{
			return $_SESSION['hpcs_admin_logged_in'];
		}
		return false;
	}
	function checkLoginStatusAndRedirect()
	{
		if (check_login_status() == false) 
		{
			redirect('../index.php');
		}
	}
	function kh_sendEmail($type,$name,$phone,$email,$checkin,$checkout)
	{
		include_once("Mail.php");
		$From = "Kamla <kamlareview@gmail.com>"; 
		$To = "Mayank Seth <sethmayank01@gmail.com>,Satyam Shivam <hellosatyam.in@gmail.com>,Anand <anand@hpcsphere.com>, Shashi <shashi@hpcsphere.com>";
		if($type==0)
		{
			$Subject = "Negative Feedback Response Received"; 
			$Message = "Negative Feedback Response Received" . "," . $name . "," . $phone . "," . $email . "," . $checkin . "," . $checkout . "!"; 
		}
		if($type==1)
		{
			$Subject = "Positive Feedback Response Received"; 
			$Message = "Positive Feedback Response Received" . "," . $name . "," . $phone . "," . $email . "," . $checkin . "," . "$checkout" . "!"; 
		}
		if($type==2)
		{
			$Subject = "Thank you for your stay !"; 
			//$Message = file_get_contents('feedbackEmail.php', FILE_USE_INCLUDE_PATH);
			
			$Message='<html>
	<head>
	</head>
	<body style="background-color:#0a7e9c;">
		<div style="float:center;position:relative;width: 500px;height: 500px;margin: 0px auto;background-color:#EFEFEF;">
			<div style="font-size:20px;color:orange;">
				<div style="margin:10px;">
																
					<img style="position:absolute;height:128px;width:190px;left:150px;" src="http://54.68.134.163/images/KamlaHotelLogo.gif"  />
					<p>Dear Valued Customer,</p>
					<p>We hope you enjoyed your recent stay at Kamla Hotel. Only you can tell us about your experience, so please take a few minutes to share your feedback by clicking the button below.</p>
					<p style="color:black;">Were you satisfied during your visit?</p>
				 
				</div>
				<div style="margin-left:25%">
					<span style="float:left;">
						<form action= "http://localhost/KamlaHotel/php/feedbackProcess.php" method= "post">
				
							<input type="hidden" name="name" value =   '  .  $name  .  '>
							<input type="hidden" name="phone" value =  '  .  $phone  .  '>
							<input type="hidden" name="email" value =   '  .  $email  .  '>
							<input type="hidden" name="checkin" value =   '  .  $checkin  .  '>
							<input type="hidden" name="checkout" value =   '  .  $checkout  .  '>
							<button type="submit" name="feedback" value="YES" style="position:relative;left:-100px;top:-30px;width:130px;height:40px;" > Yes </button>
						</form>
					</span>
					<span>
						<form action= "http://localhost/KamlaHotel/php/feedbackProcess.php" method= "post" >
							
							<input type="hidden" name="name" value =   '  .  $name  .  '>
							<input type="hidden" name="phone" value =  '  .  $phone  .  '>
							<input type="hidden" name="email" value =  '  .  $email  .  '>
							<input type="hidden" name="checkin" value =   '  .  $checkin  .  '>
							<input type="hidden" name="checkout" value =   '  .  $checkout  .  '>
							<button type="submit" name="feedback" value="NO" style="position:relative;left:100px;top:-85px;width:130px;height:40px;" > NO </button>
						</form>
					</span>
				</div>
			</div>	
		</div>
	</body>		
</html>';
		}	
		$Host = "smtp.gmail.com"; 
		$Username = 'kamlareview@gmail.com'; 
		$Password = 'welcomekamla'; 
		$Headers = array ('From' => $From, 'To' => $To, 'Subject' => $Subject,'MIME-Version' => '1.0\r\n' ,'Content-Type' => 'text/html; charset=ISO-8859-1\r\n' ); 
		$Params =array ('host' => $Host, 'auth' => 'PLAIN','username' => $Username, 'password' => $Password);
		$SMTP = @Mail::factory('smtp', $Params); 
		$mail = @$SMTP->send($To, $Headers, $Message);   
	
		if($type==2)
		{
			if (@PEAR::isError($mail))
			{ 
				echo(@$mail->getMessage()); 
				echo "<script type='text/javascript'> alert('Feedback email send Error!');</script>";						
			} 
			else 
			{ 
				echo "<script type='text/javascript'> alert('Feedback email send to customer!');</script>";						
			} 
		}
	}
?>