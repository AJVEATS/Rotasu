<?php
session_start();
include_once 'includes/php/validateUser.php';
include_once 'static/templates/htmlHeader.php';
include_once 'includes/php/databaseConnection.php';

$entryID = htmlspecialchars($_GET["post_id"]);
$action = htmlspecialchars($_GET["action"]);

$get_entry_string = "SELECT entry_id, entry_time, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE entry_id = '$entryID'";
$result = mysqli_query($connection, $get_entry_string);
$count = mysqli_num_rows($result);

if ($count = 1) {
    $counter = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $_entryPosition = $counter;
        // $entryID = $row['entry_id'];
        $entryTime = $row['entry_time'];
        $entryDay = date('l', strtotime($entryTime));
        $entryMonth = date('M', strtotime($entryTime));
        $entryDateSuffix = date('S', strtotime($entryTime));
        $entryDayNumber = date('d', strtotime($entryTime));
        $entryDayYear = date('Y', strtotime($entryTime));
        // $_SESSION['amEntry'.$counter] = $row['am_entry'];
        // $_SESSION['pmEntry'.$counter] = $row['pm_entry'];
        $diaryEntry = $row['diary_entry'];
        $delayPercentage = 10;

        $entryTitle = $entryDay . " - " . $entryDayNumber . "<span class='entryDateSuffix'>" . $entryDateSuffix . "</span> of " . $entryMonth . " " . $entryDayYear;
    }
}

?>
<!-- Website Title -->
<title>View Entry</title>

<!-- Stylesheet Styling -->
<link rel="stylesheet" href="static/css/entry.css">

<!-- favicon icon -->
<link rel="icon" type="image/png" sizes="32x32" href="./static/images/favicon/favicon-32x32.png">

</head>
<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <main>
        
        <?php 
            if ($action == "edit"){
                include_once "includes/php/editEntry.php";
            } elseif ($action == "view") {
                include_once "includes/php/viewEntry.php";
            }
        ?>
        
    </main>
</body>