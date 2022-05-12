<!DOCTYPE html>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

session_start();
include_once 'includes/php/databaseConnection.php';
include_once 'includes/php/welcomeMessage.php';

if (!isset($_COOKIE["user_name"])) { // Checks if a users does not have a cookie in their browser
    header('Location: index.php'); // Redirects the user to the index page (index.php)
}

?>
<html lang="eng">

<head>
    <!-- Website Title -->
    <title><?php echo $_COOKIE["user_name"] ?>'s homepage</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/home.css"> <!-- Imports the css style sheet index.css -->

    <!-- JavaScript scripts -->
    <script src="/includes/js/nav-bar.js"></script>

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php //include_once 'static/templates/navBar.php'; 
    ?>
    <link rel='stylesheet' href='static/css/navigationBar.css'> <!-- Imports the css style sheet createAccount.css -->
    <section class='navbar' id='navbar'>
        <div class='navbar-logo'>
            <img src='/static/images/logo/lotus-64.png' alt='lotus' />
        </div>
        <div class='navbar-links'>
            <a href='logout.php'>logout</a>
            <a href='account.php'>account</a>
            <a href='home.php'>home</a>
            <div class='navbar-links-mobile'>
                <i class='fa fa-bars'></i>
            </div>
        </div>

    </section>
    <div class="main-content">
        <p class="welcome-message"><?php echo $welcomeMessage; ?></p>
    </div>
</body>

</html>