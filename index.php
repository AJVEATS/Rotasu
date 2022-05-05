<!DOCTYPE html>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include_once 'includes/php/databaseConnection.php';

session_start(); // Includes the session started in the session.php script

// if (!isset($_COOKIE[$_SESSION['user_name']])) { // Checks if the user has a log in cookie
//     //echo '<script>console.log("user not logged in");</script>'; // Used for development and testing
// } else {
//     echo '<script>console.log("user logged in");</script>';
//     header('Location: userHome.php'); // If a user is logged in they are redirected to the user home page
// }
if (isset($_COOKIE["user_name"])) { // Checks if a users does not have a cookie in their browser
    header('Location: home.php'); // Redirects the user to the index page (index.php)
}
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
    <main>
        <section class="title">
            <div class="title-logo">
                <img class="logo" src="/static/images/logo/lotus-96.png" alt="lotus" />
            </div>
            <div class="title-text">
                <h1>Welcome to Lotus</h1>
                <h2>How was your day?</h2>
            </div>
        </section>

        <section class="account-buttons">
            <div class="account-buttons-container">
                <a class="login-link" href="login.php">Log in</a>
                <a class="create-account-link" href="createAccount.php">New here?</a>
            </div>
        </section>

        <section class="learn-more">
            <a class="learn-more-link" href="#about-us">Learn more</a>
        </section>

        <section class="about-us" id="about-us">
            <p>About us</p>
        </section>
    </main>
</body>

</html>