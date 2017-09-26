<?php

	
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
	require_once('../includes/config.inc.php');
	
	require_once('../html/header.html');
	//require_once('../html/viewclientdetails.html');
	//require_once('../html/AdminHome.html');
	//require_once('../html/footer.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Employee</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
         content must come *after* these tags -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

        .divide{
            border-color: #31b0d5;
        }
        #list2{
            left: -45px;
        }
        #list1{
            left: -62px;
        }


    </style>
    <script type="text/javascript">

    </script>


</head>

<body id="body" background="..\images\lb.jpg">
<div class="container">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#data1">General</button>
    <div id="data1" class="collapse">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <form class="form-horizontal" onsubmit="" action="AddEmployee.php" method="post">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Enter First Name" autofocus required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class='row'>
                            <label for="mode" class="col-sm-2 control-label">Mode of Employment:</label>
                            <div class="dropdown col-sm-3" id="list2">
                                <select name="mode">
                                    <option value="Full Time"><a>Full Time</a></option>
                                    <option value="Part Time"><a>Part Time</a></option>
                                    <option value="Intern"><a>Intern</a></option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="eid" class="col-sm-2 control-label">Employee ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="eid" class="form-control" placeholder="Enter Employee ID" onchange="verifyUsernameAvailability(this.value)" required>
                        </div>
                        <br />
                        <div>
                            <p><span id="reply" style="color: #bd4147; "></span></p>
                        </div>
                    </div>

    </div>
    <h1>Add New Employee</h1><br />

                <hr class="divide" />
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="doj" class="control-label">Date of Joining</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" name="doj" class="form-control">
                    </div>

                    <div class="col-sm-2">
                        <label for="confirm" class="control-label">Confirm Date</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" name="confirm" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="dor" class="control-label">Date of Registration</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" name="dor" class="form-control" required>
                    </div>

                    <div class="col-sm-2">
                        <label for="dob" class="control-label">Date of Birth</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" name="dob" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="trainingStart" class="control-label">Training Start Date</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" name="trainingStart" class="form-control" >
                    </div>

                    <div class="col-sm-2">
                        <label for="trainingComplete" class="control-label">Training Completion Date</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" name="trainingComplete" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="father" class="col-sm-2 control-label">Father's Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="father" class="form-control" placeholder="Enter Father's Name" required>
                    </div>
                </div>



                <div class="form-group">
                    <label for="primary" class="col-sm-2 col-xs-12 control-label">Primary Contact Number</label>

                    <div class="col-xs-7 col-sm-6 col-md-7">
                        <input type="tel" name="primary" class="form-control" placeholder="Enter Primary Contact Number" maxlength="10" minlength="10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="emergency" class="col-sm-2 col-xs-12 control-label">Emergency Contact Number</label>

                    <div class="col-xs-7 col-sm-6 col-md-7">
                        <input type="tel" name="emergency" class="form-control" placeholder="Enter Emergency Contact Number" maxlength="10" minlength="10">
                    </div>
                </div>
                <div class="form-group">
                    <label for="presentAddr" class="col-sm-2 control-label">Present Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="presentAddr" class="form-control" placeholder="Enter Present Address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="permaAddr" class="col-sm-2 control-label">Permanent Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="permaAddr" class="form-control" placeholder="Enter Permanent Address" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="personal" class="control-label col-sm-2">Personal Email ID</label>
                    <div class="col-sm-10">
                        <input type="email" name="personal" placeholder="Enter Personal Email ID" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="official" class="control-label col-sm-2">Official Email ID</label>
                    <div class="col-sm-10">
                        <input type="email" name="official" placeholder="Enter Official Email ID" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="skype" class="control-label col-sm-2">Skype ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="skype" placeholder="Enter Skype ID" class="form-control" required>
                    </div>
                </div>


                <div class="form-group">
                    <div class='row'>
                        <label for="bg" class="col-sm-2 control-label">Blood Group</label>
                        <div class="dropdown col-sm-3" id="list1">

                            <select name="bg">
                                <option value="O-" selected="selected"><a>O-</a></option>
                                <option value="O+"><a>O+</a></option>
                                <option value="A-"><a>A-</a></option>
                                <option value="A+"><a>A+</a></option>
                                <option value="B-"><a>B-</a></option>
                                <option value="B+"><a>B+</a></option>
                                <option value="AB-"><a>AB-</a></option>
                                <option value="AB+"><a>AB+</a></option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="aadhar" class="control-label col-sm-2">Aadhar ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="aadhar" placeholder="Enter Aadhar ID" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="PAN" class="control-label col-sm-2">PAN ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="PAN" placeholder="Enter PAN ID" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="voter" class="control-label col-sm-2">Voter ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="voter" placeholder="Enter Voter ID" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="passport" class="control-label col-sm-2">Passport ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="passport" placeholder="Enter Passport ID" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="spouse" class="control-label col-sm-2">Spouse Phone/Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="spouse" placeholder="Enter Spouse's Phone No. or Email ID" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bank" class="control-label col-sm-2">Bank Account Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="bank" placeholder="Enter Bank Account" class="form-control" required>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-2 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="../js/verifyUsername.js"></script>

</body>
</html>




<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$mode = $_POST['mode'];
		$eid = $_POST['eid'];
		$doj = $_POST['doj'];
		$confirm = $_POST['confirm'];
		$dor = $_POST['dor'];
		$dob = $_POST['dob'];
		$trainingStart = $_POST['trainingStart'];
		$trainingComplete = $_POST['trainingComplete'];
		$father = $_POST['father'];
		$primary = $_POST['primary'];
		$emergency = $_POST['emergency'];
		$presentAddr = $_POST['presentAddr'];
		$permaAddr = $_POST['permaAddr'];
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

		$conn = new mysqli("localhost", "root", "", "hpcs_admin");

		if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO `employees`(`name`,`modeOfEmployment`,`EmployeeID`,`DOJ`,`confirmDate`,`DOR`,`trainingStartDate`,`trainingCompletionDate`,`DOB`,`fatherName`,`pContactNo`,`eContactNo`,`presentAddr`,`permanentAddr`,`pEmailID`,`oEmailID`,`skypeID`,`blood`,`aadhar`,`PAN`,`voterID`,`passport`,`spouseContact`,`BankAccountNum`)VALUES('$name','$mode','$eid','$doj','$confirm','$dor','$trainingStart','$trainingComplete','$dob','$father','$primary','$emergency','$presentAddr','$permaAddr','$personal','$official','$skype','$bg','$aadhar','$PAN','$voter','$passport','$spouse','$bank')";


if ($conn->query($sql) === TRUE) {

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>


