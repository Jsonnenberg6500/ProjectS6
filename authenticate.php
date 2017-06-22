<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username&&$password) {
        if($username=="Admin" && $password=="pass") {
            $_SESSION['username']=$username;
            header("Location: member.php");
        }
        else {
            header("Location: index.html");
        }
    } else {
        header("Location: index.html");
    }
 ?>
