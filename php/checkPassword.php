<?php
$u = strval($_GET['u']);
$p = strval($_GET['p']);

$p = sha1($p);

$con = mysqli_connect('localhost','root','','elevator');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM memberInfo WHERE username = '".$u."'";

$result = mysqli_query($con,$sql);

if ($row = mysqli_fetch_array($result)) {
    if ($row['password'] == $p)
        echo "<div style=\"color: green; transition: 0.3s;\" class=\"container-fluid\"><b class=\"glyphicon glyphicon-ok\"></b></div>";
    else {
        echo "<div class=\"container-fluid\"><em><b>Error:</b> Wrong password.</em></div>";
    }
} else {
    echo "<div class=\"container-fluid\"><em><b>Error:</b> Wrong password.</em></div>";
}

mysqli_close($con);
?>
