<?php
    include_once './includes/php/databaseConnection.php';

    if (isset($_POST['login-button'])) { 

        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = hash('sha512', mysqli_real_escape_string($connection,$_POST['password']));

        $validate_user_query_string = "SELECT user_id, user_name, user_email, user_dob, user_location FROM user_tbl WHERE user_email = '$email' and user_password = '$password'";
        $result = mysqli_query($connection, $validate_user_query_string);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        // echo '<script >alert("'.mysqli_num_rows($result).'");</script>';

        if (mysqli_num_rows($result) == 1) {

            if (isset($row['user_location'])) {
                $_SESSION['user_location'] = $row['user_location'];
            }

            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_dob'] = $row['user_dob'];
            $_SESSION['user_email'] = $row['user_email'];
            $expiry = time() + 3600 * 24;

            setcookie("user_id", $row['user_id'], $expiry);

            header("location: home.php");
            ob_end_flush();
        } else {
            echo '<script>alert("user details are incorrect"); </script>';
        }
    }
?>
