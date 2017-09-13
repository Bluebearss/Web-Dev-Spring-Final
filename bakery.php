<?php
	$connection = new PDO("mysql:hostname=localhost;dbname=brian_zhu","root","");
	
	$command = "SELECT * FROM `grocerystoretable` WHERE `type` = 'bakery'";
			
	$result = $connection->prepare($command);
	
	$result->execute();
	
	$data = $result->fetchAll(PDO::FETCH_NUM);
	
	echo json_encode($data);
?>