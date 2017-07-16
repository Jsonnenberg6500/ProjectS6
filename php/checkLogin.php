<?php
    session_start();
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
        if ($row['password'] == $p) {
            echo "ok";
            $_SESSION['username']=$u;
        }
        else {
            echo "fail";
        }
    } else {
        echo "fail";
    }

    mysqli_close($con);
?>
