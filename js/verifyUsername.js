

    function verifyUsernameAvailability(str) {
        if (str.length == 0) {
            document.getElementById("reply").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
					
                    document.getElementById("reply").innerHTML = this.responseText;
					if(this.responseText == "Username already exists!"){
					var submit = document.getElementById('submit');
					submit.disabled = true;}
				else if (this.responseText != "Username already exists!"){
					var submit = document.getElementById('submit');
					submit.disabled = false;
				}
					
                }
				
            };
            xmlhttp.open("GET", "verifyUsername.php?q=" + str, true);
            xmlhttp.send();
        }
    }


