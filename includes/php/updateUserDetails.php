<?php 
    include_once 'databaseConnection.php';
    session_start();

    $user_id = $_SESSION['user_id'];

    if (isset($_POST['update-user-details-button'])) { // Checks if a user has submitted a form with a POST request method from the form
        $name = $_POST['first-name']; // Sets the variable $username with the data that the user had entered into the create account form, name field
        $email = $_POST['email']; // Sets the variable $userEmail with the data that the user had entered into the create account form, email field
        $dob = $_POST['dob'];

        $update_user_details_string = "UPDATE user_tbl SET user_name = '$name', user_email = '$email', user_dob = '$dob' WHERE user_id = '$user_id';"; // Declaring a variable $create_account_string with the sql query with the data that the user has entered into the create account form

        // Echo to see the variables value
        // echo $name . " ";
        // echo $email . " ";
        // echo $dob . " ";
        // echo $password . " ";
        // echo $passwordConfirm . " ";
        // echo $update_user_details_string . " ";

        if (mysqli_query($connection, $update_user_details_string)) { // Checks if the users detail have been added to the database
            echo '<script>console.log("user details updated in the table");</script>'; // Outputs a message to the user's browser console
            echo '<script>alert("user details updated in the table");</script>'; // Alerts the user that they have been added to the database
            header('Location: ../../account.php'); // Redirects the user to the user home page (userHome.php)
        }

        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_dob'] = $dob;
    }
