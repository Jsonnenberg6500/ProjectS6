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
        echo "fail";
    } else {
        echo "ok";
        /*
        $query = "INSERT INTO memberInfo(username,password) VALUES (".$u.",".$p.")";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_execute($stmt); */
        /*** connect to database ***/
        /*** mysql hostname ***/
        $mysql_hostname = 'localhost';

        /*** mysql username ***/
        $mysql_username = 'root';

       /*** mysql password ***/
        $mysql_password = '';

        /*** database name ***/
        $mysql_dbname = 'elevator';

        /* New database object */
        $dbh = new PDO(
            "mysql:host=$mysql_hostname;dbname=$mysql_dbname",
            $mysql_username,
            $mysql_password
        );

        /* Formatted query for insert */
        $query = 'INSERT INTO memberInfo (username,password)
                  VALUES (:username,:password)';
        $statement = $dbh->prepare($query);
        $params = [
            'username' => $u,
            'password' => $p
        ];
        $statement->execute($params);
    }

    mysqli_close($con);
?>
