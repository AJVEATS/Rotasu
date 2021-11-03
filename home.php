<!DOCTYPE html>
<?php

    session_start();
    include_once 'includes/php/databaseConnection.php';

    $user_name = $_COOKIE["user_name"];
    $user_id = $_COOKIE["user_id"];
    
    $sql = "SELECT user_name FROM user_tbl WHERE user_id = '$user_id';";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // echo $row['user_name'] . "<br>";
        }
    }

    if (!isset($_COOKIE["user_name"])) { // Checks if a users does not have a cookie in their browser
        header('Location: index.php'); // Redirects the user to the index page (index.php)
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
    <!-- <a href="logout.php" class="">logout</a> -->
    <div class="topnav" id="myTopnav">
        <!-- <div class="dropdown">
            <button class="dropbtn">Account
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="">All topics</a>
                <a href="">Software engineering</a>
                <a href="logout.php">logout</a>
            </div>
        </div> -->
        <a href="logout.php">logout</a>
        <a href="account.php">account</a>
        <a href="home.php">home</a>
        <a href="javascript:void(0);" class="icon" onclick="responsiveness()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</body>

</html>