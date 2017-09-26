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

#searchbar{
	margin-top: 30px;
	margin-left: 200px;
}
body{
			background-color:#008F95;
			
	}
</style>
<script>

$(document).ready(function()
   {
      $.post("checklistUpdate2.php",function(data){
		$( "#search" ).autocomplete
		({
		 source: JSON.parse(data)
		});
      });
	  
	  
	  $('#submit').click(function(){
			var abc = $('#search').val();
			getData(abc);
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
        xmlhttp.open("GET","userExists2.php?q="+str,true);
        xmlhttp.send();
    }
}
	

	 
   function getData(str) {
    if (str == "") {
        document.getElementById("reply2").innerHTML = "";
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
             
				document.getElementById("reply2").innerHTML = this.responseText;
			 

				$("#updatee").click(function(){
					function decider(id){
						if (($('#' + id).is(":checked")) == true)
							return 1;
						else return 0;
					}
					var submit1 = 1;
					var eid = $('#search').val();
					var one = decider('one');
					var two = decider('two');
					var three = decider('three');
					var four = decider('four');
					var five = decider('five');
					var six = decider('six');
					var seven = decider('seven');
					var eight = decider('eight');
					var nine = decider('nine');
					var ten = decider('ten');
					var eleven = decider('eleven');
					var twelve = decider('twelve');
					var thirteen = decider('thirteen');
					var fourteen = decider('fourteen');
					var fifteen = decider('fifteen');
					var sixteen = decider('sixteen');
					var seventeen = decider('seventeen');
					var eighteen = decider('eighteen');
					var nineteen = decider('nineteen');
					var twenty = decider('twenty');
					var twoOne = decider('twoOne');
					var twoTwo = decider('twoTwo');
					var twoThree = decider('twoThree');
					var twoFour = decider('twoFour');
					var twoFive = decider('twoFive');
					var twoSix = decider('twoSix');
					var twoSeven = decider('twoSeven');
					var twoEight = decider('twoEight');
					var twoNine = decider('twoNine');
					var thirty = decider('thirty');
					var threeOne = decider('threeOne');
					var threeTwo = decider('threeTwo');
					var threeThree = decider('threeThree');
					var threeFour = decider('threeFour');
					var threeFive = decider('threeFive');
					var threeSix = decider('threeSix');
					var threeSeven = decider('threeSeven');
					var threeEight = decider('threeEight');
					var threeNine = decider('threeNine');
					var forty = decider('forty');
					var fourOne = decider('fourOne');
					var fourTwo = decider('fourTwo');
					var fourThree = decider('fourThree');
					
					$.post("../php/checklistUpdate4.php", {
						submit1: submit1,
						eid: eid,
						one : one ,
						two : two ,
						three : three ,
						four : four ,
						five : five ,
						six : six ,
						seven : seven ,
						eight : eight ,
						nine : nine ,
						ten : ten ,
						eleven : eleven ,
						twelve : twelve ,
						thirteen : thirteen ,
						fourteen : fourteen ,
						fifteen : fifteen ,
						sixteen : sixteen ,
						seventeen : seventeen ,
						eighteen : eighteen ,
						nineteen : nineteen ,
						twenty : twenty ,
						twoOne : twoOne ,
						twoTwo : twoTwo ,
						twoThree : twoThree ,
						twoFour : twoFour ,
						twoFive : twoFive ,
						twoSix : twoSix ,
						twoSeven : twoSeven ,
						twoEight : twoEight ,
						twoNine : twoNine ,
						thirty : thirty ,
						threeOne : threeOne ,
						threeTwo : threeTwo ,
						threeThree : threeThree ,
						threeFour : threeFour ,
						threeFive : threeFive ,
						threeSix : threeSix ,
						threeSeven : threeSeven ,
						threeEight : threeEight ,
						threeNine : threeNine ,
						forty : forty ,
						fourOne : fourOne ,
						fourTwo : fourTwo ,
						fourThree : fourThree
						
					},function(data){
					
						
						$('#myModal').modal('show');
					
					
					})
				});
            }
        };
        xmlhttp.open("GET","checklistUpdate3.php?q="+str,true);
        xmlhttp.send();
    }
}
	
	

	
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
                                <span id="text1">Successfully Updated Checklist.</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="closeModal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

<center><div class='' id='reply' style="color: red;"></div></center>

</form>


</div>
<div class='' id='reply2' style="color: red; left: 20px;"></div>
<script>

$(document).ready(function()
   {
	  $('#submit').click(function(){
			var abc = $('#search').val();
			getData(abc);
		});
   });
   
 </script>
</body>
</html>
<?php
echo "<script>
$(document).ready(function(){
        $('.a3').addClass('active');
    $('.a32').addClass('active');
});
</script>" ;
	require_once('../html/footer.html');
?>