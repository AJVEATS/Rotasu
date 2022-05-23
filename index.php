<?php
session_start();
ob_start();
if (isset($_COOKIE["user_id"])) {
    header('Location: home.php');
    ob_end_flush();
}
include_once 'static/templates/htmlHeader.php';
include_once 'includes/php/loginScript.php';
include_once 'includes/php/createAccountScript.php';
?>
    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/index.css">
    
    <!-- Scripts -->
    <script src="static/js/index.js"></script>
</head>
<body>
    <main>
        <div class="loginPopup">
            <div class="formPopup" id="loginPopupForm">
                <form action="" method="POST" class="formContainer">
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
                <a class="create-account-link" id="create-account-link" onclick="openCreateAccountForm()">New here?</a>
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