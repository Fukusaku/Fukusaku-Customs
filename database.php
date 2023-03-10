<?php

$config = require_once 'connectPDO.php';

try {
	
	$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => TRUE,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
	
} catch (PDOException $error) {
	
	echo $error;
	exit('Database error');	
}
