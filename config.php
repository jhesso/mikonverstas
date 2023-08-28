<?php

	$databaseHost = 'localhost';
	$databaseName = 'mikonverstas';
	$databaseUsername = 'root';
	$databasePassword = '';

	try
	{
		$dbConnection = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
		echo $e->getMessage();
	}
?>
