<?php	
		//require_once('');
			session_start();
	
		
	if (isset($_COOKIE['hpc_ad_username']) && isset($_COOKIE['hpc_ad_pass'])) {
    
		$hpcs_username = $_COOKIE['hpc_ad_username'];
		$hpcs_password = $_COOKIE['hpc_ad_pass'];
		
    
	} else {
		$hpcs_username = "";
		$hpcs_password = "";
	}
	
	echo '<html>
			<head>
			
				<title>HPC Sphere Pvt. Ltd.</title>
				<link rel="shortcut icon" type="image/png" href="images/logoicon.ico">
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="css/common.css" />
				<link rel="stylesheet" type="text/css" href="/css/leave.css"> 
				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/reset.js"></script>
				<!--script src="js/checkUser.js"></script>
				<!--<script src="js/validation.js"></script>-->
				<script>
					$(document).ready(function()
					{
						$("#main").fadeIn(1500);
					});
				</script>
				
				<style type="text/css">
				
					.footer {
						position: fixed;
						right: 0;
						bottom: 0;
						left: 0;
						margin: 0;
						width: 100%;
						height: 35px;
						background-color: black;
						text-align: center;
						color: white;
					}

				
				</style>

			</head>
			
			<body id="main" style="display:none;">
				 
				<div class ="k_header">
					<img class="k_logo" src="images/logo.png"/>
					<p class ="PanelText">HR Panel</p>
				</div>
				<form action= "php/login.php" method= "POST" align="Center">
					
					<div class="k_loginDiv1">
					
							<p class="headingTextLogin">LOGIN</p>
							
							<hr class ="hrLineLogin">
							
							<div class="userDiv">	
								<span style= "left:13px" class="glyphicon glyphicon-user glyphicon-lg"></span>
								<input type="text" class="userText" placeholder="Username" name="hpcs_admin_username" value="'.$hpcs_username.'" autofocus>
								<span class="error"> <?php echo $usernameErr;?></span>
							</div>
					
							<div class="pwdDiv">
								<span style="top:5px; left:13px" class="glyphicon glyphicon-lock glyphicon-lg"></span>
								<input type="password" class="passwordText" placeholder="Password" name="hpcs_admin_password" value="'.$hpcs_password.'">
							</div>
							<div style="float:right; position:relative; margin-top: 225px; margin-right: 50px;">
								<span class="hoverfil" style="color:#00cccc; cursor:pointer; font-size : small; text-decoration:none; margin-right:80px " data-toggle="modal" data-target="#myModal">Change Password</span>
								<span class="remember" >
								<input  style="cursor:pointer; color:#00cccc; font-size:small;" type="checkbox" id="rememberme" name="hpcs_Universe_rememberme" value="RememberMe" >
								<span  id="rememberText" style="color:#00cccc; font-size:small; cursor:pointer;">Remember Me</span>
								</span>
							</div>
							
												
							<button type="submit" name="login" value="send" class="goButton btn btn-default btn-xm">GO  
								<span style="left: 10px;top: 1px;" class="glyphicon glyphicon-log-in"></span>
							</button>
							
					</div>	
				</form>	
				
				<div class="container">
				 
				  <!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog " style="margin-top:10%; width:40%;">
					  <div class="modal-content">
						<div class="modal-header" style="color:#1c1c4a; height:80px;">
						  <button type="button" id="closeTab" class="close" data-dismiss="modal">&times;</button>
						  <span style="float:left; position:absolute;"><img src="images/logo.png" width="150" height="55"/></span>
						  <center><h4 class="modal-title" style=" padding-top:12px;font-size:x-large;">Change Password</h4></center>
						</div>
						<div class="modal-body" style="height:250px; text-align: center; background-color:#edf4fa;">
							  <center>
							  <div id="messageBody">
								<div class="userDivReset">	
									<span style= "left:13px" class="glyphicon glyphicon-user glyphicon-lg"></span>
									<input type="text" class="userText" placeholder="Username" id="rUsername" autofocus>
								</div>
								<div class="pwdDivResetOld" >
									<span style="top:5px; left:13px" class="glyphicon glyphicon-lock glyphicon-lg"></span>
									<input type="password" class="passwordText" id="rOldPassword" placeholder="Old Password" >
								</div>
								<br>
								<div class="pwdDivResetNew" >
									<span style="top:5px; left:13px" class="glyphicon glyphicon-lock glyphicon-lg"></span>
									<input type="password" class="passwordText" id="rNewPassword" placeholder="New Password" >
								</div>
								<p id="UpdationMessage" >
								
								</p>
							  </div>
							  </center>
						</div>
						<div class="modal-footer" style="color:#1c1c4a;">
						  <button type="button" id="updatePassword" class="btn btn-default" >Change Password</button>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				
				<div class="clearfix"></div>
				';
				require_once('html/footer.html');
				echo '
					
			</body>
		</html>';
		
	
?>