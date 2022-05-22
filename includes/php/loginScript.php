<?php
    include_once './includes/php/databaseConnection.php';

    if (isset($_POST['login-button'])) { 

        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = hash('sha512', mysqli_real_escape_string($connection,$_POST['password']));

        $validate_user_query_string = "SELECT user_id, user_name, user_email, user_dob, user_location FROM user_tbl WHERE user_email = '$email' and user_password = '$password'";
        $result = mysqli_query($connection, $validate_user_query_string);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        if ($count == 1) {

            if (!is_null($row['user_location'])) {
                $_SESSION['user_location'] = $row['user_location'];
            }

            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_dob'] = $row['user_dob'];
            $_SESSION['user_email'] = $row['user_email'];
            // $_SESSION['user_location'] = $row['user_location'];
            $expiry = time() + 3600 * 24;

            setcookie("user_id", $_SESSION['user_id'], $expiry);

            header("location: home.php");
        } else {
            $error = "Your login username or password is invalid";
            echo '<script>alert("user details are incorrect"); </script>';
        }
    }
?>
