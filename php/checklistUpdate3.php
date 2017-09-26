<?php
	
require_once('../includes/config.inc.php');



$q = $_GET["q"];

$reply = '';

$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM `checklist` WHERE `EmployeeID` = '".$q."'");

if(!$result){
echo 'no result';
}
if($result->num_rows > 0){

//$_GET["times"]
	while($row = $result->fetch_assoc()){

	$name = $row["name"];
	$EmployeeID = $row["EmployeeID"];

	$hpcs_email_ID = $row["hpcs_email_ID"];
	$prepare_laptop = $row["prepare_laptop"];
	$email_social = $row["email_social"];
	$email_instructions = $row["email_instructions"];
	$email_mlq4 = $row["email_mlq4"];
	$email_teamsID = $row["email_teamsID"];
	$email_joiningProcess = $row["email_joiningProcess"];
	$GoogleDriveAccount = $row["GoogleDriveAccount"];
	$FillDetailsSheet = $row["FillDetailsSheet"];
	$collectDocs = $row["collectDocs"];
	$initialVerification = $row["initialVerification"];
	$handOriginals = $row["handOriginals"];
	$giveLaptop = $row["giveLaptop"];
	$giveNotebookPen = $row["giveNotebookPen"];
	$greetingCard = $row["greetingCard"];
	$trainingSchedule = $row["trainingSchedule"];
	$welcomeMeeting = $row["welcomeMeeting"];
	$welcomeEmail = $row["welcomeEmail"];
	$skypeID = $row["skypeID"];
	$pingID = $row["pingID"];
	$addInSkypeGroup = $row["addInSkypeGroup"];
	$giveJoiningDocs = $row["giveJoiningDocs"];
	$signOnDocs = $row["signOnDocs"];
	$performaSheet = $row["performaSheet"];
	$verifyPersonalContact = $row["verifyPersonalContact"];
	$createEmpFile = $row["createEmpFile"];
	$placeSignedDocs = $row["placeSignedDocs"];
	$addBankKotak = $row["addBankKotak"];
	$attendanceSheet = $row["attendanceSheet"];
	$fillEmpDetailSheet = $row["fillEmpDetailSheet"];
	$fillEmpSalarySheet = $row["fillEmpSalarySheet"];
	$addBirthday = $row["addBirthday"];
	$addMarriage = $row["addMarriage"];
	$addOneYearCompletion = $row["addOneYearCompletion"];
	$addOnePointFiveYear = $row["addOnePointFiveYear"];
	$probationCompletion = $row["probationCompletion"];
	$addInWhatsappGroup = $row["addInWhatsappGroup"];
	$verifyOriginals = $row["verifyOriginals"];
	$returnDocsToEmp = $row["returnDocsToEmp"];
	$EmpAddressInGMap = $row["EmpAddressInGMap"];
	$WordpressAccount = $row["WordpressAccount"];
	$OCLsheet = $row["OCLsheet"];
	$salaryReview = $row["salaryReview"];
	$checklistStatus = $row["checklistStatus"];


	echo '
	<!DOCTYPE html>

	<html>
	<head>


	</head>
	<body>

	<div class="container-fluid col-sm-11" style="padding-left: 100px;">

		<div class="panel panel-default  panel-primary" id="panel1">
			<div class="panel-heading"><span class="heading2"><center><b>Update Checklist</b><center></span></div>
			<div class="panel-body col-sm-offset-1 ">
			<div class="col-sm-11">
				<div class="row" id="submitMessage"></div>
				
				
				
				<div class="table-responsive" style="margin-top:10px;">
					<table class="table table-striped table-bordered" id="myTable">
						
						<tbody>';
				
						
				echo '		
						<tr>
						<th>1</th> <th>Create HPCS Email id</th> <td> <center>';
						if( $hpcs_email_ID == 1){
							echo '

						<input type="checkbox" name="name" id="one" checked>';
						}
						else{
							echo '

						<input type="checkbox" name="name" id="one">';
						}
						echo ' </center></td> </tr>
						
						<tr>
						<th>2</th> <th>Prepare Laptop (Use Checklist NSSC)</th><td> <center>';
						if( $prepare_laptop == 1){
						echo '

						<input type="checkbox" name="name" id="two" checked>';
						}
						else{
							echo '<input type="checkbox" name="name" id="two">';
						}
						
						echo ' </center></td><tr> 
						<th>3</th> <th>Send email for joining hpcsphere on social media</th><td> <center>';
						if( $email_social == 1){
							echo '

						<input type="checkbox" name="name" id="three" checked>';
						}
						else{
							echo '<input type="checkbox" name="name" id="three" >';
						}
						 echo ' </center></td> 
						</tr>
						<tr>
						<th>4</th> <th>Send email for general instructions</th><td> <center>';
						if( $email_instructions == 1){
							echo '

						<input type="checkbox" name="name" id="four" checked>';
						}
						else {
							echo '<input type="checkbox" name="name" id="four">';
						}
						echo ' </center></td> 
						</tr> 
						<tr>
						<th>5</th> <th>Send email mql4 book (chm and links) to docs/book on the mql4 & mql5 and slides</th><td> <center>';
						
						if( $email_mlq4 == 1){ echo '
						<input type="checkbox" name="name" id="five" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="five">';
						}
						echo ' </center></td> 
						</tr>
						<tr> 
						<th>6</th> <th>Send email for team\'s skype id and email id</th><td> <center>';
							
						if( $email_teamsID == 1){ echo '
						<input type="checkbox" name="name" id="six" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="six">';
						}	
						echo ' </center></td>
						</tr> 
						<tr>
						<th>7</th> <th>Send email for Joining process (Docs+Details)</th><td> <center>';

						if( $email_joiningProcess == 1){ echo '
						<input type="checkbox" name="name" id="seven" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="seven">';
						}
						echo ' </center></td> 
						</tr>
						<tr> <th>8</th> <th>Create google drive account using hpcs email id and email</th><td> <center>';

						if( $GoogleDriveAccount == 1){ echo '
						<input type="checkbox" name="name" id="eight" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="eight">';
						}
						echo ' </center></td> 
						</tr>
						<tr> <th>9</th> <th>Fill new joinee credentials details sheet</th><td> <center>';

						if( $FillDetailsSheet == 1){ echo '
						<input type="checkbox" name="name" id="nine" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="nine">';
						}
						echo ' </center></td>
						</tr> 
						<tr>
						<th>10</th> <th>Collect documents (using JDC) (10,12, MArks sheet + pass certificate)(8 sem mark sheet) (Btech Provisional)(PAN,permanent address proof)</th><td> <center>';

						
						if( $collectDocs == 1){ echo '
						<input type="checkbox" name="name" id="ten" checked>';}
						else {
							echo '<input type="checkbox" name="ten" id="ten">';
						}
						echo ' </center></td> </tr>
						<tr> 
						<th>11</th> <th> Initial verification by Anand. If All docs are not available then Send employee back home</th><td> <center>';

						if( $initialVerification == 1){ echo '
						<input type="checkbox" name="name" id="eleven" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="eleven">';
						}
						echo ' </center></td> </tr> 
						<tr> <th>12</th> <th>Give Original docs to satyam</th><td> <center>';

						if( $handOriginals == 1){ echo '
						<input type="checkbox" name="name" id="twelve" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twelve">';
						}
						echo ' </center></td> </tr> <tr> <th>13</th> <th>Give him laptop, laptop id and pwd, outlook, webmail access </th><td> <center>';

						if( $giveLaptop == 1){ echo '
						<input type="checkbox" name="name" id="thirteen" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="thirteen">';
						}
						echo ' </center></td> </tr> <tr> <th>14</th> <th>Give Note Book and Pen to new employee</th><td> <center>';
						
						if( $giveNotebookPen == 1){ echo '
						<input type="checkbox" name="name" id="fourteen" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="fourteen">';
						}
						echo ' </center></td> </tr> <tr> <th>15</th> <th>Welcome greeting card to new employee, get signed by team</th><td> <center>';

						if( $greetingCard == 1){ echo '
						<input type="checkbox" name="name" id="fifteen" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="fifteen">';
						}
						echo ' </center></td> </tr> <tr> <th>16</th> <th>Prepare training schedule and email</th><td> <center>';

						if($trainingSchedule == 1){ echo '
						<input type="checkbox" name="name" id="sixteen" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="sixteen">';
						}
						echo ' </center></td> </tr> <tr> <th>17</th> <th>Welcome meeting</th><td> <center>';

						if( $welcomeMeeting == 1){ echo '
						<input type="checkbox" name="name" id="seventeen" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="seventeen">';
						}
						echo ' </center></td> </tr> <tr> <th>18</th> <th>Send welcome email</th><td> <center>';

						if($welcomeEmail == 1){ echo '
						<input type="checkbox" name="name" id="eighteen" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="eighteen">';
						}
						echo ' </center></td> </tr> <tr> <th>19</th> <th>Create Skpye id</th><td> <center>';

						if( $skypeID == 1){ echo '
						<input type="checkbox" name="name" id="nineteen" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="nineteen">';
						}
						echo ' </center></td> </tr> <tr> <th>20</th> <th>Ping his skype id and email in hpcs skype group</th><td> <center>';

						if( $pingID == 1){ echo '
						<input type="checkbox" name="name" id="twenty" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twenty">';
						}
						echo ' </center></td> </tr> <tr> <th>21</th> <th>Add him in hpcs skype group</th><td> <center>';

						if( $addInSkypeGroup == 1){ echo '
						<input type="checkbox" name="name" id="twoOne" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoOne">';
						}
						echo ' </center></td> </tr> <tr> <th>22</th> <th>Give all the joining docs to employee (From Google Drive folder)</th><td> <center>';

						if( $giveJoiningDocs == 1){ echo '
						<input type="checkbox" name="name" id="twoTwo" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoTwo">';
						}
						echo ' </center></td> </tr> <tr> <th>23</th> <th>Sign on each and every  page of  every docs</th><td> <center>';

						if( $signOnDocs == 1){ echo '
						<input type="checkbox" name="name" id="twoThree" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoThree">';
						}
						echo ' </center></td> </tr> <tr> <th>24</th> <th>Check entry in performa sheet</th><td> <center>';

						if( $performaSheet == 1){ echo '
						<input type="checkbox" name="name" id="twoFour" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoFour">';
						}
						echo ' </center></td> </tr> <tr> <th>25</th> <th>Verify personal contact no</th><td> <center>';

						if( $verifyPersonalContact == 1){ echo '
						<input type="checkbox" name="name" id="twoFive" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoFive">';
						}
						echo ' </center></td> </tr> <tr> <th>26</th> <th>Create a new file for employee</th><td> <center>';

						if( $createEmpFile == 1){ echo '
						<input type="checkbox" name="name" id="twoSix" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoSix">';
						}
						echo ' </center></td> </tr> <tr> <th>27</th> <th> Keep signed docs in the document file </th><td> <center>';

						if( $placeSignedDocs == 1){ echo '
						<input type="checkbox" name="name" id="twoSeven" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoSeven">';
						}
						echo ' </center></td> </tr> <tr> <th>28</th> <th>Add bank account details in kotak</th><td> <center>';

						
						if( $addBankKotak == 1){ echo '
						<input type="checkbox" name="name" id="twoEight" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoEight">';
						}
						echo ' </center></td> </tr> <tr> <th>29</th> <th> Add employee attandence sheet</th><td> <center>';

						if( $attendanceSheet == 1){ echo '
						<input type="checkbox" name="name" id="twoNine" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="twoNine">';
						}
						echo ' </center></td> </tr> <tr> <th>30</th> <th>Fill up employee details sheet</th><td> <center>';

						if( $fillEmpDetailSheet == 1){ echo '
						<input type="checkbox" name="name" id="thirty" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="thirty">';
						}
						echo ' </center></td> </tr> <tr> <th>31</th> <th>Add in employee salary sheet</th><td> <center>';

						if( $fillEmpSalarySheet == 1){ echo '
						<input type="checkbox" name="name" id="threeOne" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeOne">';
						}
						echo ' </center></td> </tr> <tr> <th>32</th> <th> Add Birthday in Gmail Calander</th><td> <center>';

						if( $addBirthday == 1){ echo '
						<input type="checkbox" name="name" id="threeTwo" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeTwo">';
						}
						echo ' </center></td> </tr> <tr> <th>33</th> <th>Add Marriage anniversary in gmail calander</th><td> <center>';

						if( $addMarriage == 1){ echo '
						<input type="checkbox" name="name" id="threeThree" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeThree">';
						}
						echo ' </center></td> </tr> <tr> <th>34</th> <th>Add year completion in gmail calendar</th><td> <center>';

						if( $addOneYearCompletion == 1){ echo '
						<input type="checkbox" name="name" id="threeFour" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeFour">';
						}
						echo ' </center></td> </tr> <tr> <th>35</th> <th>Add 1.5 Year completion in gmail calendar</th><td> <center>';

						if( $addOnePointFiveYear == 1){ echo '
						<input type="checkbox" name="name" id="threeFive" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeFive">';
						}
						echo ' </center></td> </tr> <tr> <th>36</th> <th>Add probation completion in gmail calendar</th><td> <center>';

						if( $probationCompletion == 1){ echo '
						<input type="checkbox" name="name" id="threeSix" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeSix">';
						}
						echo ' </center></td> </tr> <tr> <th>37</th> <th>Add in hpcsphere whatsapp group</th><td> <center>';

						if( $addInWhatsappGroup == 1){ echo '
						<input type="checkbox" name="name" id="threeSeven" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeSeven">';
						}
						
						echo ' </center></td> </tr> <tr> <th>38</th> <th>Verify original docs by Satyam</th><td> <center>';

						if( $verifyOriginals == 1){ echo '
						<input type="checkbox" name="name" id="threeEight" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeEight">';
						}
						echo ' </center></td> </tr> <tr> <th>39</th> <th>Return Docs to employee on same day</th><td> <center>';

						if( $returnDocsToEmp == 1){ echo '
						<input type="checkbox" name="name" id="threeNine" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="threeNine">';
						}
						echo ' </center></td> </tr><tr> <th>40</th> <th>Update google map with new team member\'s address</th><td> <center>';

						if( $EmpAddressInGMap == 1){ echo '
						<input type="checkbox" name="name" id="forty" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="forty">';
						}
						echo ' </center></td> </tr><tr> <th>41</th> <th>Create wordpress account and email to employee</th><td> <center>';

						if( $WordpressAccount == 1){ echo '
						<input type="checkbox" name="name" id="fourOne" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="fourOne">';
						}
						echo ' </center></td> </tr><tr> <th>42</th> <th>Create OCL sheet and share OCL sheet with employee</th><td> <center>';

						if( $OCLsheet == 1){ echo '
						<input type="checkbox" name="name" id="fourTwo" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="fourTwo">';
						}
						echo ' </center></td> </tr><tr> <th>43</th> <th>Salary review after one month add in gmail calendar</th><td> <center>';

						if( $salaryReview == 1){ echo '
						<input type="checkbox" name="name" id="fourThree" checked>';}
						else {
							echo '<input type="checkbox" name="name" id="fourThree">';
						}
						echo ' </center></td> </tr>
						
						';
					
				
						echo "</tbody>
					</table>
				</div>
				<div class='form-group'>
								<div class='col-sm-2 col-sm-offset-5'>
									<br />
									<button type='submit' class='btn btn-primary btn-lg' id='updatee' name='updatee'>Update</button>
								</div>
							</div>
				</div>
				
				";


			mysqli_close($conn);

			echo '</div>
			</div>
		</div>
					
						
							
							
							


						</form>
					</div>
				</div>
			</div>
		</div>


	</div>


	';

	}
}
else{
echo "Error: User not found!";
exit(1);
}


?>

<script type='text/javascript'>
$(document).ready(function()
	$("#updatee").click(function(){
        $(this).hide();
    });
});
// function decider(id){
// 	   alert("asdaSD");
// return ($('#' + id).is(":checked"));
// }
// function onwee(){
	// alert(decider('one'););
// }

</script>

<?php

echo ' 
</body>
</html> ';

?>