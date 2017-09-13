<?php
	$connection = new PDO("mysql:hostname=localhost;dbname=brian_zhu","root","");
	
	$command = "DELETE FROM `cart` WHERE 1";
			
	$result = $connection->prepare($command);
	
	$result->execute();
	
	$data = $result->fetchAll(PDO::FETCH_NUM);
	
	echo json_encode($data);
?>