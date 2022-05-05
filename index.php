<!DOCTYPE html>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include_once 'includes/php/loginScript.php';
include_once 'includes/php/createAccountScript.php';

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
    
    <!-- Scripts -->

    <script src="static/js/index.js"></script>

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>

<body>
    <main>

        <div class="loginPopup">
            <div class="formPopup" id="loginPopupForm">
                <form action="loginScript.php" method="POST" class="formContainer">
                    <!-- The login in form for users with POST http method -->
                    <input type="email" placeholder="email" name="email" required>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <div class="show-password">
                        <input type="checkbox" id="show-password-checkbox" onclick="showPassword()">
                        <label for="show-password-checkbox">Show password</label>
                    </div>
                    <!-- <input type="submit" value="login" name="login"> -->
                    <button type="submit" name="login-button" class="login-button" value="submit">login</button>
                    <button type="button" class="btn cancel" onclick="closeLoginForm()">Close</button>
                </form>
            </div>
        </div>

        <div class="createAccountPopup">
            <div class="formPopup" id="createAccountPopupForm">
                <form action="createAccountScript.php" method="POST" class="formContainer">
                    <!-- The login in form for users with POST http method -->
                    <input type="text" placeholder="Your name" name="name" required>
                    <input type="email" placeholder="email" name="email" required><br>
                    <div class="date-input-container">
                        <label for="dob" class="dob-label">Date of birth:</label>
                        <input type="date" id="dob" name="dob" required>
                    </div><br>
                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <input type="password" placeholder="Confirm password" name="passwordConfirm" required>
                    <div class="show-password">
                        <input type="checkbox" id="show-password-checkbox" onclick="showPassword()">
                        <label for="show-password-checkbox">Show password</label>
                    </div>
                    <button type="submit" name="create-account-button" class="create-account-button"
                        value="submit">create account</button>
                    <button type="button" class="btn cancel" onclick="closeCreateAccountForm()">Close</button>
                </form>
            </div>
        </div>


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
                <a class="login-link" onclick="openLoginForm()">Log in</a>
                <a class="create-account-link" onclick="openCreateAccountForm()">New here?</a>
            </div>
        </section>

        <section class="learn-more">
            <a class="learn-more-link" href="#about-us">Learn more</a>
        </section>
    </main>
</body>

</html>