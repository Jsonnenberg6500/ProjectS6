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
    }

     echo "<div class=\"jumbotron\">
     <h2>Greetings $username! </h2>
           <h1>Welcome to the Elevator Control Panel! </h1>
          </div>";


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

        require 'control.php';



        //JAMES MAKING EDITS FROM HERE DOWN
        echo "<h1>Entire Content of the clientRequests table</h1>";
        $db = new PDO(
            'mysql:host=127.0.0.1;dbname=elevator',
            'root',
            ''
        );
        $rows = $db->query('SELECT * FROM clientRequests ORDER BY requestID desc');
        foreach($rows as $row){
            for($i=0; $i<sizeof($row)/2; $i++){
                echo $row[$i] . " | ";
            }
            echo "<br />";
        }

?>
    <h2>EDIT data into the database using the form below!</h2>
    <form action="member.php" method="POST">
        status: <input type="text" name="status" /><br />
        <input type="submit" value="Add to database" />
    </form>

    <form action="member.php" method="POST">
        requestID: <input type="submit" name="requestID" /><br />
    </form>

<?php
        echo "Click to <a href='logout.php'>Logout</a>";
    }
    else {
        echo "<p>You must be logged in!</p>";
    }

?>
