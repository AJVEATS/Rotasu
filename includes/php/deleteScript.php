<?php

include_once 'databaseConnection.php';
session_start();    // Includes the session started in the session.php script

$user_id = $_SESSION['user_id'];

if (isset($_POST['delete-user-button'])) {
    $delete_user_string = "DELETE FROM user_tbl WHERE user_id = '$user_id';";
}

if (mysqli_query($connection, $delete_user_string)) { // Checks if the users detail have been added to the database
    echo '<script>console.log("user removed to the table");</script>'; // Outputs a message to the user's browser console
    echo '<script>alert("user removed to the table");</script>'; // Alerts the user that they have been added to the database

    // session_destroy();
    // setcookie("user_id", $_SESSION['user_id'], time() - 3600);
    // setcookie("user_name", $_SESSION['user_name'], time() - 3600);
    
    header("location: ../../index.php"); // Redirects the user to the index page (index.php)
}

    

// DELETE FROM user_tbl WHERE user_id = "47";
