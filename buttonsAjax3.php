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

	if($status == 1 && $requestID == 3){
		echo "<input type=\"\" class=\"disabled\" name=\"Request3\" value=\"Request 3\"/>";
     }else if($status == 0 && $requestID == 3){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Request3\" value=\"Request 3\"/>";
	}

	}
?>
