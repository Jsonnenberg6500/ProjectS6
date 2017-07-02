<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

   /*** mysql password ***/
    $mysql_password = '';

    /*** database name ***/
    $mysql_dbname = 'Project6';

    /* New database object */
    $dbh = new PDO(
        "mysql:host=$mysql_hostname;dbname=$mysql_dbname",
        $mysql_username,
        $mysql_password
    );

    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = 'SELECT username,password FROM memberInfo
              WHERE username = :username AND password = :password';
    $statement = $dbh->prepare($query);
    $params = [
        'username' => $username,
        'password' => $password
    ];
    $result = $statement->execute($params);
    var_dump($result);
    echo "<br />";
    $error = $dbh->errorInfo()[2];
    var_dump($error);

    $result = $statement->fetchColumn();

    if ($result == false) {
        echo "Login Failed";
    }
    else {
        echo "Login Succeeded";
        $_SESSION['username']=$username;
        header("Location: member.php");

    }
/*
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
    }*/
 ?>
