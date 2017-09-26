<?php

	
require_once('../includes/config.inc.php');

if(isset($_POST['submit1'])){
	
	$eid = $_POST["eid"];
	$one = $_POST["one"];
	$two = $_POST["two"];
	$three = $_POST["three"];
	$four = $_POST["four"];
	$five = $_POST["five"];
	$six = $_POST["six"];
	$seven = $_POST["seven"];
	$eight = $_POST["eight"];
	$nine = $_POST["nine"];
	$ten = $_POST["ten"];
	$eleven = $_POST["eleven"];
	$twelve = $_POST["twelve"];
	$thirteen = $_POST["thirteen"];
	$fourteen = $_POST["fourteen"];
	$fifteen = $_POST["fifteen"];
	$sixteen = $_POST["sixteen"];
	$seventeen = $_POST["seventeen"];
	$eighteen = $_POST["eighteen"];
	$nineteen = $_POST["nineteen"];
	$twenty = $_POST["twenty"];
	$twoOne = $_POST["twoOne"];
	$twoTwo = $_POST["twoTwo"];
	$twoThree = $_POST["twoThree"];
	$twoFour = $_POST["twoFour"];
	$twoFive = $_POST["twoFive"];
	$twoSix = $_POST["twoSix"];
	$twoSeven = $_POST["twoSeven"];
	$twoEight = $_POST["twoEight"];
	$twoNine = $_POST["twoNine"];
	$thirty = $_POST["thirty"];
	$threeOne = $_POST["threeOne"];
	$threeTwo = $_POST["threeTwo"];
	$threeThree = $_POST["threeThree"];
	$threeFour = $_POST["threeFour"];
	$threeFive = $_POST["threeFive"];
	$threeSix = $_POST["threeSix"];
	$threeSeven = $_POST["threeSeven"];
	$threeEight = $_POST["threeEight"];
	$threeNine = $_POST["threeNine"];
	$forty = $_POST["forty"];
	$fourOne = $_POST["fourOne"];
	$fourTwo = $_POST["fourTwo"];
	$fourThree = $_POST["fourThree"];
	
	echo "ten = ".$ten;
	$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}


	$sql = "UPDATE `checklist` SET `hpcs_email_ID`='$one',`prepare_laptop`='$two',`email_social`='$three',`email_instructions`='$four',`email_mlq4`='$five',`email_teamsID`='$six',`email_joiningProcess`='$seven',`GoogleDriveAccount`='$eight',`FillDetailsSheet`='$nine',`collectDocs`='$ten',`initialVerification`='$eleven',`handOriginals`='$twelve',`giveLaptop`='$thirteen',`giveNotebookPen`='$fourteen',`greetingCard`='$fifteen',`trainingSchedule`='$sixteen',`welcomeMeeting`='$seventeen',`welcomeEmail`='$eighteen',`skypeID`='$nineteen',`pingID`='$twenty',`addInSkypeGroup`='$twoOne',`giveJoiningDocs`='$twoTwo',`signOnDocs`='$twoThree',`performaSheet`='$twoFour',`verifyPersonalContact`='$twoFive',`createEmpFile`='$twoSix',`placeSignedDocs`='$twoSeven',`addBankKotak`='$twoEight',`attendanceSheet`='$twoNine',`fillEmpDetailSheet`='$thirty',`fillEmpSalarySheet`='$threeOne',`addBirthday`='$threeTwo',`addMarriage`='$threeThree',`addOneYearCompletion`='$threeFour',`addOnePointFiveYear`='$threeFive',`probationCompletion`='$threeSix',`addInWhatsappGroup`='$threeSeven',`verifyOriginals`='$threeEight',`returnDocsToEmp`='$threeNine',`EmpAddressInGMap`='$forty',`WordpressAccount`='$fourOne',`OCLsheet`='$fourTwo',`salaryReview`='$fourThree' WHERE `EmployeeID` = '$eid'";
	
	
	if ($conn->query($sql) == true) {

	  echo 1;
	} 
	else {
	
	 
	 echo $conn->error;
	}
	
}






?>