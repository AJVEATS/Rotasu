<?php
    session_start();
    if (session_destroy()) {
        setcookie("user_id", $_SESSION['user_id'], time() - 3600);
        setcookie("user_name", $_SESSION['user_name'], time() - 3600);
        session_destroy();

        header("location: ../../index.php");
    }
?>