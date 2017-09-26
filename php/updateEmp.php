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
			
			@media (min-width: 768px){
				
				#t4 {
					width: 477px !important;
					left: -23px;
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
	&nbsp;&nbsp;<button type='button' name='submit' class='col-sm-2 btn btn-primary btn-md' id='submit'><b>Submit</b></button>
	</div>
</div>
</div>
<div class='row col-sm-offset-3' id='reply' style="color: red;"></div>



</form>
</div>
<script>
// function showUser(search) {
    // if (search == "") {
        // document.getElementById("update").innerHTML = "";
		// //alert('asd');
        // return;
    // } else { 
        // if (window.XMLHttpRequest) {
            // // code for IE7+, Firefox, Chrome, Opera, Safari
            // xmlhttp = new XMLHttpRequest();
        // } else {
            // xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");            // // code for IE6, IE5

        // }
        // xmlhttp.onreadystatechange = function() {
            // if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("update").innerHTML = this.responseText;
				
		
		// $(document).ready(function(){
   
// });

	
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
		
		
		jQuery( document ).ready(function( $ ) {
			
			 $("#submit").click(function(){
				 var x = $('#search').val();
			$.post("updateEmp2.php",
			{
			  search: x
			},
			function(data){
				//alert("Data: " + data + "\nStatus: " + status);
			$('#update').html(data);
			
			
			$("#submit1").click(function(){
				var fileToUpload = $('#fileToUpload').val();
				var name = $('#name').val();
				
				var exch = $('#exchange').val();
				
				var submit1 = 1;
				var mode = $('#mode').val();
				var eid = $('#eid').val();
				var dobc = $('#dobc').val();
				var dobA = $('#dobA').val();
				var father = $('#father').val();
				var post = $('#post').val();
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
				var salary = $('#salary').val();
				var offPass = $('#offPass').val();
				var skypePass = $('#skypePass').val();
				var HPC_Uni_Pass = $('#salary').val();
				
				if(name != "" )
			{
			//document.write("Data: " + data + "\nStatus: " + status);
			//document.write("Data: " + data + "\nStatus: " + status);
			$.post("../php/updateEmp3.php", 
			{
				submit1: submit1,
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
				degreeMarks: degreeMarks,
				passingYear: passingYear,
				post: post,
				salary: salary,
				offPass: offPass,
				skypePass: skypePass,
				HPC_Uni_Pass: HPC_Uni_Pass
			},function(data){
				
				if(data== "1" || data == 1){
					$("#myModal").modal("show");
				}
				$('#update1').html(data);
				
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
				// $(window).on("load",function(){
					// $("#myModal").modal("show");
				// });
				

			});
			}else{
				$('#submitMessage').html("Employee Name is a mandatory field.");
			}
			});
			$( "#closeModal" ).click(function(){
				
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
		});
    });
	
	
    
</script>

<div class='container-fluid'>
<div id='update' name='update'></div>
</div>
<div class='container-fluid'>
<div id='update1' name='update1'></div>
</div>
<script>
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

</script>
</body>
</html>
<?php
echo "<script>
$(document).ready(function(){
        $('.a2').addClass('active');
    $('.a24').addClass('active');
});
</script>" ;

 require_once('../html/footer.html');

