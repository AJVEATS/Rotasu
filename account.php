<?php
    session_start();
    include_once 'static/templates/htmlHeader.php';
    include_once 'includes/php/databaseConnection.php';
    include_once 'includes/php/updateUserDetails.php';
    include_once 'includes/php/deleteSCript.php';

    if (!isset($_SESSION["user_name"])) {
        header('Location: index.php');
    }
?>
    <!-- Website Title -->
    <title>account</title>

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/account.css">

    <!-- JavaScript scripts -->
    <script src="/includes/js/account.js"></script>
</head>

<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    
    <div class="account-content-container">
        <div class="welcome-message-container">
            <p class="welcome-message">Welcome to your account <?php echo $_SESSION['user_name'] ?>
        </div>
        <div class="detail-container">
            <div class="current-user-details-container">
                <p class="current-user-details-title">Your Current Details</p>
                <p class="current-user-details">First name:&nbsp;&nbsp;<?php echo $_SESSION['user_name'] ?></p>
                <p class="current-user-details">Email:&nbsp;&nbsp;<?php echo $_SESSION['user_email'] ?></p>
                <p class="current-user-details">Date of birth:&nbsp;&nbsp;<?php echo $_SESSION['user_dob'] ?></p>
            </div>
            <div class="update-user-details-container">
                <p class="update-user-details-title">Update your details</p>
                <form action="includes/php/updateUserDetails.php" class="update-user-detail-form" method="POST">
                    <div class="update-username-container">
                        <label for="first-name">First name:&nbsp;&nbsp;</label>
                        <input type="text" id="first-name" name="first-name" value="<?php echo $_SESSION['user_name'] ?>">
                    </div>
                    <div class="update-email-container">
                        <label for="email">Email:&nbsp;&nbsp;</label>
                        <input type="text" id="email" name="email" value="<?php echo $_SESSION['user_email'] ?>">
                    </div>
                    <div class="update-dob-container">
                        <label for="dob">Date of birth:&nbsp;&nbsp;</label>
                        <input type="date" id="dob" name="dob" value="<?php echo $_SESSION['user_dob'] ?>">
                    </div>
                    <button type="submit" name="update-user-details-button" class="account-button" value="submit">update details</button>
                </form>
            </div>
        </div>
        <div class="delete-user-container">
            <p class="delete-user-title">Delete you account</p>
            <button class="accordion">Delete account</button>
            <div class="panel">
                <form action="" class="delete-user-form" method="POST">
                    <p class="delete-account-text">Are you sure that you want to delete your account?</p>
                    <input type="hidden" name='_METHOD' value="DELETE">
                    <button type="submit" name="delete-user-button" class="account-button" value="submit">Delete</button>
                </form>
            </div>
        </div>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>
    </div>
</body>

</html>