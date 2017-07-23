function checkUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "hiiii";
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
                if (this.responseText == "exists") {
                    document.getElementById("usernamefeedback").innerHTML = "<div style=\"color: green; transition: 0.3s;\" class=\"container-fluid\"><b class=\"glyphicon glyphicon-ok\"></b></div>";
                } else if (this.responseText == "vacant") {
                    document.getElementById("usernamefeedback").innerHTML = "<div class=\"container-fluid\"><em><b>Error:</b> This username is not registered. <a href=\"signup.html\">Sign up?</a></em></div>";
                }
            }
        };
        xmlhttp.open("GET","php/checkUser.php?u="+str,true);
        xmlhttp.send();
    }
}

function checkPassword() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("passwordfeedback").innerHTML = this.responseText;
        }
    };
    var u = document.getElementById('enterUsername').value;
    var p = document.getElementById('enterPassword').value;
    xmlhttp.open("GET","php/checkPassword.php?u="+u+"&p="+p,true);
    xmlhttp.send();
}

function checkCredentials(){
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          if (this.responseText == "fail") {/*Do nothing*/}
          else if (this.responseText == "ok") {
              modifyNavbar_members();
          }
      }
  };
  var u = document.getElementById('enterUsername').value;
  var p = document.getElementById('enterPassword').value;
  xmlhttp.open("GET","php/checkLogin.php?u="+u+"&p="+p,true);
  xmlhttp.send();
}

function modifyNavbar_members(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "fail") {/*Do nothing*/}
            else {
                document.getElementById('memberGreeting').innerHTML = "<a><em style=\"text-transform:none\">Hello, <b style=\"text-transform:lowercase\">" +this.responseText+ "</b></em>!</a>";
                document.getElementById('memberDropdown').innerHTML = "<li><a href=\"member.php\"><span class=\"glyphicon glyphicon-modal-window\"></span> &nbsp; Elevator UI</a></li> \
                <li><a href=\"php/logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span>  &nbsp; Log Out</a></li>";
                document.getElementById('loginform').innerHTML = "<div class=\"container-fluid text-center bg-1\"><b>Login successful!</b></div>\
                  </br><ul><li><a href=\"member.php\">Click here</a> to go to the elevator control panel</li>\
                      <li><a href=\"index.php\">Click here</a> to return to the homepage</li></ul>";
            }
        }
    };
    xmlhttp.open("GET","php/checkSessionStatus.php",true);
    xmlhttp.send();

    setInterval('updateClock()', 1000);
}
