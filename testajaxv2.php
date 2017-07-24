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

	if($currentPosition == 0)
	{
		$doorState = 1; 	//door closed
		$currentPosition = 'car moving';
	}
		
	if($currentPosition == 1)
	{
		
		$currentPosition = 'floor 1';
	}
	
	if($currentPosition == 2)
	{
		
		$currentPosition = 'floor 2';
	}
		
	if($currentPosition == 3)
	{
		
		$currentPosition = 'floor 3';
	}
	
		
	
	echo "currentState: ";
	echo $currentPosition;
	
	echo"<p> </p>";
	
	if($doorState == 0)
	{
		$doorState = 'door open';
	}
	else
	{
		$doorState = 'door closed';	
	}
	
	echo "doorState: ";
	echo $doorState;
		
	echo "<br>";
	echo "<br>";
	}



?>