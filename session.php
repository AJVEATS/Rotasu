<?php 
    session_start();
    echo json_encode($_SESSION)."<br>";
    if (isset($_COOKIE['user_id'])) {
        echo $_COOKIE['user_id'];
    } else {
        echo 'no user id cookie set';
    }
    
?>