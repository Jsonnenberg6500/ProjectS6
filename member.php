<?php
    session_start();

	$db = new PDO(

	'mysql:host=127.0.0.1;dbname=elevator',
	'root',
	''


	);


	$result = $db->prepare('SELECT * FROM memberInfo');
	$result->execute();






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
        //echo "Welcome, " . $_SESSION['username'] . "!<br />";
        $username = $_SESSION['username'];

         echo "<div class=\"jumbotron\">
         <h2>Greetings $username! </h2>
               <h1>Welcome to the Elevator Control Panel! </h1>
              </div>";

        require 'control.php';

    echo "Click to <a href='logout.php'>Logout</a>";
    }
    else {
        echo "<p>You must be logged in!</p>";
    }

?>
