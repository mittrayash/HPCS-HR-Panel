<?php

	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();

if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$mode = $_POST['mode'];
		$eid = $_POST['eid'];
		$doj = $_POST['doj'];
		$confirm = $_POST['confirm'];
		$dor = $_POST['dor'];
		$doba = $_POST['dobA'];
		$trainingStart = $_POST['trainingStart'];
		$trainingComplete = $_POST['trainingComplete'];
		$father = $_POST['father'];
		$primary = $_POST['primary'];
		$emergency = $_POST['emergency'];
		$presentAddr = $_POST['presentAddrLocal'];
		$presentAddrCity = $_POST['presentAddrCity'];
		$presentAddrCountry = $_POST['presentAddrCountry'];
		$permaAddr = $_POST['permaAddrLocal'];
		$permaAddrCity = $_POST['permaAddrCity'];
		$permaAddrCountry = $_POST['permaAddrCountry'];
		$personal = $_POST['personal'];
		$official = $_POST['official'];
		$skype = $_POST['skype'];
		$bg = $_POST['bg'];
		$aadhar = $_POST['aadhar'];
		$PAN = $_POST['PAN'];
		$voter = $_POST['voter'];
		$passport = $_POST['passport'];
		$spouse = $_POST['spouse'];
		$bank = $_POST['bank'];
		$ifsc = $_POST['ifsc'];
		$bname = $_POST['bname'];
		$accountType = $_POST['accType'];
		$baddr = $_POST['baddr'];
		$post = $_POST['post'];
		$dobc = $_POST['dobc'];
		$tenth = $_POST['tenth'];
		$twelfth = $_POST['twelfth'];
		$degreeName = $_POST['degreeName'];
		$degreeMarks = $_POST['degreeMarks'];
		$passingYear = $_POST['passingYear'];
		$salary = $_POST['salary'];
		$offPass = $_POST['offPass'];
		$skypePass = $_POST['skypePass'];
	
		//File upload code
		
		
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	error_reporting(E_ERROR | E_PARSE);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	//error_reporting(E_ALL ^ E_WARNING | E_PARSE);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists		
if (file_exists($target_file)) {
   
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
//echo "Sorry, your file is too large.";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

} else {
//echo "Sorry, there was an error uploading your file.";
}
}
// End
// Now generating 9 digit HPCS_UNIVERSE_PASSWORD (RANDOM EVERYTIME)


	
	function generateRandomString($length = 10) {
		global $randomString;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	generateRandomString();

$imgPath = '../uploads/'.basename($_FILES["fileToUpload"]["name"]);

$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO `employees`(`name`,`modeOfEmployment`,`EmployeeID`,`DOJ`,`confirmDate`,`DOR`,`trainingStartDate`,`trainingCompletionDate`,`certiDOB`,`fatherName`,`pContactNo`,`eContactNo`,`presentAddr`,`presentAddrCity`,`presentAddrCountry`,`permanentAddr`,`permaAddrCity`,`permaAddrCountry`,`pEmailID`,`oEmailID`,`skypeID`,`blood`,`aadhar`,`PAN`,`voterID`,`passport`,`spouseContact`,`BankAccountNum`, `IFSC`, `bankName`, `bankAddress`,`actualDOB`,`10th`, `12th`, `degName`, `degMarks`,`passYear`,`Post`,`imgPath`,`accountType`,`Salary`,`offPass`, `skypePass`,`HPC_Uni_Pass`)VALUES('$name','$mode','$eid','$doj','$confirm','$dor','$trainingStart','$trainingComplete','$dobc','$father','$primary','$emergency','$presentAddr','$presentAddrCity','$presentAddrCountry','$permaAddr','$permaAddrCity','$permaAddrCountry','$personal','$official','$skype','$bg','$aadhar','$PAN','$voter','$passport','$spouse','$bank', '$ifsc', '$bname', '$baddr', '$doba','$tenth','$twelfth','$degreeName','$degreeMarks','$passingYear','$post','$imgPath','$accountType','$salary', '$offPass', '$skypePass', '$randomString')";

$sql2 = "INSERT INTO `checklist`(`EmployeeID`, `name`) VALUES ('$eid', '$name')";


if ($conn->query($sql) === TRUE) {
	//echo $conn->errno;
	echo $conn->error."<br />";
	if ($conn->query($sql2) === TRUE)
	{
	}
 if($conn->error == ''){
	 //echo $conn->errno;
 echo '

<script type="text/javascript">
		console.log("asdasd");
    $(window).on("load",function(){
        $("#myModal").modal("show");
    });
</script>


 ';
 }

 } else {
	 //echo $conn->error;
	 if($conn->errno == 1062){
	 
	
 }
//echo $conn->errno;
 }
if($conn->error == ''){

}

} else {
	
}


?>