<?php 
    include_once './includes/php/databaseConnection.php';

    if (isset($_POST['create-account-button'])) {
        if ($_POST['password'] === $_POST['passwordConfirm']) { 
            $name = $_POST['name']; 
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $password = hash('sha512', $_POST['password']);
            $passwordConfirm = $_POST['passwordConfirm'];

            $create_account_string = "INSERT INTO user_tbl(user_name, user_email, user_password, user_dob) VALUES ('$name', '$email', '$password', '$dob');"; 

            if (mysqli_query($connection, $create_account_string)) { 
                header('Location: home.php');
            }

        } else {
            echo '<script type="text/javascript">alert("Passwords do not match please enter your password in again")</script>'; // Outputs an error message
        }
    }
