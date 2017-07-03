<?php
    session_start();

	$db = new PDO(
	
	'mysql:host=127.0.0.1;dbname=elevator',
	'root',
	''
		
		
	);

	
	$result = $db->prepare('SELECT * FROM memberInfo');
	$result->execute();
		
	
		
	while ($row = $result->fetch(PDO::FETCH_ASSOC))
	{
	$username = $row['username'];
	$password = $row['password'];
	$email = $row['email'];
	

	echo "Username: ";
	echo $username;
	
	echo"<p> </p>";
		
	echo "Email: ";
	echo $email;
	
	echo "<br>";
	echo "<br>";
	}


	//echo<"<br />";
	//echo<"<br />";






	//
	
	/*$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	
	$rows = $db->query('SELECT * FROM memberInfo');
	foreach($rows as $row) {
	var_dump($row);
	echo "<br />";
	echo "<br />";
		
		
	}*/
	
	


    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br />";

        require 'control.html';

        echo "Click to <a href='logout.php'>Logout</a>";
    } else {
        echo "<p>You must be logged in!</p>";
    }

?>
