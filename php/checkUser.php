<?php
$u = strval($_GET['u']);

$con = mysqli_connect('localhost','root','','elevator');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM memberInfo WHERE username = '".$u."'";

$result = mysqli_query($con,$sql);

if ($row = mysqli_fetch_array($result)) {
    //echo "<style> #enterUsername { outline: none; box-shadow: 0 0 20px green; } </style>";
    echo "exists";
} else {
    echo "vacant";
}

mysqli_close($con);
?>
