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
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<style type='text/css'>

#searchbar{
	margin-top: 30px;
	margin-left: 200px;
}
body{
			background-color:#008F95;
			
		}


        .divide{
            border-color: #31b0d5;
        }
        #list2{
            left: 15px;
        }
        #list1{
            left: 15px;
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
        #dob, #dobA{
            left: -43px;
        }
        #t1{
            left: 210px;

        }
        #t2, #t3{

            left: 210px;
        }
		
			
        #t4{
            
			left: -52px;
        }


        blockquote{
            border-color: #4b5257;
            border-radius: 10px;
        }
        .asterisk{
            color:red;
        }
        #submit1{
            height: 90px !important;
            width: 200px !important;
            left: -100px !important;
            float: left !important;
            text-align: center !important;
            font-size: 29px;
        }
		#list4{
            left: 0px !important;
			width: 100px;
        }
		#t10 {
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
					width: 497px !important;
					left: -33px;
				}
				
				
			}
			#data1, #data2, #data3, #data4, #data5, #data6, #data7, #data0{
			
			background-color: #F8F8F8;
			padding: 10px 5px 5px 5px;
			border-radius: 10px;
			
		}

</style>
<script>

</script>

</head>
<body>
<div class='container'>
<form method='post' class='form-horizontal col-sm-10'>
<div class="form-group">
<div class='row' id='searchbar'>
<div class='col-xs-9 col-sm-8'>
	<input type='text' name='search' class='form-control' id='search' placeholder='Enter Employee ID here' onchange='userExists(this.value);'>
	</div>
	<div>
	&nbsp;&nbsp;<button type='button' name='submit' class='col-sm-2 btn btn-primary btn-md' id='submit' onclick="getPayroll(search.value);"><b>Submit</b></button>
	</div>
</div>
</div>
<div class='row col-sm-offset-3' id='reply' style="color: red;" ></div>
<div class='row col-sm-offset-3' id="answer" style="width: 50%; height: 200px; background-color: #B0BED9; border-left: solid #1c1c4a 10px; display: none;">
    <center><p id="reply2" style="padding-top: 17%; font-size: 20px; font-weight: bold;"></p><center>
</div>



</form>
</div>

<div class='container-fluid'>
<div id='update' name='update'></div>
</div>
<div class='container-fluid'>
<div id='update1' name='update1'></div>
</div>
<script>
	
$(document).ready(function()
   {
      $.post("updateEmpSuggest.php",function(data){
       
    $( "#search" ).autocomplete
    ({
     source: JSON.parse(data)

    });
		 console.log(data);
      });
   });


		function userExists(str) {
    if (str == "") {
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
            }
        };
        xmlhttp.open("GET","userExists.php?q="+str,true);
        xmlhttp.send();
    }
}
	function getPayroll(str) {
    if (str == "") {
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
                document.getElementById("answer").style.display = 'block';
                document.getElementById("reply2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getPayroll.php?q="+str,true);
        xmlhttp.send();
    }
}


</script>
</body>
</html>

<?php
echo "<script>
$(document).ready(function(){
        $('.a4').addClass('active');
    $('.a41').addClass('active');
});
</script>" ;

 require_once('../html/footer.html');

