<?php

	session_start();
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
	require_once('../includes/config.inc.php');

	require_once('../html/header.html');
	require_once('../html/NavBarn.html');

?>

<html>
<head>

    <!--<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <style>

        body{
            background-color:#008F95;

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
        select::-ms-expand {
            display: none; /* remove default arrow in IE 10 and 11 */
        }

		    .panel{
        top: 15px;
		
    }
	.panel-heading{
		width: 100%;
		
		text-align: center;
		
	}
	.panel-body{
		overflow: auto;
	}
	th{
		background-color: #F8F8F8;
	}
	body{
			background-color:#008F95;
			
		}	
    </style>

	
</head>
<body>
<div class='container'>
    <form method='post' class='form-horizontal col-sm-10'>
        <div class="form-group">
            <br />
            <div class="row">
                <div class="col-sm-offset-2 col-sm-3">
                    <select id='month' name='month'>
                        <option value='' disabled>--Select Month--</option>
                        <option value='1'>&nbsp; Janaury</option>
                        <option value='2'>&nbsp; February</option>
                        <option value='3'>&nbsp; March</option>
                        <option value='4'>&nbsp; April</option>
                        <option value='5'>&nbsp; May</option>
                        <option selected value='6'>&nbsp; June</option>
                        <option value='7'>&nbsp; July</option>
                        <option value='8'>&nbsp; August</option>
                        <option value='9'>&nbsp; September</option>
                        <option value='10'>&nbsp; October</option>
                        <option value='11'>&nbsp; November</option>
                        <option value='12'>&nbsp; December</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select id='year' name='year'>

                    </select>
                </div>
                <div>
                    &nbsp;&nbsp;<button type='button' name='submit' class='col-sm-2 btn btn-info btn-md' id='submit'><b>Submit</b></button>
                </div>
            </div>
			<div class="row">
			</div>
        </div>
    </form>
	<br />	
<div class="row col-sm-12">
    <div id='reply'>
        <!-- get reply from ajax here -->
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        
    var start = 2010;
    var end = new Date().getFullYear();
    var options = "<option value='' disabled>--Select Year--</option>";

    for(var y = start ; y <=end; y++){
        
		if(y == end){
			options += "<option selected value='"+y+"'>&nbsp;"+ y +"</option>";
		}
		else{
			options += "<option value='"+y+"'>&nbsp;"+ y +"</option>";
		}
    }
    document.getElementById("year").innerHTML = options;



    //----------------------------AJAX--------------------------------


    function getData(month, year){
        if (month == "") {
            document.getElementById("reply").innerHTML = "";
            return;
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
                    document.getElementById("reply").innerHTML = this.responseText;
					$('#myTable').DataTable();
                }
            };
            xmlhttp.open("GET","attendance.php?month="+month+"&year="+year,true);
            xmlhttp.send();
        }
    }
    //-----------------------------------------

    
	
	$("#submit").click(function(){
		var month = document.getElementById('month').value;
    var year = document.getElementById('year').value;

            getData(month, year);
			
        });
    });





</script>


<?php
	require_once('../html/footer.html');
	echo "<script>
$(document).ready(function(){
   $('.a2').addClass('active');
   $('.a25').addClass('active');
});
</script>" ;
?>