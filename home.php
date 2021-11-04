<!DOCTYPE html>
<?php

    session_start();
    include_once 'includes/php/databaseConnection.php';

    $user_name = $_COOKIE["user_name"];
    $user_id = $_COOKIE["user_id"];

    if (!isset($_COOKIE["user_name"])) { // Checks if a users does not have a cookie in their browser
        header('Location: index.php'); // Redirects the user to the index page (index.php)
    }

    // Gets the time of day so it says good morning or good afternoon to the user

    $timeOfDay = date('a');
    $welcomeMessage = '';
    if($timeOfDay == 'am'){
        $welcomeMessage =  'Good morning '.$_SESSION['user_name'];
    }else{
        $welcomeMessage = 'Good afternoon '.$_SESSION['user_name'];
    }

?>
<html lang="eng">

<head>
    <!-- Website Title -->
    <title><?php echo $_SESSION['user_name'] ?>'s homepage</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/home.css"> <!-- Imports the css style sheet index.css -->
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
    <div class="main-content">
        <p class="welcome-message"><?php echo $welcomeMessage ?></p>
    </div>
</body>

</html>