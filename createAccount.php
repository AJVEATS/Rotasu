<!DOCTYPE html>
<html lang="eng">
<head>
    <!-- Website Title -->
    <title>Create Account</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/createAccount.css"> <!-- Imports the css style sheet index.css -->
    <link rel="stylesheet" href="static/css/indexContainer.css"> <!-- Imports the css style sheet indexContainer.css -->
    <!-- <link rel="stylesheet" href="static/css/navigationBar.css"> Imports the css style sheet createAccount.css -->

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>
<body>
    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <div class="title">
        <div class="title-container">
            <a href="index.php"><img class="logo" src="/static/images/logo/icons8-lotus-96.png" alt="lotus" /></a>
            <div class="title-content">
                <h1 class="title-h1">Create Account</h1>
            </div>
            <div class="create-account-container">
                <form action="" method="POST"> <!-- The login in form for users with POST http method -->
                    <input type="text" placeholder="Your name" required>
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
                    <input type="submit" value="login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>