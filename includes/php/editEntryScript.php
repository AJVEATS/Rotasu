<?php
include_once 'databaseConnection.php';

$post_id = $_GET['post_id'];

if (isset($_POST['edit-diary-submit'])) {

    $userID = $_COOKIE['user_id'];
    if (isset($_COOKIE['editAmEntry'])) {
        $updatedAmEntry = $_COOKIE['editAmEntry'];
    } else {
        $updatedAmEntry = 0;
    }

    if (isset($_COOKIE['editPmEntry'])) {
        $updatedPmEntry = $_COOKIE['editPmEntry'];
    } else {
        $updatedPmEntry = 0;
    }

    $updatedDiaryEntry = $_POST['edit-diary-entry'];

    $diary_entry_update = "UPDATE user_entries_tbl SET am_entry = '$updatedAmEntry', pm_entry = '$updatedPmEntry', diary_entry = '$updatedDiaryEntry' WHERE entry_id = '$post_id';";

    if (mysqli_query($connection, $diary_entry_update)) {
        unset($_COOKIE['editAmEntry']);
        unset($_COOKIE['editPmEntry']);

        setcookie('editAmEntry', null, -1, '/'); 
        setcookie('editPmEntry', null, -1, '/'); 

        header('Location: history.php');
    }
}

