<?php
    session_start();

	$db = new PDO(
	
	'mysql:host=127.0.0.1;dbname=elevator',
	'root',
	''
		
		
	);

	
	$result = $db->prepare('SELECT * FROM currentState');
	$result->execute();
	
	echo "<br>";
	echo "<br>";

	echo "CURRENT STATE DATABASE";
	echo "<br>";
	echo "<br>";
		
	while ($row = $result->fetch(PDO::FETCH_ASSOC))
	{
	$currentPosition = $row['currentPosition'];
	$doorState = $row['doorState'];
	$other = $row['other'];

	echo "currentState: ";
	echo $currentPosition;
	
	echo"<p> </p>";
	
	echo "doorState: ";
	echo $doorState;
		
	echo "<br>";
	echo "<br>";
	}



?>