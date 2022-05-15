<!DOCTYPE html>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

session_start();
include_once 'includes/php/databaseConnection.php';
include_once 'includes/php/welcomeMessage.php';

if (!isset($_COOKIE["user_id"])) { // Checks if a users does not have a cookie in their browser
    header('Location: index.php'); // Redirects the user to the index page (index.php)
}

?>
<html lang="eng">

<head>
    <!-- Website Title -->
    <title><?php echo $_SESSION["user_name"] ?>'s homepage</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/home.css"> <!-- Imports the css style sheet index.css -->

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <div class="main-content">
        <p class="welcome-message"><?php echo $welcomeMessage; ?></p>
    </div>
</body>

</html>