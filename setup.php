<?php

require 'conf.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
	// open connection
	$db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$db->exec("CREATE TABLE IF NOT EXISTS product (
		id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
		serial_number CHAR(40) NOT NULL,
		name VARCHAR(100) NOT NULL,
		production_date DATE NOT NULL
	);");
	//$query = ' ALTER TABLE `product` ADD INDEX `name` (`name`) ';
	//$db->query($query);
}
catch (Exception $e) {
	die($e->getMessage());
	$query = ' ALTER TABLE `product` ADD INDEX `name` (`name`) ';
	$query_serial = ' ALTER TABLE `product` ADD INDEX `serial_number` (`serial_number`) '; 
        $db->query($query);
	$db->query($query_serial);
}
