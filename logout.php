<?php
    session_start();  // Includes the session started in the session.php script
    if (session_destroy()) { // Stops the session that was created when the user logged in
        setcookie("user_id", $_SESSION['user_id'], time() - 3600);
        setcookie("user_name", $_SESSION['user_name'], time() - 3600);

        header("location: ../../index.php"); // Redirects the user to the index page (index.php)
    }
?>