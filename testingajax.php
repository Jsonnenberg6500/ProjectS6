<?php
    session_start();

	$db = new PDO(
	
	'mysql:host=127.0.0.1;dbname=elevator',
	'root',
	''
		
		
	);

	
	$result = $db->prepare('SELECT * FROM CANLog');
	$result->execute();
		
	echo "CANLOG DATABASE";
	echo "<br>";
	echo "<br>";
	echo "<br>";
		
	while ($row = $result->fetch(PDO::FETCH_ASSOC))
	{
	$date = $row['date'];
	$time = $row['time'];
	$floorQueue = $row['floorQueue'];
	$carPosition = $row['carPosition'];
	$targetPosition = $row['targetPosition'];
	$doorState =$row['doorState'];
	$signalID = $row['signalID'];

	echo "Date: ";
	echo $date;
	
	echo"<p> </p>";
		
	echo "Time: ";
	echo $time;
		
	echo"<p> </p>";
		
	echo "floorQueue: ";
	echo $floorQueue;
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	}



?>