<?php
	session_start();
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
		
	
		//File upload code
		
		
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists		
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// End
	
	$imgPath = 'Hpcs_HR_Panel/uploads/'.basename($_FILES["fileToUpload"]["name"]);
		
		$conn = new mysqli("localhost", "root", "", "hpcs_admin");

		if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO `employees`(`name`,`modeOfEmployment`,`EmployeeID`,`DOJ`,`confirmDate`,`DOR`,`trainingStartDate`,`trainingCompletionDate`,`certiDOB`,`fatherName`,`pContactNo`,`eContactNo`,`presentAddr`,`presentAddrCity`,`presentAddrCountry`,`permanentAddr`,`permaAddrCity`,`permaAddrCountry`,`pEmailID`,`oEmailID`,`skypeID`,`blood`,`aadhar`,`PAN`,`voterID`,`passport`,`spouseContact`,`BankAccountNum`, `IFSC`, `bankName`, `bankAddress`,`actualDOB`,`10th`, `12th`, `degName`, `degMarks`,`passYear`,`Post`,`imgPath`,`accountType`)VALUES('$name','$mode','$eid','$doj','$confirm','$dor','$trainingStart','$trainingComplete','$dobc','$father','$primary','$emergency','$presentAddr','$presentAddrCity','$presentAddrCountry','$permaAddr','$permaAddrCity','$permaAddrCountry','$personal','$official','$skype','$bg','$aadhar','$PAN','$voter','$passport','$spouse','$bank', '$ifsc', '$bname', '$baddr', '$doba','$tenth','$twelfth','$degreeName','$degreeMarks','$passingYear','$post','$imgPath','$accountType')";


if ($conn->query($sql) === TRUE) {
//header("Location: http://localhost/Hpcs_HR_Panel/php/AddEmp.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}


?>



