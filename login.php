<!DOCTYPE html>
<html lang="eng">
<?php 
include_once 'includes/php/loginScript.php';
?>
<head>
    <!-- Website Title -->
    <title>login</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/login.css"> <!-- Imports the css style sheet index.css -->
    <link rel="stylesheet" href="static/css/indexContainer.css"> <!-- Imports the css style sheet indexContainer.css -->

    <!-- Javascript functions -->
    <script src="/includes/js/login-create-account.js"></script>
    
    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>
<body>
    <div class="title">
        <div class="title-container">
            <a href="index.php"><img class="logo" src="/static/images/logo/lotus-96.png" alt="lotus" /></a>
            <div class="title-content">
                <h1 class="title-h1">Log in</h1>
            </div>
            <div class="login-container">
                <form action="" method="POST"> <!-- The login in form for users with POST http method -->
                    <input type="email" placeholder="email" name="email" required>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <div class="show-password">
                        <input type="checkbox" id="show-password-checkbox" onclick="showPassword()">
                        <label for="show-password-checkbox">Show password</label> 
                    </div>
                    <!-- <input type="submit" value="login" name="login"> -->
                    <button type="submit" name="login-button" class="login-button" value="submit">login</button>
                </form>
                <a href="index.php"><img class="back-arrow" src="/static/images/icons/arrow-left.svg" /></a>
            </div>
        </div>
    </div>
</body>
</html>