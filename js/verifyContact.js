
    function verifyContact(str) {
        if (str.length == 0) {
            document.getElementById("reply2").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
					
                    document.getElementById("reply2").innerHTML = this.responseText;
					if(this.responseText == "Contact Number already registered!"){
					var submit = document.getElementById('submit');
					submit.disabled = true;}
				else if (this.responseText != "Contact Number already registered!"){
					var submit = document.getElementById('submit');
					submit.disabled = false;
				}
					
                }
				
            };
            xmlhttp.open("GET", "verifyContact.php?p=" + str, true);
            xmlhttp.send();
        }
    }


