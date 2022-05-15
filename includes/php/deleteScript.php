<?php

include_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $method = $_SERVER['REQUEST_METHOD']) {
    $currentUserID = $_COOKIE['user_id'];
    $deleteUserRequest = "DELETE FROM user_tbl WHERE user_id='$currentUserID';";

    if (mysqli_query($connection, $deleteUserRequest)) { // Checks if the users detail have been added to the database
        setcookie("user_id", $_SESSION['user_id'], time() - 3600);
        setcookie("user_name", $_SESSION['user_name'], time() - 3600);

        header("location: ../../index.php"); // Redirects the user to the index page (index.php)
    }
}

?>
