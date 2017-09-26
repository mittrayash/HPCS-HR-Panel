<?php
require_once('../includes/config.inc.php');

	


$q = $_POST["search"];

$reply = '';

$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM `employees` WHERE `EmployeeID` = '".$q."'");

if(!$result){
echo 'no result';
}
if($result->num_rows > 0){

//$_GET["times"]
while($row = $result->fetch_assoc()){
$imgPath = $row["imgPath"];
//echo $imgPath;
$name = $row["name"];
$modeOfEmployment = $row["modeOfEmployment"];
$Post = $row["Post"];
$EmployeeID = $row["EmployeeID"];
$DOJ = $row["DOJ"];
$confirmDate = $row["confirmDate"];
$DOR = $row["DOR"];
$trainingStartDate = $row["trainingStartDate"];
$trainingCompletionDate = $row["trainingCompletionDate"];
$certiDOB = $row["certiDOB"];
$actualDOB = $row["actualDOB"];
$fatherName = $row["fatherName"];
$pContactNo = $row["pContactNo"];
$eContactNo = $row["eContactNo"];
$presentAddr = $row["presentAddr"];
$presentAddrCity = $row["presentAddrCity"];
$presentAddrCountry = $row["presentAddrCountry"];
$permaAddr = $row["permanentAddr"];
$permaAddrCity = $row["permaAddrCity"];
$permaAddrCountry = $row["permaAddrCountry"];
$pEmailID = $row["pEmailID"];
$oEmailID = $row["oEmailID"];
$skypeID = $row["skypeID"];
$blood = $row["blood"];
$aadhar = $row["aadhar"];
$PAN = $row["PAN"];
$voterID = $row["voterID"];
$passport = $row["passport"];
$spouseContact = $row["spouseContact"];
$BankAccountNum = $row["BankAccountNum"];
$accountType = $row["accountType"];
$IFSC = $row["IFSC"];
$bankName = $row["bankName"];
$bankAddress = $row["bankAddress"];
$tenth = $row["10th"];
$twelfth = $row["12th"];
$degName = $row["degName"];
$degMarks = $row["degMarks"];
$passYear = $row["passYear"];
$salary = $row["Salary"];
$HPC_Uni_Pass = $row["HPC_Uni_Pass"];
$offPass = $row["offPass"];
$skypePass = $row["skypePass"];

}}
else{
echo "Error: User not found!";
exit(1);
}

function func1(){
global $modeOfEmployment;
if($modeOfEmployment == 'Full Time'){
echo '<option value="Full Time" selected><a>&nbsp;Full Time</a></option>';
echo '<option value="Part Time"><a>&nbsp;Part Time</a></option>';
echo '<option value="Intern" ><a>&nbsp;Intern</a></option>';
}

else if($modeOfEmployment == 'Part Time'){
echo '<option value="Full Time" ><a>&nbsp;Full Time</a></option>';
echo '<option value="Part Time" selected><a>&nbsp;Part Time</a></option>';
echo '<option value="Intern" ><a>&nbsp;Intern</a></option>';
}
else if($modeOfEmployment == 'Intern'){
echo '<option value="Full Time" ><a>&nbsp;Full Time</a></option>';
echo '<option value="Part Time"><a>&nbsp;Part Time</a></option>';
echo '<option value="Intern" selected><a>&nbsp;Intern</a></option>';
}
else if($modeOfEmployment == '-'){

echo '<option value="-" selected><a>&nbsp;-</a></option>';
echo '<option value="Full Time" ><a>&nbsp;Full Time</a></option>';
echo '<option value="Part Time"><a>&nbsp;Part Time</a></option>';
echo '<option value="Intern" ><a>&nbsp;Intern</a></option>';
}





}

function func2(){
global $blood;
if($blood == 'O-'){
echo '<option value="O-" selected><a>&nbsp;O-</a></option>
<option value="O+"><a>&nbsp;O+</a></option>
<option value="A-"><a>&nbsp;A-</a></option>
<option value="A+"><a>&nbsp;A+</a></option>
<option value="B-"><a>&nbsp;B-</a></option>
<option value="B+"><a>&nbsp;B+</a></option>
<option value="AB-"><a>&nbsp;AB-</a></option>
<option value="AB+"><a>&nbsp;AB+</a></option>';
}
else if($blood == 'O+'){
echo '<option value="O-" ><a>&nbsp;O-</a></option>
<option value="O+" selected><a>&nbsp;O+</a></option>
<option value="A-"><a>&nbsp;A-</a></option>
<option value="A+"><a>&nbsp;A+</a></option>
<option value="B-"><a>&nbsp;B-</a></option>
<option value="B+"><a>&nbsp;B+</a></option>
<option value="AB-"><a>&nbsp;AB-</a></option>
<option value="AB+"><a>&nbsp;AB+</a></option>';
}
else if($blood == 'A-'){
echo '<option value="O-" ><a>&nbsp;O-</a></option>
<option value="O+"><a>&nbsp;O+</a></option>
<option value="A-" selected><a>&nbsp;A-</a></option>
<option value="A+"><a>&nbsp;A+</a></option>
<option value="B-"><a>&nbsp;B-</a></option>
<option value="B+"><a>&nbsp;B+</a></option>
<option value="AB-"><a>&nbsp;AB-</a></option>
<option value="AB+"><a>&nbsp;AB+</a></option>';
}
else if($blood == 'A+'){
echo '<option value="O-"><a>&nbsp;O-</a></option>
<option value="O+"><a>&nbsp;O+</a></option>
<option value="A-"><a>&nbsp;A-</a></option>
<option value="A+" selected><a>&nbsp;A+</a></option>
<option value="B-"><a>&nbsp;B-</a></option>
<option value="B+"><a>&nbsp;B+</a></option>
<option value="AB-"><a>&nbsp;AB-</a></option>
<option value="AB+"><a>&nbsp;AB+</a></option>';
}
else if($blood == 'B-'){
echo '<option value="O-"><a>&nbsp;O-</a></option>
<option value="O+"><a>&nbsp;O+</a></option>
<option value="A-"><a>&nbsp;A-</a></option>
<option value="A+"><a>&nbsp;A+</a></option>
<option value="B-" selected><a>&nbsp;B-</a></option>
<option value="B+"><a>&nbsp;B+</a></option>
<option value="AB-"><a>&nbsp;AB-</a></option>
<option value="AB+"><a>&nbsp;AB+</a></option>';
}
else if($blood == 'B+'){
echo '<option value="O-" ><a>&nbsp;O-</a></option>
<option value="O+"><a>&nbsp;O+</a></option>
<option value="A-"><a>&nbsp;A-</a></option>
<option value="A+"><a>&nbsp;A+</a></option>
<option value="B-"><a>&nbsp;B-</a></option>
<option value="B+" selected><a>&nbsp;B+</a></option>
<option value="AB-"><a>&nbsp;AB-</a></option>
<option value="AB+"><a>&nbsp;AB+</a></option>';
}
else if($blood == 'AB-'){
echo '<option value="O-"><a>&nbsp;O-</a></option>
<option value="O+"><a>&nbsp;O+</a></option>
<option value="A-"><a>&nbsp;A-</a></option>
<option value="A+"><a>&nbsp;A+</a></option>
<option value="B-"><a>&nbsp;B-</a></option>
<option value="B+"><a>&nbsp;B+</a></option>
<option value="AB-" selected><a>&nbsp;AB-</a></option>
<option value="AB+"><a>&nbsp;AB+</a></option>';
}
else if($blood == 'AB+'){
echo '<option value="O-"><a>&nbsp;O-</a></option>
<option value="O+"><a>&nbsp;O+</a></option>
<option value="A-"><a>&nbsp;A-</a></option>
<option value="A+"><a>&nbsp;A+</a></option>
<option value="B-"><a>&nbsp;B-</a></option>
<option value="B+"><a>&nbsp;B+</a></option>
<option value="AB-"><a>&nbsp;AB-</a></option>
<option value="AB+" selected><a>&nbsp;AB+</a></option>';
}


}

function func3(){
global $accountType;

if($accountType == "Savings"){
echo '<input type="radio" name="accType" id="accType" value="Savings" checked >&nbsp;Savings&nbsp;&nbsp;
<input type="radio" name="accType" id="accType" value="Checking" >&nbsp;Checking&nbsp;&nbsp;
<input type="radio" name="accType" id="accType" value="Interest-Bearing" >&nbsp;Interest-Bearing';
}
else if($accountType == "Checking"){
echo '<input type="radio" name="accType" id="accType" value="Savings"  >&nbsp;Savings&nbsp;&nbsp;
<input type="radio" name="accType" id="accType" value="Checking" checked >&nbsp;Checking&nbsp;&nbsp;
<input type="radio" name="accType" id="accType" value="Interest-Bearing" >&nbsp;Interest-Bearing';
}
else if($accountType == "Interest-Bearing"){
echo '<input type="radio" name="accType" id="accType" value="Savings"  >&nbsp;Savings&nbsp;&nbsp;
<input type="radio" name="accType" id="accType" value="Checking" >&nbsp;Checking&nbsp;&nbsp;
<input type="radio" name="accType" id="accType" value="Interest-Bearing" checked >&nbsp;Interest-Bearing';
}
}

echo '
<!DOCTYPE html>

<html>
<head>

</head>
<body>

<div class="container-fluid col-sm-11">

    <div class="panel panel-default  panel-primary" id="panel1">
        <div class="panel-heading"><span class="heading2"><center><b>Update Employee</b></center></span></div>
        <div class="panel-body col-sm-offset-1">
            <div class="row" id="submitMessage"></div>

            <div class="row">
                <div class="col-xs-12 col-sm-11">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data0"><span class="heading">Basic Details</span></button>

                        <div id="data0" class="collapse">
                            <div class="form-group">
                                <label for="eid" class="col-sm-4 control-label">Employee ID<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8"> 
                                    <input type="text" name="eid" id="eid" class="form-control" value="'.$EmployeeID.'" disabled required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="official" class="control-label col-sm-4">Official Email ID<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" name="official" id="official" value="'.$oEmailID.'" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="offPass" class="control-label col-sm-4">Official Email Password<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="offPass" id="offPass" value="'.$offPass.'"" class="form-control" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="skype" class="control-label col-sm-4">Skype ID<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="skype" id="skype" value="'.$skypeID.'"" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="skypePass" class="control-label col-sm-4">Skype Password<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="skypePass" id="skypePass" value="'.$skypePass.'"" class="form-control" required>
                                </div>
								
                            </div>

						<div class="form-group">
                                
                                    <label for="doj" class="control-label col-sm-4">Date of Joining<span class="asterisk">&nbsp;*</span></label>
                                
								
                                <div class="col-sm-8" >
								
                                    <input type="date" name="doj" id="doj" class="form-control" value="'.$DOJ.'"" required>
                                </div>
                            </div>

						<div class="form-group row ">
                                <div class=" col-sm-offset-5 col-sm-2">
                                    <button type="button" class="btn btn-success" id="copier" name="copier" onclick="abc();">Copy To Clipboard</button>
                                </div>
								
                            </div>
                        </div>
						<p id="message1" hidden></p>

                        <br />
                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data1"><span class="heading">General Details</span></button>

                        <div id="data1" class="collapse">


                            <div class="form-group">
                                <div class="row">
                                    <label for="fileToUpload0" class="col-sm-4 control-label">Current Image</label>
                                    <div class="col-sm-8">
                                        <img src="'; echo $imgPath; echo '" alt="No image uploaded for this employee" height="250px" width="190px">

                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <label for="fileToUpload" class="col-sm-4 control-label">Upload New Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <label for="name" class="col-sm-4 control-label" id="abc">Full Name
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control"  pattern="[A-Za-z ]{2,}" id="name" value="'.$name.'" autofocus  >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="mode" class="col-sm-4 control-label" id="label1">Mode of Employment</label>
                                    <div class="dropdown col-sm-4 " id="list2">
                                        <select name="mode"  value="'.$modeOfEmployment.'"  id="mode">
                                            ';
                                            func1();
                                            echo '

                                        </select>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Post" class="col-sm-4 control-label">Designation</label>

                                <div class="dropdown col-sm-4" id="list4">
                                    <select name="post" id="post">
                                        <option value="Software Engineer"><a>&nbsp;Software Engineer</a></option>
                                        <option value="Director"><a>&nbsp;Director</a></option>
                                        <option value="Intern"><a>&nbsp;Intern</a></option>
                                    </select>


                                </div>
                            </div>

                            <br />
                            <div>
                                <p><span id="reply" style="color: #bd4147; "></span></p>
                            </div>
                        </div>





                <br />
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data2"><span class="heading">Personal Details</span></button>
                <div id="data2" class="collapse">

                    <div class="form-group">
                        
                            <label for="dobc" class="control-label col-sm-4">Certificate DOB</label>
                        
                        <div class="col-sm-8" id="dob">
                            <input type="date" name="dobc" id="dobc" class="form-control" value="'.$certiDOB.'">
                        </div>
                    </div>
                    <div class="form-group">
                       
                            <label for="dobA" class="control-label col-sm-4">Actual DOB</label>
                       
                        <div class="col-sm-8" id="doba">
                            <input type="date" name="dobA" id="dobA" class="form-control" value="'.$actualDOB.'" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="father" class="col-sm-4 control-label">Father\'s Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="father" id="father" class="form-control" value="'.$fatherName.'" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="bg" class="col-sm-4 control-label" id="label2">Blood Group</label>
                            <div class="dropdown col-sm-4" id="list1">

                                <select name="bg" id="bg" >
                                    ';
                                    func2();
                                    echo '
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="aadhar" class="control-label col-sm-4">Aadhar ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="aadhar" id="aadhar" value="'.$aadhar.'" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="PAN" class="control-label col-sm-4">PAN ID</label>
                        <div class="col-sm-8">
                            <input type="text" id="PAN" name="PAN" value="'.$PAN.'" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="voter" class="control-label col-sm-4">Voter ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="voter" id="voter" value="'.$voterID.'" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="passport" class="control-label col-sm-4">Passport ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="passport" id="passport" value="'.$passport.'" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="spouse" class="control-label col-sm-4">Spouse Phone/Email</label>
                        <div class="col-sm-8">
                            <input type="text" name="spouse" id="spouse" value="'.$spouseContact.'" class="form-control">
                        </div>
                    </div>


                </div>
                <br />
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data3"><span class="heading">Important Dates</span></button>
                <div id="data3" class="collapse">


                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="confirm" class="control-label">Confirm Date</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" id="confirm" name="confirm" value="'.$confirmDate.'" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="dor" class="control-label">Date of Registration</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="dor" id="dor" value="'.$DOR.'" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="trainingStart" class="control-label">Training Start Date</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="trainingStart" value="'.$trainingStartDate.'" id="trainingStart" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="trainingComplete" class="control-label">Training Completion Date</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" name="trainingComplete" id="trainingComplete" value="'.$trainingCompletionDate.'" class="form-control" >
                        </div>
                    </div>



                </div>
                <br />
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data4"><span class="heading">Contact Details</span></button>
                <div id="data4" class="collapse">

                    <div class="form-group">
                        <label for="primary" class="col-sm-4 col-xs-12 control-label">Primary Contact No.</label>

                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <input type="tel" name="primary" id="primary" class="form-control" value="'.$pContactNo.'" maxlength="10" minlength="10" onchange="verifyContact(this.value)";>
                        </div>
                        <br />
                        <div>
                            <p><span id="reply2" style="color: #bd4147; "></span></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="emergency" class="col-sm-4 col-xs-12 control-label">Emergency Contact No.</label>

                        <div class="col-xs-12  col-sm-8 col-md-8">
                            <input type="tel" name="emergency" id="emergency" class="form-control" value="'.$eContactNo.'" maxlength="10" minlength="10" >
                        </div>
                    </div>
                    <blockquote>
                        <div class="form-group">
                            <label for="presentAddrLocal" class="col-sm-4 control-label">Present Address</label>
                            <div class="col-sm-8" style="left: -10px;">
                                <input type="text" name="presentAddrLocal" id="presentAddrLocal" class="form-control" value="'.$presentAddr.'" >
                            </div>
                            <div class="form-group">

                            </div>


                            <div class="col-sm-8 col-sm-push-4"  id="t1">
                                <input type="text" name="presentAddrCity" id="presentAddrCity"  class="form-control" value="'.$presentAddrCity.'" >
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="col-sm-8 col-sm-push-4"  id="t2">
                                <input type="text" name="presentAddrCountry" id="presentAddrCountry" class="form-control" value="'.$presentAddrCountry.'" >
                            </div>
                        </div>
                    </blockquote>
                    <blockquote>
                        <div class="form-group">
                            <label for="permaAddr" class="col-sm-4 control-label">Permanent Address</label>
                            <div class="col-sm-8" id="t10">
                                <input type="text" name="permaAddrLocal" id="permaAddrLocal" class="form-control" value="'.$permaAddr.'" >
                            </div>

                            <div class="form-group">

                            </div>


                            <div class="col-sm-8 col-sm-push-4"  id="t3">
                                <input type="text" name="permaAddrCity" id="permaAddrCity"  class="form-control" value="'.$permaAddrCity.'" >
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="same" id="same" onclick="if(this.checked){sameas();}">&nbsp;<span id="sametext">Same as above</span>
                                </div>

                                <div class="col-sm-8 col-xs-11"  id="t4">
                                    <input type="text" name="permaAddrCountry" id="permaAddrCountry" class="form-control" value="'.$permaAddrCountry.'" >
                                </div>
                            </div>
                        </div>
                    </blockquote>
                    <div class="form-group">
                        <label for="personal" class="control-label col-sm-4">Personal Email </label>
                        <div class="col-sm-8">
                            <input type="email" name="personal" id="personal" value="'.$pEmailID.'" class="form-control" onchange="verifyEmail(this.value);" >
                        </div>
                        <br />
                        <div>
                            <p><span id="reply3" style="color: #bd4147; "></span></p>
                        </div>
                    </div>




                </div>
                <br/>
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data5"><span class="heading">Banking Details</span></button>

                <div id="data5" class="collapse">

                    <div class="form-group">
                        <label for="bank" class="control-label col-sm-4">Bank Account Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="bank"id="bank" value="'.$BankAccountNum.'" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="accType" class="control-label col-sm-4">Account Type</label>
                        <div class=" col-xs-12 col-sm-8">
                            ';
                            func3();
                            echo '
                            <!--<input type="radio" name="accType" id="accType" value="Savings" >&nbsp;Savings&nbsp;&nbsp;
                            <input type="radio" name="accType" id="accType" value="Checking" >&nbsp;Checking&nbsp;&nbsp;
                            <input type="radio" name="accType" id="accType" value="Interest-Bearing" >&nbsp;Interest-Bearing-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ifsc" class="control-label col-sm-4">IFSC Code</label>
                        <div class="col-sm-8">
                            <input type="text" name="ifsc" id="ifsc" value="'.$IFSC.'" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bname" class="control-label col-sm-4">Bank Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="bname" id="bname" value="'.$bankName.'" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="baddr" class="control-label col-sm-4">Bank Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="baddr" id="baddr" value="'.$bankAddress.'" class="form-control" >
                        </div>
                    </div>



                </div>

                <br/>
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data6"><span class="heading">Education Details</span></button>

                <div id="data6" class="collapse">


                    <div class="form-group">
                        <label for="tenth" class="control-label col-sm-4">10th Marks</label>
                        <div class="col-sm-8">
                            <input type="text" name="tenth" id="tenth" value="'.$tenth.'" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="twelfth" class="control-label col-sm-4">12th Marks</label>
                        <div class="col-sm-8">
                            <input type="text" name="twelfth" id="twelfth" value="'.$twelfth.'" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="degreeName" class="control-label col-sm-4">Degree Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="degreeName" id="degreeName" value="'.$degName.'" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="degreeMarks" class="control-label col-sm-4">Degree Marks</label>
                        <div class="col-sm-8">
                            <input type="text" name="degreeMarks" id="degreeMarks" value="'.$degMarks.'" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="passingYear" class="control-label col-sm-4">Passing Year</label>
                        <div class="col-sm-8">
                            <input type="year" name="passingYear" id="passingYear" value="'.$passYear.'" class="form-control">
                        </div>
                    </div>
                </div>

                <br/>
                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data7"><span class="heading">Salary Details</span></button>

                <div id="data7" class="collapse">
                    <div class="form-group">
                        <label for="salary" class="control-label col-sm-4">Current&nbsp;Salary</label>
                        <div class="col-sm-8 col-xs-12">
                            <input type="text" name="salary" id="salary" value="'.$salary.'" class="form-control" >
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" id="closeBox">&times;</button>
                                <h4 class="modal-title">Success!</h4>
                            </div>
                            <div class="modal-body">
                                <span id="text1">Successfully Updated Employee.</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="closeModal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <br />
                <div class="form-group">
                    <div class="col-sm-2 col-sm-offset-4">
                        <button class="btn btn-primary btn-lg" type="submit" id="submit1" name="submit1" data-target="#myModal">Update</button>
                    </div>
                </div>



                </form>
            </div>
        </div>
    </div>
</div>


</div>
<script>
$("#submit1").on("click", function(){
	
	$("#myModal").modal("show");
});
</script>

</body>
</html>
';



?>