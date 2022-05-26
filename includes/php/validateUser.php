<?php

if (!isset($_SESSION["user_name"])) {
    setcookie("user_id", $_SESSION['user_id'], time() - 3600);
    session_destroy();
    header('Location: index.php');
}

?>