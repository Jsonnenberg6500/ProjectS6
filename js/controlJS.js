function updateData() {

setInterval(loadDoc, 500);
setInterval(dispQueue,500);
setInterval (dispButton, 500);

setInterval (dispButton2, 500);
setInterval (dispButton3, 500);
setInterval (dispButton4, 500);
setInterval (dispButton5, 500);
setInterval (dispButton6, 500);
}


function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "testingajax.php", true);
  xhttp.send();
}


function dispQueue() {
  var xhttp2 = new XMLHttpRequest();
  xhttp2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("displayQueue").innerHTML =
      this.responseText;
    }
  };
  xhttp2.open("POST", "testajaxv2.php", true);
  xhttp2.send();
}

function dispButton() {
  var xhttp3 = new XMLHttpRequest();
  xhttp3.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton1").innerHTML =
      this.responseText;
    }
  };
  xhttp3.open("POST", "buttonsAjax.php", true);
  xhttp3.send();
}

function dispButton2() {
  var button2 = new XMLHttpRequest();
  button2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton2").innerHTML =
      this.responseText;
    }
  };
  button2.open("POST", "buttonsAjax2.php", true);
  button2.send();
}

function dispButton3() {
  var button3 = new XMLHttpRequest();
  button3.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton3").innerHTML =
      this.responseText;
    }
  };
  button3.open("POST", "buttonsAjax3.php", true);
  button3.send();
}


function dispButton4() {
  var button4 = new XMLHttpRequest();
  button4.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton4").innerHTML =
      this.responseText;
    }
  };
  button4.open("POST", "buttonsAjax4.php", true);
  button4.send();
}


function dispButton5() {
  var button5 = new XMLHttpRequest();
  button5.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton5").innerHTML =
      this.responseText;
    }
  };
  button5.open("POST", "buttonsAjax5.php", true);
  button5.send();
}


function dispButton6() {
  var button6 = new XMLHttpRequest();
  button6.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton6").innerHTML =
      this.responseText;
    }
  };
  button6.open("POST", "buttonsAjax6.php", true);
  button6.send();
}


function dispButton7() {
  var button7 = new XMLHttpRequest();
  button7.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton7").innerHTML =
      this.responseText;
    }
  };
  button7.open("POST", "buttonsAjax7.php", true);
  button7.send();
}


function dispButton8() {
  var button8 = new XMLHttpRequest();
  button8.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxButton8").innerHTML =
      this.responseText;
    }
  };
  button8.open("POST", "buttonsAjax8.php", true);
  button8.send();
}
