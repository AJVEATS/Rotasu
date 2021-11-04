<!DOCTYPE html>
<?php

    session_start();
    include_once 'includes/php/databaseConnection.php';

    if (!isset($_COOKIE["user_name"])) { // Checks if a users does not have a cookie in their browser
        header('Location: index.php'); // Redirects the user to the index page (index.php)
    }

?>
<html lang="eng">

<head>
    <!-- Website Title -->
    <title>account</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/account.css"> <!-- Imports the css style sheet index.css -->
    <link rel="stylesheet" href="static/css/navigationBar.css"> <!-- Imports the css style sheet createAccount.css -->

    <!-- JavaScript scripts -->
    <script src="/includes/js/nav-bar.js"></script>

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="topnav" id="myTopnav">
        <div class="logo">
            <img class="logo" src="/static/images/logo/lotus-64.png" alt="lotus" />
        </div>
        <a href="logout.php">logout</a>
        <a href="account.php">account</a>
        <a href="home.php">home</a>
        <a href="javascript:void(0);" class="icon" onclick="responsiveness()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <?php 
        // echo $_SESSION['user_name'];
        // echo $_SESSION['user_dob'];
        // echo $_SESSION['user_email'];
    ?>
    <div class="account-content-container">
        <div class="welcome-message-container">
            <p class="welcome-message">Welcome to your account <?php echo $_SESSION['user_name'] ?>
        </div>
    </div>
</body>

</html>