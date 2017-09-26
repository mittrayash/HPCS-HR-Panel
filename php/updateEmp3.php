<?php

//echo "asf8ohioufeofu8ouef8iofuowjwefouw8fuoweufoweufowuefo8uwefuouou3";
//if(isset($_POST['submit1'])){

//echo "asf8ohioufeofu8ouef8iofuowjwefouw8fuoweufoweufowuefo8uwefuouou3";

require_once('../includes/config.inc.php');
if(isset($_POST['submit1'])){
$fileToUpload = $_POST['fileToUpload'];
echo $fileToUpload;
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
		
	//echo "values passed";
		//File upload code
/*		
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit1"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists		
if (file_exists($target_file)) {
   
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

} else {
echo "Sorry, there was an error uploading your file.";
}
}
// End

$imgPath = '../uploads/'.basename($_FILES["fileToUpload"]["name"]);
*/
$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

// `imgPath`='$imgPath',
$sql="UPDATE `employees` SET `name`='$name' ,`modeOfEmployment`='$mode',`Post`='$post',`EmployeeID`='$eid',`DOJ`='$doj',`confirmDate`='$confirm',`DOR`='$dor',`trainingStartDate`='$trainingStart',`trainingCompletionDate`='trainingComplete',`certiDOB`='$dobc',`actualDOB`='$doba',`fatherName`='$father',`pContactNo`='$primary',`eContactNo`='$emergency',`presentAddr`='$presentAddr',`presentAddrCity`='$presentAddrCity',`presentAddrCountry`='$presentAddrCountry',`permanentAddr`='$permaAddr',`permaAddrCity`='$permaAddrCity',`permaAddrCountry`='$permaAddrCountry',`pEmailID`='$personal',`oEmailID`='$official',`skypeID`='$skype',`blood`='$bg',`aadhar`='$aadhar',`PAN`='$PAN',`voterID`='$voter',`passport`='$passport',`spouseContact`='$spouse',`BankAccountNum`='$bank',`accountType`='$accountType',`IFSC`='$ifsc',`bankName`='$bname',`bankAddress`='$baddr',`10th`='$tenth',`12th`='$twelfth',`degName`='$degreeName',`degMarks`='$degreeMarks',`passYear`='$passingYear',`Salary`='$salary' WHERE `EmployeeID` = '$eid'";

echo '<script>
$("#submit1").on("click", function(){
	
	$("#myModal").modal("show");
});
</script>
';
if ($conn->query($sql) == true) {
	//echo $conn->errno;
	// echo "Hi";
	// echo $conn->error."<br />";
 // if($conn->error == ''){
	 // //echo $conn->errno;
  echo 1;
 // }

 } else {
	
	 
	 echo $conn->error;
 }
//echo $conn->errno;
 
// if($conn->error == ''){

// }
// //echo $conn->errno;
 // else {
	
// //}
// }
}
?>