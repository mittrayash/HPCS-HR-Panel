<?php
session_start();
	require_once('../includes/config.inc.php');
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
	require_once('../html/header.html');
	require_once('addEmp2.php');
	require_once('../html/NavBarn.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>

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
            left: 15px;
        }
        #list1{
            left: 15px;
        }
        #list4{
            left: 0px !important;
            width: 100px;
        }

        .heading{
            font-size: 25px;
        }
        .heading2{
            font-size: 30px;
        }
        #sametext{
            font-size: 16px;
        }
        select {

            width: 200px !important;
            border: 1px solid #111;
            background-color: white;
            background: white;
            width: 150px;
            font-size: 16px;
            border: 1px solid #ccc;
            height: 34px;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url("../images/caret.png") 96% / 15% no-repeat white;
            appearance: none;
        }
        .kind{
            height: 25px;
            width: 25px;
        }

        select::-ms-expand {
            display: none; /* remove default arrow in IE 10 and 11 */
        }

        /* target Internet Explorer 9 to undo the custom arrow */
        @media screen and (min-width:0\0) {
            select {
                background:none\9;
                padding: 5px\9;
            }
        }
        label{
            text-align: left ! important ;
            width:210px ! important ;
            float: left ! important ;
        }
        #label1, #label2{
            left: 15px;
        }
        #panel1{
            margin-top: 15px;

        }

        #t1{
            left: 210px;

        }
        #t2, #t3{

            left: 210px;
        }


        #t4{

            left: -30px;
        }

        blockquote{
            border-color: #4b5257;
            border-radius: 10px;
        }
        .asterisk{
            color:red;
        }
        #submit{
            height: 90px !important;
            width: 200px !important;
            left: -100px !important;
            float: left !important;
            text-align: center !important;
            font-size: 29px;
        }
        #presentAdd{
            left: -10px;
        }
        #t10{
            left: -10px;
        }




        @media screen and (max-width: 767px)
        {
            #t3{
                left: -10px !important;
            }
            #t1{
                left: -10px !important;
            }
            #t2{
                left: -10px !important;

            }
            #t4{
                left: 8px !important;

            }

        }

        @media (min-width: 768px) {

            #t4{
                width: 494px !important;

            }
        }
        #data1, #data2, #data3, #data4, #data5, #data6, #data7, #data0{

            background-color: #F8F8F8;
            padding: 10px 5px 5px 5px;
            border-radius: 10px;

        }
        body{
            background-color:#008F95;

        }
    </style>
    <script>


        jQuery( document ).ready(function( $ ) {

            $("#submit").click(function(){
                var fileToUpload = $('#fileToUpload').val();

                var name = $('#name').val();
                var mode = $('#mode').val();
                var eid = $('#eid').val();
                var dobc = $('#dobc').val();
                var dobA = $('#dobA').val();
                var father = $('#father').val();
                var bg = $('#bg').val();
                var aadhar = $('#aadhar').val();
                var PAN = $('#PAN').val();
                var voter = $('#voter').val();
                var passport = $('#passport').val();
                var spouse = $('#spouse').val();
                var doj = $('#doj').val();
                var confirm = $('#confirm').val();
                var dor = $('#dor').val();
                var trainingStart = $('#trainingStart').val();
                var trainingComplete = $('#trainingComplete').val();
                var primary = $('#primary').val();
                var emergency = $('#emergency').val();
                var presentAddrLocal = $('#presentAddrLocal').val();
                var presentAddrCity = $('#presentAddrCity').val();
                var presentAddrCountry = $('#presentAddrCountry').val();
                var permaAddrLocal = $('#permaAddrLocal').val();
                var permaAddrCity = $('#permaAddrCity').val();
                var permaAddrCountry = $('#permaAddrCountry').val();
                var personal = $('#personal').val();
                var official = $('#official').val();
                var skype = $('#skype').val();
                var bank = $('#bank').val();
                var accType = $('#accType').val();
                var ifsc = $('#ifsc').val();
                var bname = $('#bname').val();
                var baddr = $('#baddr').val();
                var tenth = $('#tenth').val();
                var twelfth = $('#twelfth').val();
                var degreeName = $('#degreeName').val();
                var degreeMarks = $('#degreeMarks').val();
                var passingYear = $('#passingYear').val();
                var offPass = $('#offPass').val();
                var skypePass = $('#skypePass').val();


                if(name != "" )
                {


                    $.post("addEmp2.php",
                        {

                            fileToUpload : fileToUpload,
                            name: name,
                            mode: mode,
                            eid: eid,
                            dobc: dobc,
                            dobA: dobA,
                            father: father,
                            bg: bg,
                            aadhar: aadhar,
                            PAN: PAN,
                            voter: voter,
                            passport: passport,
                            spouse: spouse,
                            doj: doj,
                            confirm: confirm,
                            dor: dor,
                            trainingStart: trainingStart,
                            trainingComplete: trainingComplete,
                            primary: primary,
                            emergency: emergency,
                            presentAddrLocal: presentAddrLocal,
                            presentAddrCity: presentAddrCity,
                            presentAddrCountry: presentAddrCountry,
                            permaAddrLocal: presentAddrLocal,
                            permaAddrCity: permaAddrCity,
                            permaAddrCountry: permaAddrCountry,
                            personal: personal,
                            official: official,
                            skype: skype,
                            bank: bank,
                            accType: accType,
                            ifsc: ifsc,
                            bname: bname,
                            baddr: baddr,
                            tenth: tenth,
                            twelfth: twelfth,
                            degreeName: degreeName,
                            degreeMarks: degeeMarks,
                            passingYear: passingYear,
                            offPass: offPass,
                            skypePass: skypePass
                            //$("#myModal").modal("show");
                            //MAIN FILE IN PHP


                        }, function(data){


                            //$("#myModal").modal("show");

                            $("#text1").html(data);

                            $('#name').val("");
                            $('#mode').val("");
                            
                            $('#dobc').val("");
                            $('#dobA').val("");
                            $('#father').val("");
                            $('#bg').val("");
                            $('#aadhar').val("");
                            $('#PAN').val("");
                            $('#voter').val("");
                            $('#passport').val("");
                            $('#spouse').val("");
                            $('#doj').val("");
                            $('#confirm').val("");
                            $('#dor').val("");
                            $('#trainingStart').val("");
                            $('#trainingComplete').val("");
                            $('#primary').val("");
                            $('#emergency').val("");
                            $('#presentAddrLocal').val("");
                            $('#presentAddrCity').val("");
                            $('#presentAddrCountry').val("");
                            $('#permaAddrLocal').val("");
                            $('#permaAddrCity').val("");
                            $('#permaAddrCountry').val("");
                            $('#personal').val("");
                            $('#official').val("");
                            $('#skype').val("");
                            $('#bank').val("");
                            $('#accType').val("");
                            $('#ifsc').val("");
                            $('#bname').val("");
                            $('#baddr').val("");
                            $('#tenth').val("");
                            $('#twelfth').val("");
                            $('#degreeName').val("");
                            $('#degreeMarks').val("");
                            $('#passingYear').val("");
                            $('#offPass').val("");
                            $('#skypePass').val("");
					
		
							$(window).on("load",function(){
								$("#myModal").modal("show");
							});

                        });
                }else{
                    $('submitMessage').html("Employee Name is a mandatory field.");
                }
            });
            $( "#closeModal" ).click(function(){

                $('#name').val("");
                $('#mode').val("");
                
                $('#dobc').val("");
                $('#dobA').val("");
                $('#father').val("");
                $('#bg').val("");
                $('#aadhar').val("");
                $('#PAN').val("");
                $('#voter').val("");
                $('#passport').val("");
                $('#spouse').val("");
                $('#doj').val("");
                $('#confirm').val("");
                $('#dor').val("");
                $('#trainingStart').val("");
                $('#trainingComplete').val("");
                $('#primary').val("");
                $('#emergency').val("");
                $('#presentAddrLocal').val("");
                $('#presentAddrCity').val("");
                $('#presentAddrCountry').val("");
                $('#permaAddrLocal').val("");
                $('#permaAddrCity').val("");
                $('#permaAddrCountry').val("");
                $('#personal').val("");
                $('#official').val("");
                $('#skype').val("");
                $('#bank').val("");
                $('#accType').val("");
                $('#ifsc').val("");
                $('#bname').val("");
                $('#baddr').val("");
                $('#tenth').val("");
                $('#twelfth').val("");
                $('#degreeName').val("");
                $('#degreeMarks').val("");
                $('#passingYear').val("");

            });

            $( "#closeBox" ).click(function(){

                $('#name').val("");
                $('#mode').val("");
                $('#eid').val("");
                $('#dobc').val("");
                $('#dobA').val("");
                $('#father').val("");
                $('#bg').val("");
                $('#aadhar').val("");
                $('#PAN').val("");
                $('#voter').val("");
                $('#passport').val("");
                $('#spouse').val("");
                $('#doj').val("");
                $('#confirm').val("");
                $('#dor').val("");
                $('#trainingStart').val("");
                $('#trainingComplete').val("");
                $('#primary').val("");
                $('#emergency').val("");
                $('#presentAddrLocal').val("");
                $('#presentAddrCity').val("");
                $('#presentAddrCountry').val("");
                $('#permaAddrLocal').val("");
                $('#permaAddrCity').val("");
                $('#permaAddrCountry').val("");
                $('#personal').val("");
                $('#official').val("");
                $('#skype').val("");
                $('#bank').val("");
                $('#accType').val("");
                $('#ifsc').val("");
                $('#bname').val("");
                $('#baddr').val("");
                $('#tenth').val("");
                $('#twelfth').val("");
                $('#degreeName').val("");
                $('#degreeMarks').val("");
                $('#passingYear').val("");

            });
        });


    </script>
</head>

<body id="body">
<div class="container col-sm-11">

    <div class="panel panel-default  panel-primary" id="panel1">
        <div class="panel-heading"><span class="heading2"><b>Add &nbsp;&nbsp;</b></span><span class='col-sm-2'></span>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='kind' class='kind' value = 'new' onchange = 'generateID();' checked><span class="heading2"><b>&nbsp;New Employee</b><span>&nbsp;&nbsp;
		&nbsp;<input type='radio' name='kind' class='kind'  onchange = 'generateID();' value = 'old'><span class="heading2"><b>&nbsp;Old Employee</b><span></div>
        <div class="panel-body col-sm-offset-1">
            <div class="row" id='submitMessage'></div>

            <div class="row">
                <div class="col-xs-12 col-sm-11">
                    <form class="form-horizontal" onsubmit="" action="" method="post" enctype="multipart/form-data">

                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data0"><span class="heading">Basic Details</span></button>

                        <div id="data0" class="collapse">


                            <div class="form-group">
                                <div class='row' id='joining'>
                                    <label for="join" class="col-sm-4 control-label" style='left: 15px;'>Joining Year<span class="asterisk">&nbsp;*</span></label>
                                    <div class="dropdown col-sm-4 " id="list2">
                                        <select name="join" id='join' onchange = 'generateID();'>
                                            <?php
											$i = 2010;

												for($i; $i <= 2050; $i++){
													echo ' <option value="'.$i.'"><a>&nbsp;'.$i.'</a></option> ';
                                            }
                                            ?>
                                        </select>

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="eid" class="col-sm-4 control-label">Employee ID<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="eid" id='eid' class="form-control" onchange="verifyUsernameAvailability(this.value);" required>
                                </div>


                                <div class='row col-sm-5 col-sm-offset-3'>
                                    <p><span id="reply" style="color: #bd4147; "></span></p>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="official" class="control-label col-sm-4">Official Email ID<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" name="official" id='official' placeholder="Enter Official Email ID" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="offPass" class="control-label col-sm-4">Official Email Password<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" name="offPass" id='offPass' placeholder="Password" class="form-control" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="skype" class="control-label col-sm-4">Skype ID<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="skype" id='skype' placeholder="Enter Skype ID" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="skypePass" class="control-label col-sm-4">Skype Password<span class="asterisk">&nbsp;*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" name="skypePass" id='skypePass' placeholder="Password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="doj" class="control-label col-sm-4">Date of Joining<span class="asterisk">&nbsp;*</span></label>

                                <div class="col-sm-8" >
                                    <input type="date" name="doj" id='doj' class="form-control" required>
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

                                <label for="name" class="col-sm-4 control-label">Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                            </div>
                            <div class="form-group">

                                <label for="name" class="col-sm-4 control-label" id="abc">Full Name
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control"  pattern="[A-Za-z ]{2,}" id="name" placeholder="Enter Full Name" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class='row'>
                                    <label for="mode" class="col-sm-4 control-label" id="label1">Mode of Employment</label>
                                    <div class="dropdown col-sm-4 " id="list2">
                                        <select name="mode" id='mode'>
                                            <option value="-"><a>&nbsp;-</a></option>
                                            <option value="Full Time"><a>&nbsp;Full Time</a></option>
                                            <option value="Part Time"><a>&nbsp;Part Time</a></option>
                                            <option value="Intern"><a>&nbsp;Intern</a></option>
                                        </select>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="post" class="col-sm-4 control-label">Designation</label>

                                <div class="dropdown col-sm-4" id="list4">
                                    <select name="post" id='post'>
                                        <option value="Software Engineer"><a>&nbsp;Software Engineer</a></option>
                                        <option value="Director"><a>&nbsp;Director</a></option>
                                        <option value="Intern"><a>&nbsp;Intern</a></option>
                                    </select>


                                </div>
                            </div>

                        </div>

                        <br />
                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data2"><span class="heading">Personal Details</span></button>
                        <div id="data2" class="collapse">

                            <div class="form-group row" >

                                <label for="dobc" class="control-label col-sm-4">Certificate DOB</label>

                                <div class="col-sm-8" id="dob" >
                                    <input type="date" name="dobc" id='dobc' class="form-control">
                                </div>
                            </div>
                            <div class="form-group row" >

                                <label for="dobA" class="control-label col-sm-4">Actual DOB</label>

                                <div class="col-sm-8" id="doba" class='misaligned'>
                                    <input type="date" name="dobA" id='dobA' class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="father" class="col-sm-4 control-label">Father's Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="father" id='father' class="form-control" placeholder="Enter Father's Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class='row'>
                                    <label for="bg" class="col-sm-4 control-label" id="label2">Blood Group</label>
                                    <div class="dropdown col-sm-4" id="list1">

                                        <select name="bg" id='bg'>
                                            <option value="O-" selected="selected"><a>&nbsp;O-</a></option>
                                            <option value="O+"><a>&nbsp;O+</a></option>
                                            <option value="A-"><a>&nbsp;A-</a></option>
                                            <option value="A+"><a>&nbsp;A+</a></option>
                                            <option value="B-"><a>&nbsp;B-</a></option>
                                            <option value="B+"><a>&nbsp;B+</a></option>
                                            <option value="AB-"><a>&nbsp;AB-</a></option>
                                            <option value="AB+"><a>&nbsp;AB+</a></option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="aadhar" class="control-label col-sm-4">Aadhar ID</label>
                                <div class="col-sm-8">
                                    <input type="text" name="aadhar" id='aadhar' placeholder="Enter Aadhar ID" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="PAN" class="control-label col-sm-4">PAN ID</label>
                                <div class="col-sm-8">
                                    <input type="text" id='PAN' name="PAN" placeholder="Enter PAN ID" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="voter" class="control-label col-sm-4">Voter ID</label>
                                <div class="col-sm-8">
                                    <input type="text" name="voter" id='voter' placeholder="Enter Voter ID" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="passport" class="control-label col-sm-4">Passport ID</label>
                                <div class="col-sm-8">
                                    <input type="text" name="passport" id='passport' placeholder="Enter Passport ID" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="spouse" class="control-label col-sm-4">Spouse Phone/Email</label>
                                <div class="col-sm-8">
                                    <input type="text" name="spouse" id='spouse' placeholder="Enter Spouse's Phone No. or Email ID" class="form-control">
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
                                    <input type="date" id='confirm' name="confirm" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="dor" class="control-label">Date of Registration</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" name="dor" id='dor' class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="trainingStart" class="control-label">Training Start Date</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" name="trainingStart" id='trainingStart' class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="trainingComplete" class="control-label">Training Completion Date</label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" name="trainingComplete" id='trainingComplete' class="form-control" >
                                </div>
                            </div>



                        </div>
                        <br />
                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data4"><span class="heading">Contact Details</span></button>
                        <div id="data4" class="collapse">

                            <div class="form-group">
                                <label for="primary" class="col-sm-4 col-xs-12 control-label">Primary Contact No.</label>

                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <input type="tel" name="primary" id='primary' class="form-control" placeholder="Enter Primary Contact Number" maxlength="10" minlength="10" onchange="verifyContact(this.value)";>
                                </div>
                                <br />
                                <div class='row col-sm-5 col-sm-offset-3'>
                                    <p><span id="reply2" style="color: #bd4147; "></span></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="emergency" class="col-sm-4 col-xs-12 control-label">Emergency Contact No.</label>

                                <div class="col-xs-12  col-sm-8 col-md-8">
                                    <input type="tel" name="emergency" id='emergency' class="form-control" placeholder="Enter Emergency Contact Number" maxlength="10" minlength="10">
                                </div>
                            </div>
                            <blockquote>
                                <div class="form-group">
                                    <label for="presentAddrLocal" class="col-sm-4 control-label">Present Address</label>
                                    <div class="col-xs-12 col-sm-8" id='presentadd'>
                                        <input type="text" name="presentAddrLocal" id="presentAddrLocal" class="form-control" placeholder="Enter Present Local Address">
                                    </div>
                                    <div class="form-group">

                                    </div>


                                    <div class="col-sm-8 col-sm-push-4"  id="t1">
                                        <input type="text" name="presentAddrCity" id="presentAddrCity"  class="form-control" placeholder="Enter City Name">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="col-sm-8 col-sm-push-4"  id="t2">
                                        <input type="text" name="presentAddrCountry" id="presentAddrCountry" class="form-control" placeholder="Enter Country Name">
                                    </div>
                                </div>
                            </blockquote>
                            <blockquote>
                                <div class="form-group">
                                    <label for="permaAddr" class="col-sm-4 control-label">Permanent Address</label>
                                    <div class="col-sm-8" id='t10'>
                                        <input type="text" name="permaAddrLocal" id="permaAddrLocal" class="form-control" placeholder="Enter Permanent Address">
                                    </div>

                                    <div class="form-group">

                                    </div>


                                    <div class="col-xs-12 col-xs-pull-2 col-sm-8 col-sm-push-4 "  id="t3">
                                        <input type="text" name="permaAddrCity" id="permaAddrCity"  class="form-control" placeholder="Enter City Name">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="same" id="same" onclick="if(this.checked){sameas();}">&nbsp;<span id="sametext">Same as above</span>
                                        </div>

                                        <div class="col-xs-11 col-sm-8"  id="t4">
                                            <input type="text" name="permaAddrCountry" id="permaAddrCountry" class="form-control" placeholder="Enter Country Name">
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                            <div class="form-group">
                                <label for="personal" class="control-label col-sm-4">Personal Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="personal" id='personal' placeholder="Enter Personal Email ID" class="form-control" onchange="verifyEmail(this.value);">
                                </div>
                                <br />

                                <div class='row col-sm-5 col-sm-offset-3'>
                                    <p><span id="reply3" style="color: #bd4147; "></span></p>
                                </div>
                            </div>




                        </div>
                        <br />
                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data5"><span class="heading">Banking Details</span></button>

                        <div id="data5" class="collapse">

                            <div class="form-group">
                                <label for="bank" class="control-label col-sm-4">Bank Account Number</label>
                                <div class="col-sm-8">
                                    <input type="text" name="bank"id='bank' placeholder="Enter Bank Account Number" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="accType" class="control-label col-sm-4">Account Type</label>
                                <div class=" col-xs-12 col-sm-8">
                                    <input type="radio" name="accType" id='accType' value='Savings' checked >&nbsp;Savings&nbsp;&nbsp;
                                    <input type="radio" name="accType" id='accType' value='Checking'>&nbsp;Checking&nbsp;&nbsp;
                                    <input type="radio" name="accType" id='accType' value='Interest-Bearing' >&nbsp;Interest-Bearing
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ifsc" class="control-label col-sm-4">IFSC Code</label>
                                <div class="col-sm-8">
                                    <input type="text" name="ifsc" id='ifsc' placeholder="Enter IFSC Code" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bname" class="control-label col-sm-4">Bank Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="bname" id='bname' placeholder="Enter Bank Name" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="baddr" class="control-label col-sm-4">Bank Address</label>
                                <div class="col-sm-8">
                                    <input type="text" name="baddr" id='baddr' placeholder="Enter Bank Address" class="form-control" >
                                </div>
                            </div>



                        </div>

                        <br />
                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data6"><span class="heading">Education Details</span></button>

                        <div id="data6" class="collapse">


                            <div class="form-group">
                                <label for="tenth" class="control-label col-sm-4">10th Marks</label>
                                <div class="col-sm-8">
                                    <input type="text" name="tenth" id='tenth' placeholder="Enter Tenth Percentage" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="twelfth" class="control-label col-sm-4">12th Marks</label>
                                <div class="col-sm-8">
                                    <input type="text" name="twelfth" id='twelfth' placeholder="Enter Twelfth Percentage" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="degreeName" class="control-label col-sm-4">Degree Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="degreeName" id='degreeName' placeholder="Enter Degree Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="degreeMarks" class="control-label col-sm-4">Degree Marks</label>
                                <div class="col-sm-8">
                                    <input type="text" name="degreeMarks" id='degreeMarks' placeholder="Enter Degree Percentage" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passingYear" class="control-label col-sm-4">Passing Year</label>
                                <div class="col-sm-8">
                                    <input type="year" name="passingYear" id='passingYear' placeholder="Enter Passing Year" class="form-control">
                                </div>
                            </div>
                        </div>

                        <br />
                        <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#data7"><span class="heading">Salary Details</span></button>

                        <div id="data7" class="collapse">
                            <div class="form-group">
                                <label for="salary" class="control-label col-sm-4">Current&nbsp;Salary</label>
                                <div class="col-sm-8 col-xs-12">
                                    <input type="text" name="salary" id='salary' placeholder="Enter Current Salary" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" id='closeBox'>&times;</button>
                                        <h4 class="modal-title">Success!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <span id='text1'>Successfully Added Employee.</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" id='closeModal'>Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-4">
                                <br />
                                <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" data-target="#myModal" >Register</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript" src="../js/verifyUsername.js"></script>
<script type="text/javascript" src="../js/verifyContact.js"></script>
<script type="text/javascript" src="../js/verifyEmail.js"></script>
<?php

	//"SELECT count(*) FROM `employees` WHERE YEAR(DOJ) = '$year';"


$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
$year = date("Y");
$result = $conn->query("SELECT * FROM `employees` WHERE YEAR(DOJ) = '$year';");

if(!$result){
echo 'no result';
}
$code = 0;
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
$code += 1;

}
}
$part3 = $code + 1;


?>
<script type="text/javascript">
	 function abc(){

		var eid = document.getElementById("eid").value;
		var official = document.getElementById("official").value;
		var offPass = document.getElementById("offPass").value;
		var skype = document.getElementById("skype").value;
		var skypePass = document.getElementById("skypePass").value;
		var doj = document.getElementById("doj").value;
		
		var str = "Employee ID: " + eid + "\n |";
			str += "Official Email ID: " + official + "\n | ";
			str += "Official Email Password: " + offPass + "\n | ";
			str += "Skype ID: " + skype + "\n | ";
			str += "Skype Password: " + skypePass + "\n | ";
			str += "Date of Joining: " + doj;
		
		
        document.getElementById("message1").innerHTML = str;
		var aux = document.createElement("input");
		aux.setAttribute("value", document.getElementById("message1").innerHTML);
		document.body.appendChild(aux);
		aux.select();
		document.execCommand("copy");
		document.body.removeChild(aux);
		
    }

    function sameas(){

        if(document.getElementByName('same').checked){

            document.getElementById('permaAddrCountry').value = document.getElementById('presentAddrCountry').value;
            document.getElementById('permaAddrLocal').value = document.getElementById('presentAddrLocal').value;
            document.getElementById('permaAddrCity').value = document.getElementById('presentAddrCity').value;
        }
    }

    function generateID(){
        if(document.getElementsByName('kind')[0].checked == true){
            document.getElementById('joining').style.display = 'none';
            var d = new Date();
            var year = d.getFullYear();
            var part1 = 'HPCS';
            var part2 = String(year - 2000);
            var part3 = '<?php echo $part3 ?>';

            if(part3 == 0)
                part3 = '000';
            else if(part3 < 10)
                part3 = '00' + String(part3);
            else if (part3 < 100)
                part3 = '0' + String(part3);
            document.getElementById('eid').value = (part1 + part2 + part3);
        }
        else if(document.getElementsByName('kind')[1].checked == true){

            document.getElementById('joining').style.display = 'block';
            var year = document.getElementById('join').value;
            var part1 = 'HPCS';
            var part2 = String(year - 2000);

// AJAX FOR PART3

            if (year == "") {

            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var part3 = this.responseText;

                    }




                    if(part3 == 0)
                        part3 = '000';
                    else if(part3 < 10)
                        part3 = '00' + String(part3);
                    else if (part3 < 100)
                        part3 = '0' + String(part3);
                    document.getElementById('eid').value = (part1 + part2 + part3);
                };
                xmlhttp.open("GET","getPart3.php?q="+year,true);
                xmlhttp.send();
            }
        }}
    generateID();
   
</script>

</body>
<?php
echo "<script>
$(document).ready(function(){
$('.a2').addClass('active');
$('.a21').addClass('active');
});
</script>" ;
require_once('../html/footer.html');
    ?>
</html>
