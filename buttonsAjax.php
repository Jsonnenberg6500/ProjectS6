<?php
    session_start();

	$db = new PDO(

	'mysql:host=127.0.0.1;dbname=elevator',
	'root',
	''


	);


	$result = $db->prepare('SELECT * FROM clientRequest');
	$result->execute();

	while ($row = $result->fetch(PDO::FETCH_ASSOC))
	{
	$status = $row['status'];
	$requestID = $row['requestID'];

	if($status == 1 && $requestID == 1){
		echo "<input type=\"submit\" class=\"disabled\" name=\"Request1\" value=\"Request 1\" onclick=\"on_callPhp()\"/>";
	}
	}



?>
