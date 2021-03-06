<?php
session_start();
include_once 'includes/php/validateUser.php';
include_once 'static/templates/htmlHeader.php';
include_once 'includes/php/databaseConnection.php';

if ($_GET["post_id"] == "") {
    header("location: history.php");
} 

$entryID = htmlspecialchars($_GET["post_id"]);
$action = htmlspecialchars($_GET["action"]);

$get_entry_string = "SELECT entry_id, entry_time, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE entry_id = '$entryID'";
$result = mysqli_query($connection, $get_entry_string);
$count = mysqli_num_rows($result);

if ($count = 1) {
    $counter = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $_entryPosition = $counter;
        $entryTime = $row['entry_time'];
        $entryDay = date('l', strtotime($entryTime));
        $entryMonth = date('M', strtotime($entryTime));
        $entryDateSuffix = date('S', strtotime($entryTime));
        $entryDayNumber = date('d', strtotime($entryTime));
        $entryDayYear = date('Y', strtotime($entryTime));

        $amEntry = $row['am_entry'];
        if ($amEntry == 1) {
            $amEntryHTML = "<i class='fa-solid fa-face-disappointed fa-2xl'></i>";
        } elseif ($amEntry == 2) {
            $amEntryHTML = "<i class='fa-solid fa-face-meh fa-2xl'></i></a>";
        } elseif ($amEntry == 3) {
            $amEntryHTML = "<i class='fa-solid fa-face-smile-relaxed fa-2xl'></i>";
        } else {
            $amEntryHTML = "<i class='fa-solid fa-circle-question fa-2xl'></i>";
        }

        $pmEntry = $row['pm_entry'];
        if ($pmEntry == 1) {
            $pmEntryHTML = "<i class='fa-solid fa-face-disappointed fa-2xl'></i>";
        } elseif ($pmEntry == 2) {
            $pmEntryHTML = "<i class='fa-solid fa-face-meh fa-2xl'></i></a>";
        } elseif ($pmEntry == 3) {
            $pmEntryHTML = "<i class='fa-solid fa-face-smile-relaxed fa-2xl'></i>";
        } else {
            $pmEntryHTML = "<i class='fa-solid fa-circle-question fa-2xl'></i>";
        }
        
        $diaryEntry = $row['diary_entry'];
        $entryTitle = $entryDay . " - " . $entryDayNumber . "<span class='entryDateSuffix'>" . $entryDateSuffix . "</span> of " . $entryMonth . " " . $entryDayYear;
    }
}
?>
<title>View Entry</title>
<link rel="stylesheet" href="static/css/entry.css">
<link rel="stylesheet" href="static/css/entry/entryCard.css">
<link rel="icon" type="image/png" sizes="32x32" href="./static/images/favicon/favicon-32x32.png">
</head>
<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <main>
        <?php 
            if ($action == "edit"){
                include_once "includes/php/entry/editEntry.php";
            } elseif ($action == "view") {
                include_once "includes/php/entry/viewEntry.php";
            } elseif ($action == "delete") {
                include_once "includes/php/entry/deleteEntry.php";
            }
        ?>
        <section class="backToEntry">
            <a class="backToEntryButton" href="history.php"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
        </section>
    </main>
</body>