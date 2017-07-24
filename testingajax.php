<?php
    session_start();

	$db = new PDO(

	'mysql:host=127.0.0.1;dbname=elevator',
	'root',
	''


	);


	$result = $db->prepare('SELECT * FROM CANLog ORDER BY DATE DESC, TIME DESC' );
	$result->execute();

	while ($row = $result->fetch(PDO::FETCH_ASSOC))
	{
	$date = $row['date'];
	$time = $row['time'];
	$floorQueue = $row['floorQueue'];
	$carPosition = $row['carPosition'];
	$targetPosition = $row['targetPosition'];
	$doorState =$row['doorState'];
	$signalID = $row['signalID'];

	echo "Date: " . $date . "\n";

	echo "Time: " . $time . "\n";

	echo "floorQueue: " . $floorQueue . "\n";

    echo "Signal: " . $signalID . "\n";

    echo "\n\n";

	}



?>
