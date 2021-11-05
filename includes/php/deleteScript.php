<?php

    include_once 'databaseConnection.php';
    session_start();

    $user_id = $_SESSION['user_id'];

    if (isset($_POST['delete-user-account-button'])) {
        $delete_user_string = "DELETE FROM user_tbl WHERE user_id = '$user_id';";
    }

    if (mysqli_query($connection, $delete_user_string)) { // Checks if the users detail have been added to the database
        echo '<script>console.log("user removed to the table");</script>'; // Outputs a message to the user's browser console
        echo '<script>alert("user removed to the table");</script>'; // Alerts the user that they have been added to the database
        header('Location: ../../index.php'); // Redirects the user to the user home page (userHome.php)
    }

// DELETE FROM user_tbl WHERE user_id = "47";
