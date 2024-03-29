<?php
session_start();
ob_start();
include_once 'includes/php/validateUser.php';
include_once 'static/templates/htmlHeader.php';
include_once 'includes/php/databaseConnection.php';
include_once 'includes/php/account/updateUserDetails.php';
include_once 'includes/php/account/deleteSCript.php';
?>
<title><?php echo $_SESSION['user_name']; ?>'s account</title>
<link rel="stylesheet" href="static/css/account.css">
</head>
<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <div class="account-content-container">
        <div class="welcome-message-container">
            <p class="welcome-message">Welcome to your account <?php echo $_SESSION['user_name'] ?></p>
        </div>
        <div class="detail-container">
            <section class="current-user-details-container">
                <h2 class="current-user-details-title">Your Current Details</h2>
                <p class="current-user-details">First name:&nbsp;&nbsp;<?php echo $_SESSION['user_name'] ?></p>
                <p class="current-user-details">Email:&nbsp;&nbsp;<?php echo $_SESSION['user_email'] ?></p>
                <p class="current-user-details">Date of birth:&nbsp;&nbsp;<?php echo $_SESSION['user_dob'] ?></p>
                <p class="current-user-details">Location:&nbsp;&nbsp;
                    <?php
                    if (isset($_SESSION['user_location'])) {
                        echo $_SESSION['user_location'];
                    } else {
                        echo "No location yet";
                    }
                    ?>
                </p>
            </section>
            <section class="update-user-details-container">
                <h2 class="update-user-details-title">Update Your Details</h2>
                <form action="" class="update-user-detail-form" method="POST">
                    <section class="update-username-container">
                        <label for="first-name">First name:&nbsp;&nbsp;</label>
                        <input type="text" id="first-name" name="first-name" value="<?php echo $_SESSION['user_name'] ?>">
                    </section>
                    <section class="update-email-container">
                        <label for="email">Email:&nbsp;&nbsp;</label>
                        <input type="email" id="email" name="email" value="<?php echo $_SESSION['user_email'] ?>">
                    </section>
                    <section class="update-dob-container">
                        <label for="dob">Date of birth:&nbsp;&nbsp;</label>
                        <input type="date" id="dob" name="dob" value="<?php echo $_SESSION['user_dob'] ?>">
                    </section>
                    <section class="update-location-container">
                        <label for="location">Location:&nbsp;&nbsp;</label>
                        <?php
                        if (isset($_SESSION['user_location'])) {?> 
                            <input type="text" id="location" name="location" value="<?php echo $_SESSION['user_location'] ?>"> <?php
                        } else {
                            ?> <input type="text" id="location" name="location"> <?php
                        }?>
                    </section>
                    <button type="submit" name="update-user-details-button" class="account-button" value="submit">Update details</button>
                </form>
            </section>
            <section class="logout-container">
                <h2>Log Out</h2>
                <p>Do you want to log out of your account?</p>
                <a href="logout.php">Log out</a>
            </section>
            <section class="delete-user-container">
                <h2 class="delete-user-title">Delete Your Account</h2>
                <button class="accordion" onclick="deleteAccordian();">Delete account</button>
                <div class="panel">
                    <form action="" class="delete-user-form" method="POST">
                        <p class="delete-account-text">Are you sure? 😥</p>
                        <input type="hidden" name='_METHOD' value="DELETE">
                        <button type="submit" name="delete-user-button" class="account-button" value="submit">Delete</button>
                    </form>
                </div>
            </section>
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