<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "alextest";
    $dbName = "database";

    $connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Unable to connect to the database");

    // echo "Successful connection to the database";
?>