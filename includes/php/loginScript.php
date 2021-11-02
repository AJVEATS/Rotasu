<?php
    include_once './includes/php/databaseConnection.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Checks if a user has submitted a form with a POST request method

        $email = mysqli_real_escape_string($connection,$_POST['email']); // Gets the user's username that they entered in the login form from index.php
        $password = hash('sha512' /* Hashes the users password to sha512 hash */, mysqli_real_escape_string($connection,$_POST['password'])); // Gets the user's password that they entered in the login form from index.php

        $validate_user_query_string = "SELECT user_id, user_name, user_email FROM user_tbl WHERE user_email = '$email' and user_password = '$password'"; // Creates a query with the data that the users entered in the login form, to check if they are a valid user
        $result = mysqli_query($connection, $validate_user_query_string); // With the query created above it ($validate_user_query_string) it executes the query with the database
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC); // Creating a variable consisting of the returned data from the database
        // $active = $row['active'];

        $count = mysqli_num_rows($result); // Gets the amount of rows returned from the database

        // Echo to see the variables value
        // echo $email . " ";
        // echo $password . " ";
        // echo $validate_user_query_string . " ";
        // echo $count . " ";

        if($count == 1) { // Checks if one row was returned

            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_id'] = $row['user_id']; // Creates a session variable consisting of the logged in user's user id
            $expiry = time() + 3600 * 24; // Create a variable for the expiry of the cookie which will be created

            setcookie("user_name", $_SESSION['user_name'], $expiry); // Sets a cookies with the logged in user's username and user id
            setcookie("user_id", $_SESSION['user_id'], $expiry);

            header("location: home.php"); // Redirects the logged in user to the user home page (home.php)
        } else { // If it returns more than one row from the database or if it returns nothing from the database
            $error = "Your login username or password is invalid"; // Creates an error with the correct message
            echo '<script>alert("user details are incorrect"); </script>'; // Outputs an error message to the user's browser console
        }
    }
?>
