<!DOCTYPE html>
<?php
include_once 'includes/php/createAccountScript.php';
?>
<html lang="eng">
<head>
    <!-- Website Title -->
    <title>create account</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/createAccount.css"> <!-- Imports the css style sheet index.css -->
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
                <h1 class="title-h1">Create Account</h1>
            </div>
            <div class="create-account-container">
                <form action="" method="POST"> <!-- The login in form for users with POST http method -->
                    <input type="text" placeholder="Your name" name="name" required>
                    <input type="email" placeholder="email" name="email" required><br>
                    <div class="date-input-container">
                        <label for="dob">Date of birth:⠀⠀</label>
                        <input type="date" id="dob" name="dob" required>
                    </div><br>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <input type="password" placeholder="Confirm password" name="passwordConfirm" required>
                    <div class="show-password">
                        <input type="checkbox" id="show-password-checkbox" onclick="showPassword()">
                        <label for="show-password-checkbox">Show password</label> 
                    </div>
                    <button type="submit" name="create-account-button" class="create-account-button" value="submit">create account</button>
                </form>
                <a href="index.php"><img class="back-arrow" src="/static/images/icons/arrow-left.svg" /></a>
            </div>
        </div>
    </div>
</body>
</html>