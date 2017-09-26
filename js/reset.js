var globalresetusername ;
var globaloldpassword;
var globalnewpassword;

jQuery( document ).ready(function( $ ) {
	
	$( "#updatePassword" ).click(function() {
		globalresetusername = $("#rUsername").val();
		globaloldpassword = $("#rOldPassword").val();
		globalnewpassword = $("#rNewPassword").val();
		if(globalresetusername != "" && globaloldpassword != "" && globalnewpassword != "")
		{
			$.post("php/resetpass.php", 
			  {
				HpcsEmpId : globalresetusername,
				userOldPassword : globaloldpassword,
				userNewPassword : globalnewpassword,
			  }, function(data) 
			  {
				  $("#UpdationMessage").html(data);
				  globalresetusername = "";
				  globaloldpassword = "";
				  globalnewpassword = "";
			  }
			);
		}else{
			$("#UpdationMessage").html("Username, Old Password and New Password fields are mandatory. <br>Please Fill all the fields.");
		}
	});
	
	$( "#closeTab" ).click(function(){
		$("#rUsername").val("");
		$("#rOldPassword").val("");
		$("#rNewPassword").val("");
		$("#UpdationMessage").html("");
	});
	
	var hideDelay = 5;  
	var currentID = true;
	var hideTimer = null;
	var hideTimerc = null;
	var addContainer = $('<div id="rememberMeMsg" style="background-color:#fff; background-color:#f2f9f0; position:relative; -moz-box-shadow: 10px 10px 10px #262626;-webkit-box-shadow: 10px 10px 10px #262626; box-shadow: 10px 10px 10px #262626; border: solid 1px #e6e6e6; border-radius:5px; max-width:250px ! important; display: none; z-index:20;">'
	+'<p style="font-size:small; background-color:#e6e6e6; padding:10px; border-top-left-radius:5px; border-top-right-radius:5px;"><b>Information</b></p>'
	+'<span class="glyphicon glyphicon-hand-left" style="z-index:30; margin-left: -22px; margin-top:5px; font-size:x-large; position:absolute; "></span>'
	+'<p style="font-size:smaller;  padding-left:10px;" >'
	+'On checking this Checkbox your user id and password will be saved in your browser Cookies.<br>'
	+'When you try to login next time, your user id and password will be entered automatically.'
	+'</p>'
	+'</div>');

	$('body').append(addContainer);
	$('.remember').on('mouseover', function()
	{ 
		$('#rememberText').css('color', '#009999');
		currentID = true 
		  if (hideTimerc)
			  clearTimeout(hideTimerc);

			var pos = $(this).offset();
			var width = $(this).width();
			addContainer.css({
				left: (pos.left + width + 35) + 'px',
				top: (pos.top - 610) + 'px'
			});
		  
			addContainer.css('display', 'block');
	});
  
	$('.remember').on('mouseout', function()
	{
		$('#rememberText').css('color', '#00cccc');
		currentID = false 

		  if (hideTimerc){
			  clearTimeout(hideTimerc);
			 
			 }
		  hideTimerc = setTimeout(function()
		  { 
			addContainer.css('display', 'none');
			  
		  }, hideDelay);
		  
	});
	
	$('.hoverfil').on('mouseover', function()
	{ 
			$('.hoverfil').css('color', '#009999');
			
	});
	
	$('.hoverfil').on('mouseout', function()
	{ 
			$('.hoverfil').css('color', '#00cccc');
	});
  
});