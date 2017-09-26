
    function verifyEmail(str) {
        if (str.length == 0) {
            document.getElementById("reply3").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
					
                    document.getElementById("reply3").innerHTML = this.responseText;
					if(this.responseText == "Email ID already registered!"){
					var submit = document.getElementById('submit');
					submit.disabled = true;}
				else if (this.responseText != "Email ID already registered!"){
					var submit = document.getElementById('submit');
					submit.disabled = false;
				}
					
                }
				
            };
            xmlhttp.open("GET", "verifyEmail.php?p=" + str, true);
            xmlhttp.send();
        }
    }

