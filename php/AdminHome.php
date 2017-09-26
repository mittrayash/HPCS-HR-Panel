<!DOCTYPE html>

<?php
	session_start();
	
	
	
	require_once('../includes/config.inc.php');
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
	require_once('../html/header.html');

	
	//require_once('../html/viewclientdetails.html');
	echo '<style type="text/css">#backButton{ visibility:hidden; display:none; } #WelSearch{margin-top: 0px; }#LineBrk{margin-top: 24px; }#tags{margin-top: 22px; }</style>';
	
	require_once('../html/NavBarn.html');
	require_once('../html/AdminHome.html');
	
	
	require_once('../html/footer.html');
		
	echo "<script>
$(document).ready(function(){
        $('.a1').addClass('active');
    
});
</script>" ;

	
?>
