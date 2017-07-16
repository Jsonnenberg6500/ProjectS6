function checkUser(str) {
    var username = document.getElementById('enterUsername');
    var usernamefb = document.getElementById('usernamefeedback');

    if (username.value.length > 4) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == "vacant") {
                    document.getElementById("usernamefeedback").innerHTML = "<div style=\"color: green; transition: 0.3s;\" class=\"text-left container-fluid\"><b class=\"glyphicon glyphicon-ok\"></b></div>";
                } else if (this.responseText == "exists") {
                    document.getElementById("usernamefeedback").innerHTML = "<div class=\"text-left container-fluid\"><em><b>Error:</b> This username is already registered.";
                }
            }
        };
        xmlhttp.open("GET","php/checkUser.php?u="+str,true);
        xmlhttp.send();
    } else {
        usernamefb.innerHTML = "<div class=\"container-fluid text-left\"><em><b>Error:</b> Choose a username of least 5 characeters.";
    }
}

function checkPassword() {
    var username = document.getElementById('enterPassword');
    var usernamefb = document.getElementById('passwordfeedback');

    if (username.value.length > 4) {
        usernamefb.innerHTML = "<div style=\"color: green; float: left;\" class=\"container-fluid\"><b class=\"glyphicon glyphicon-ok\"></b></div>";
    } else {
        usernamefb.innerHTML = "<div class=\"container-fluid text-left\"><em><b>Error:</b> Choose a password of least 5 characeters.";
    }
}

function submitCredentials(){
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById('signupform').innerHTML = this.responseText;
          if (this.responseText == "fail") {/*Do nothing*/}
          else if (this.responseText == "ok") {
              modifyNavbar_members();
              document.getElementById('signupform').innerHTML = "<div class=\"container-fluid text-center bg-1\"><b>Sign up successful!</b></div>\
                </br><ul><li><a href=\"login.html\">Click here</a> to log in with your new credentials</li>\
                    <li><a href=\"index.php\">Click here</a> to return to the homepage</li></ul>";
              document.getElementById('lengthWarning').innerHTML = '';
          }
      }
  };
  var u = document.getElementById('enterUsername').value;
  var p = document.getElementById('enterPassword').value;
  xmlhttp.open("GET","php/checkSignup.php?u="+u+"&p="+p,true);
  xmlhttp.send();
}
