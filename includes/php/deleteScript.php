<?php

include_once 'databaseConnection.php';
session_start();    // Includes the session started in the session.php script
$user_id = $_SESSION['user_id'];

$user_check = hash('sha512' /* Hashes the users password to sha512 hash */, mysqli_real_escape_string($connection, $_POST['user-check']));
$check_value = "";

$validate_user_query_string = "SELECT user_password FROM user_tbl WHERE user_id = '$user_id';";
$result = mysqli_query($connection, $validate_user_query_string);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC); // Creating a variable consisting of the returned data from the database
// $active = $row['active'];

$count = mysqli_num_rows($result); // Gets the amount of rows returned from the database

// Echo to see the variables value
// echo $password . " ";

if ($count == 1) { // Checks if one row was returned

    $check_value = $row['user_password'];
    $expiry = time() + 3600 * 24; // Create a variable for the expiry of the cookie which will be created

    // setcookie("user_name", $_SESSION['user_name'], $expiry); // Sets a cookies with the logged in user's username and user id
    // setcookie("user_id", $_SESSION['user_id'], $expiry);

    header("location: index.php"); // Redirects the logged in user to the user home page (home.php)
} else { // If it returns more than one row from the database or if it returns nothing from the database
    // $error = "Your login username or password is invalid"; // Creates an error with the correct message
    echo '<script>alert("user details are incorrect"); </script>'; // Outputs an error message to the user's browser console
}


// echo $user_check ."<br>";
echo $check_value;

// if ($_SERVER["REQUEST_METHOD"] == "POST") { 
//     if ()

// }






// if (isset($_POST['delete-user-button'])) {
//     $delete_user_string = "DELETE FROM user_tbl WHERE user_id = '$user_id';";
// }

// if (mysqli_query($connection, $delete_user_string)) { // Checks if the users detail have been added to the database
//     echo '<script>console.log("user removed to the table");</script>'; // Outputs a message to the user's browser console
//     echo '<script>alert("user removed to the table");</script>'; // Alerts the user that they have been added to the database

//     // session_destroy();
//     // setcookie("user_id", $_SESSION['user_id'], time() - 3600);
//     // setcookie("user_name", $_SESSION['user_name'], time() - 3600);
    
//     header("location: ../../index.php"); // Redirects the user to the index page (index.php)
// }

    

// DELETE FROM user_tbl WHERE user_id = "47";
