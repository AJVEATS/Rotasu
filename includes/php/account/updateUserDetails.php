<?php
include_once './includes/php/databaseConnection.php';

$user_id = $_COOKIE['user_id'];

if (isset($_POST['update-user-details-button'])) {
    $name = $_POST['first-name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $update_user_details_string = "";
    $location = $_POST['location'];
    $update_user_details_string = "UPDATE user_tbl SET user_name = '$name', user_email = '$email', user_dob = '$dob', user_location = '$location' WHERE user_id = '$user_id';";   

    if (mysqli_query($connection, $update_user_details_string)) {
        session_start();        
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_dob'] = $dob;
        $_SESSION['location'] = $location;
        ob_end_flush();
        header('Location: ../../account.php');
        
    }
}
