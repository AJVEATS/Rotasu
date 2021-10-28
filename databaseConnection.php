<?php

$username = 'root';
$password = 'alextest';
$db_name = 'database';

$connection = mysqli_init(); 

$database = new mysqli('localhost', $username, $password, $db_name) or die("Unable to connect to the database");

echo "Successful connection to the database";

?>