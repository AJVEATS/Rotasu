<?php 

    include_once './includes/php/databaseConnection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userID = $_COOKIE['user_id'];
        $amEntry = $_COOKIE['amEntry'];
        $pmEntry = $_COOKIE['pmEntry'];
        $diaryEntry = $_POST['diary-entry'];
        $entryDateTime = date("Y-m-d")." ".date("H:i:s");

        $diary_entry_create = "INSERT INTO user_entries_tbl(user_id, entry_time, am_entry, pm_entry, diary_entry) VALUES ('$userID', '$entryDateTime', '$amEntry', '$pmEntry', '$diaryEntry');";

        if (mysqli_query($connection, $diary_entry_create)) { // Checks if the users detail have been added to the database
            header('Location: home.php'); // Redirects the user to the user home page (userHome.php)
        }
    }
?>