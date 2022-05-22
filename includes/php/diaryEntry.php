<?php 

    include_once './includes/php/databaseConnection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo $POST['diary-entry'];

        $userID = $_COOKIE['user_id'];
        $amEntry = $_COOKIE['amEntry'];
        $pmEntry = $_COOKIE['pmEntry'];
        $diaryEntry = $_POST['diary-entry'];
        $entryDateTime = date("Y-m-d")." ".date("H:i:s");

        $diary_entry_create = "INSERT INTO user_entries_tbl(user_id, entry_time, am_entry, pm_entry, diary_entry) VALUES ('$userID', '$entryDateTime', '$amEntry', '$pmEntry', '$diaryEntry');";

        if (mysqli_query($connection, $diary_entry_create)) {
            unset($_COOKIE['amEntry']);
            unset($_COOKIE['pmEntry']);

            setcookie('amEntry', null, -1, '/'); 
            setcookie('pmEntry', null, -1, '/'); 

            header('Location: home.php');
        }
    }
?>