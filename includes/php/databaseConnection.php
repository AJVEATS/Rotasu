<?php
    // $dbServername = "shareddb-o.hosting.stackcp.net";
    // $dbUsername = "alex_db-313039a584";
    // $dbPassword = "alexTest.";
    // $dbName = "alex_db-313039a584";

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "alextest";
    $dbName = "database";

    $connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Unable to connect to the database");
?>