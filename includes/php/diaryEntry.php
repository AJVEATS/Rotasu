<?php 

    include_once './includes/php/databaseConnection.php';

    if (isset($_POST['diary-submit'])) {

        $userID = $_COOKIE['user_id'];
        if (isset($_COOKIE['amEntry'])) {
            $amEntry = $_COOKIE['amEntry'];
        } else {
            $amEntry = 0;
        }
        
        if (isset($_COOKIE['pmEntry'])){
            $pmEntry = $_COOKIE['pmEntry'];
            $pmEntry = 0;
        }
        
        if (isset($_COOKIE['diary-entry'])) {
            $diaryEntry = $_POST['diary-entry'];
        } else {
            $diaryEntry = "No diary entry for today";
        }

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