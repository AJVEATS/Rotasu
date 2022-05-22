<?php 
    include_once './includes/php/databaseConnection.php';
    // session_start();

    if (isset($_POST['create-account-button'])) { // Checks if a user has submitted a form with a POST request method from the form
        if ($_POST['password'] === $_POST['passwordConfirm']) { // Checks if the password and confirm password are identical
            $name = $_POST['name']; // Sets the variable $username with the data that the user had entered into the create account form, name field
            $email = $_POST['email']; // Sets the variable $userEmail with the data that the user had entered into the create account form, email field
            $dob = $_POST['dob']; // Sets the variable $dob with the data that the user has entered into the create account form, dob field
            $password = hash('sha512', $_POST['password']); // Sets the variable $password with the data that the user had entered into the create account form, password field. And Hashes the password to sha512.
            $passwordConfirm = $_POST['passwordConfirm']; // Sets the variable $passwordConfirm with the data that the user had entered into the create account form, passwordConfirm field

            $create_account_string = "INSERT INTO user_tbl(user_name, user_email, user_password, user_dob) VALUES ('$name', '$email', '$password', '$dob');"; // Declaring a variable $create_account_string with the sql query with the data that the user has entered into the create account form

            // Echo to see the variables value
            // echo $name . " ";
            // echo $email . " ";
            // echo $dob . " ";
            // echo $password . " ";
            // echo $passwordConfirm . " ";
            // echo $create_account_string . " ";

            if (mysqli_query($connection, $create_account_string)) { // Checks if the users detail have been added to the database

                // $login_new_user_string = "SELECT user_id FROM 'user_tbl' WHERE 'user_name' = $name;";
                

                // $_SESSION['user_name'] = $name;
                // $_SESSION['user_id'] = $row['user_id']; // Creates a session variable consisting of the logged in user's user id
                // $_SESSION['user_dob'] = $dob;
                // $_SESSION['user_email'] = $email;
                // $expiry = time() + 3600 * 24; // Create a variable for the expiry of the cookie which will be created

                // setcookie("user_id", $_SESSION['user_id'], $expiry);

                header('Location: home.php'); // Redirects the user to the user home page (userHome.php)
            }

        } else { // If the user's details aren't added to the database
            echo '<script type="text/javascript">alert("Passwords do not match please enter your password in again")</script>'; // Outputs an error message
        }
    }
