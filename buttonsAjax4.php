<?php
    session_start();

	$db = new PDO(

	'mysql:host=127.0.0.1;dbname=elevator',
	'root',
	''


	);



	$result = $db->prepare('SELECT * FROM clientRequests');
	$result->execute();

	while ($row = $result->fetch(PDO::FETCH_ASSOC))
	{
	$status = $row['status'];
	$requestID = $row['requestID'];

	if($status == 1 && $requestID == 4){
		echo "<input type=\"\" class=\"disabled\" name=\"Floor1\" value=\"Floor 1\"/>";
     }else if($status == 0 && $requestID == 4){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Floor1\" value=\"Floor 1\"/>";
	}
/*
	else if($status == 1 && $requestID == 2){
		echo "<input type=\"\" class=\"disabled\" name=\"Request2\" value=\"Request 2\"/>";
	}else if($status == 0 && $requestID == 2){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Request2\" value=\"Request 2\"/>";
	}else if($status == 1 && $requestID == 3){
		echo "<input type=\"\" class=\"disabled\" name=\"Request3\" value=\"Request 3\"/>";
	}else if($status == 0 && $requestID == 3){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Request3\" value=\"Request 3\"/>";
	}else if($status == 1 && $requestID == 4){
		echo "<input type=\"\" class=\"disabled\" name=\"Floor1\" value=\"Floor 1\"/>";
	}else if($status == 0 && $requestID == 4){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Floor1\" value=\"Floor 1\"/>";
	}else if($status == 1 && $requestID == 5){
		echo "<input type=\"\" class=\"disabled\" name=\"Floor2\" value=\"Floor 2\"/>";
	}else if($status == 0 && $requestID == 5){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Floor2\" value=\"Floor 2\"/>";
	}else if($status == 1 && $requestID == 6){
		echo "<input type=\"\" class=\"disabled\" name=\"Floor3\" value=\"Floor 3\"/>";
	}else if($status == 0 && $requestID == 6){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Floor3\" value=\"Floor 3\"/>";
	}else if($status == 1 && $requestID == 7){
		echo "<input type=\"\" class=\"disabled\" name=\"DoorOpen\" value=\"Door Open\"/>";
	}else if($status == 0 && $requestID == 7){
		echo "<input type=\"submit\" class=\"disabled\" name=\"DoorOpen\" value=\"Door Open\"/>";
	}else if($status == 1 && $requestID == 8){
		echo "<input type=\"\" class=\"disabled\" name=\"DoorClose\" value=\"Door Close\"/>";
	}else if($status == 0 && $requestID == 8){
		echo "<input type=\"submit\" class=\"disabled\" name=\"DoorClose\" value=\"Door Close\"/>";
	}*/
	}
?>
