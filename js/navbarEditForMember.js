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
            }
        }
    };
    xmlhttp.open("GET","php/checkSessionStatus.php",true);
    xmlhttp.send();

    setInterval('updateClock()', 1000);
}
