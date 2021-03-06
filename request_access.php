<?php

    /* Get form data */
    $email = $_POST['email'];
    $username = $_POST['username_signup'];
    $password = $_POST['password_signup'];
    $password2 = $_POST['passwordrepeat_signup'];
    $bio = $_POST['bio'];

    /* Print out form data
    echo "Your Username: " . $username . "<br />";
    echo "Your Email: " . $email . "<br />";
    echo "Password: " . $password . "<br />";
    echo "Password after encryption: " . $password . "<br />";
    echo "bio: " . $bio . "<br />";
    */

    echo "<a href='logout.php'>Click</a> to return home.";

    /* Encrypt password */
    $password = sha1($password);

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
    $query = 'INSERT INTO memberInfo (username,password,email,bio)
              VALUES (:username,:password,:email,:bio)';
    $statement = $dbh->prepare($query);
    $params = [
        'username' => $username,
        'password' => $password,
        'email'    => $email,
        'bio'      => $bio
    ];
    $result = $statement->execute($params);
    var_dump($result);
    echo "<br />";
    $error = $dbh->errorInfo()[2];
    var_dump($error);

?>
