<?php
session_start();
ob_start();
if (!isset($_COOKIE["user_id"])) {
    header('Location: index.php');
}
include_once 'static/templates/htmlHeader.php';
include_once 'includes/php/databaseConnection.php';
include_once 'includes/php/updateUserDetails.php';
include_once 'includes/php/deleteSCript.php';
?>
<!-- Stylesheet Styling -->
<link rel="stylesheet" href="static/css/account.css">
</head>

<body>
    <?php include_once 'static/templates/navBar.php'; ?>

    <div class="account-content-container">
        <div class="welcome-message-container">
            <p class="welcome-message">Welcome to your account <?php echo $_SESSION['user_name'] ?>
        </div>
        <div class="detail-container">
            <section class="current-user-details-container">
                <p class="current-user-details-title">Your Current Details</p>
                <p class="current-user-details">First name:&nbsp;&nbsp;<?php echo $_SESSION['user_name'] ?></p>
                <p class="current-user-details">Email:&nbsp;&nbsp;<?php echo $_SESSION['user_email'] ?></p>
                <p class="current-user-details">Date of birth:&nbsp;&nbsp;<?php echo $_SESSION['user_dob'] ?></p>

                <p class="current-user-details">Location:&nbsp;&nbsp;
                    <?php
                    if (isset($_SESSION['location'])) {
                        echo $_SESSION['location'];
                    } else {
                        echo "No location yet";
                    }
                    ?>
                </p>
            </section>
            <div class="update-user-details-container">
                <p class="update-user-details-title">Update your details</p>
                <form action="includes/php/updateUserDetails.php" class="update-user-detail-form" method="POST">
                    <section class="update-username-container">
                        <label for="first-name">First name:&nbsp;&nbsp;</label>
                        <input type="text" id="first-name" name="first-name" value="<?php echo $_SESSION['user_name'] ?>">
                    </section>
                    <section class="update-email-container">
                        <label for="email">Email:&nbsp;&nbsp;</label>
                        <input type="email" id="email" name="email" value="<?php echo $_SESSION['user_email'] ?>">
                    </section>
                    <session_cache_expire class="update-dob-container">
                        <label for="dob">Date of birth:&nbsp;&nbsp;</label>
                        <input type="date" id="dob" name="dob" value="<?php echo $_SESSION['user_dob'] ?>">
                    </session_cache_expire>
                    <section class="update-location-container">
                        <label for="location">Location:&nbsp;&nbsp;</label>
                        <?php
                            if (isset($_SESSION['location'])) {
                                ?> <input type="text" id="location" name="location" value="<?php echo $_SESSION['location'] ?>"> <?php
                                                                                                                        } else {
                                                                                                                            ?> <input type="text" id="location" name="location"> <?php
                                                                                                                                                                                }
                                                                                                                                                                                    ?>
                    </section>
                    <button type="submit" name="update-user-details-button" class="account-button" value="submit">update details</button>
                </form>
            </div>
        </div>
        <section class="delete-user-container">
            <p class="delete-user-title">Delete you account</p>
            <button class="accordion" onclick="deleteAccordian();">Delete account</button>
            <div class="panel">
                <form action="" class="delete-user-form" method="POST">
                    <p class="delete-account-text">Are you sure that you want to delete your account?</p>
                    <input type="hidden" name='_METHOD' value="DELETE">
                    <button type="submit" name="delete-user-button" class="account-button" value="submit">Delete</button>
                </form>
            </div>
        </section>
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