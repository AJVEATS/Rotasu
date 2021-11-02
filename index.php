<!DOCTYPE html>
<?php
    include_once 'includes/php/databaseConnection.php';

    session_start(); // Includes the session started in the session.php script

    // if (!isset($_COOKIE[$_SESSION['user_name']])) { // Checks if the user has a log in cookie
    //     //echo '<script>console.log("user not logged in");</script>'; // Used for development and testing
    // } else {
    //     echo '<script>console.log("user logged in");</script>';
    //     header('Location: userHome.php'); // If a user is logged in they are redirected to the user home page
    // }
?>
<html lang="eng">
<head>
    <!-- Website Title -->
    <title>Wellbeing Website</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/index.css"> <!-- Imports the css style sheet index.css -->
    <link rel="stylesheet" href="static/css/indexContainer.css"> <!-- Imports the css style sheet indexContainer.css -->
    <!-- <link rel="stylesheet" href="static/css/navigationBar.css"> Imports the css style sheet createAccount.css -->

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>
<body>
    <div class="title">
        <div class="title-container">
            <img class="logo" src="/static/images/logo/lotus-96.png" alt="lotus" />
            <div class="title-content">
                <h1 class="title-h1">how was your day?</h1>
                <a href="about.php"class="about">
                    <p class="about-text"><i>lean more about /*name*/</i></p>
                </a>
                <div class="account-buttons">
                    <a href="login.php"><button type="button" id="login" class="account-button">log in</button></a>
                    <a href="createAccount.php"><button type="button" id="new-here" class="account-button">new here?</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>