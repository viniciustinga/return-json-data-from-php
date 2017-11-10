<?php
$username = 'root';
$password = ''; 
$connection = new PDO('mysql:host=localhost;dbname=testing', $username, $password);

// prepare statement to select employee table
$statement = $connection->prepare(
	"SELECT * FROM employee ORDER BY name ASC"
);

// execute statement to select employee table
$statement->execute();
$result = $statement->fetchAll();

?>