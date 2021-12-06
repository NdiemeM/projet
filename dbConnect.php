<?php
	$user='root';
	$mdp='';
	$dsn="mysql:host=localhost;dbname=accessbd";
	try {
	 $connect = new PDO($dsn,$user,$mdp);

		// echo "Success";
	} catch (PDOException $e) {
		die('Error : '.$e);
	}
?>



