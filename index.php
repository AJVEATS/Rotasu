<!DOCTYPE html>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
session_start();
include_once 'includes/php/loginScript.php';
include_once 'includes/php/createAccountScript.php';

// if (!isset($_COOKIE[$_SESSION['user_name']])) { // Checks if the user has a log in cookie
//     //echo '<script>console.log("user not logged in");</script>'; // Used for development and testing
// } else {
//     echo '<script>console.log("user logged in");</script>';
//     header('Location: userHome.php'); // If a user is logged in they are redirected to the user home page
// }
if (isset($_COOKIE["user_id"])) { // Checks if a users does not have a cookie in their browser
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
                <form action="" method="POST" class="formContainer">
                    <!-- The login in form for users with POST http method -->
                    <h3 class="login-form-title">Login</h3>
                    <section class="login-email">
                        <label for="email">Email:</label>
                        <input type="email" placeholder="email" name="email" required>
                    </section>
                    <section class="login-password">
                        <label for="password">Password:</label>
                        <input type="password" placeholder="Password" id="login-password" name="password" required>
                    </section>
                    <section class="show-password">
                        <input type="checkbox" id="show-password-login" onclick="showLoginPassword()">
                        <label for="show-password-checkbox">Show password</label>
                    </section>
                    <!-- <input type="submit" value="login" name="login"> -->
                    <section class="login-buttons">
                        <button type="submit" name="login-button"class="login-button" value="submit">login</button>
                        <button type="button"class="btn cancel" onclick="closeLoginForm()">Close</button>
                    </section>
                </form>
            </div>
        </div>

        <div class="createAccountPopup">
            <div class="formPopup" id="createAccountPopupForm">
                <form action="" method="POST" class="formContainer">
                    <!-- The create account form for users with POST http method -->
                    <h3 class="create-account-form-title">Create Account</h3>
                    <section class="create-account-name">
                        <label for="name">Your Name:</label>
                        <input type="text" placeholder="Your name" name="name" required>
                    </section>
                    <section class="create-account-email">
                        <label for="email">Your Email:</label>
                        <input type="email" placeholder="email" name="email" required>
                    </section>
                    <section class="create-account-dob">
                        <label for="dob" class="dob-label">Date of birth:</label>
                        <input type="date" id="dob" name="dob" required>
                    </section>
                    <section class="create-account-password">
                        <label for="password">Password:</label>
                        <input type="password" placeholder="Password" id="create-account-password" name="password" required>
                    </section>
                    <section class="create-account-confirm-password">
                        <label for="passwordConfirm">Confirm Password:</label>
                        <input type="password" placeholder="Confirm password" name="passwordConfirm" id="create-account-password-confirm" required>
                    </section>
                    <section class="show-password">
                        <input type="checkbox" id="show-password-create-account" onclick="showCreateAccountPassword()">
                        <label for="show-password-checkbox">Show password</label>
                    </section>
                    <section class="create-account-buttons">
                        <button type="submit" name="create-account-button" class="create-account-button"
                            value="submit">create account</button>
                        <button type="button" class="btn cancel" onclick="closeCreateAccountForm()">Close</button>
                    </section>
                </form>
            </div>
        </div>


        <section class="title">
            <div class="title-logo">
                <img class="logo" src="/static/images/logo/lotus-96.png" alt="lotus" />
            </div>
            <div class="title-text">
                <h1>Welcome to Rotasu</h1>
                <h2>How was your day?</h2>
            </div>
        </section>

        <section class="account-buttons" id="account-buttons">
            <div class="account-buttons-container">
                <a class="login-link" id="login-link" onclick="openLoginForm()">Log in</a>
                <!-- <a class="login-link" href="login.php">Log in</a> -->
                <a class="create-account-link" id="create-account-link" onclick="openCreateAccountForm()">New here?</a>
                <!-- <a class="create-account-link" href="createAccount.php">New here?</a> -->
            </div>
        </section>

        <section class="learn-more" id="learn-more">
            <a class="learn-more-link" href="#about">Learn more</a>
        </section>

        <section class="about" id="about">

        </section>
    </main>
</body>

</html>