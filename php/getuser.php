<?php
$u = strval($_GET['u']);
//$p = strval($_GET['p']);

//$p = sha1($p);

$con = mysqli_connect('localhost','root','','elevator');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM memberInfo WHERE username = '".$u."'";

$result = mysqli_query($con,$sql);

if ($row = mysqli_fetch_array($result)) {
    //echo "<style> #enterUsername { outline: none; box-shadow: 0 0 20px green; } </style>";
    echo "<div style=\"color: green; transition: 0.3s;\" class=\"container-fluid\"><b class=\"glyphicon glyphicon-ok\"></b></div>";
} else {
    echo "<div class=\"container-fluid\"><em><b>Error:</b> This username is not registered. <a href=\"signup.html\">Sign up?</a></em></div>";
}

mysqli_close($con);
?>
