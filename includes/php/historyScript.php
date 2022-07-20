<?php

$userID = $_SESSION['user_id'];
$delayPercentage = 10;

if (isset($_GET['searchSubmit'])) {
    header("location: history.php?mode=get&action=search&search_term=".$_GET['searchQuery']);
} elseif (isset($_GET['searchDateSubmit'])) {
    header("location: history.php?mode=get&action=search&date_from=".$_GET['dateFrom']."&date_to=".$_GET['dateTo']);
}

if (isset($_GET['search_term'])) {
    $searchQuery = $_GET['search_term'];
    $get_user_entry_history_string = "SELECT entry_id, entry_time, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE diary_entry LIKE '%$searchQuery%' ORDER BY entry_time DESC";
} elseif (isset($_GET['date_from'])) {
    $dateFrom = $_GET['date_from'];
    $dateTo = $_GET['date_to'];

    if ($dateFrom > $dateTo) {
        echo "<script>alert('The first date needs to be older than the second date');</script>"; 
    } else {
        $get_user_entry_history_string = "SELECT entry_id, entry_time, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE entry_time > '$dateFrom' AND entry_time < '$dateTo' ORDER BY entry_time DESC;";
    }
} else {
    $get_user_entry_history_string = "SELECT entry_id, entry_time, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE user_id = '$userID' ORDER BY entry_time DESC";
}

$result = mysqli_query($connection, $get_user_entry_history_string);
$count = mysqli_num_rows($result);

if ($count > 0) {
    $counter = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        $entryPosition = $counter;
        $entryID = $row['entry_id'];
        $entryTime = $row['entry_time'];
        $entryDay = date('l', strtotime($entryTime));
        $entryMonth = date('M', strtotime($entryTime));
        $entryDateSuffix = date('S', strtotime($entryTime));
        $entryDayNumber = date('d', strtotime($entryTime));

        if ($entryDayNumber[0] == "0") {
            $entryDayNumber = ltrim($entryDayNumber, $entryDayNumber[0]);
        }

        $entryDayYear = date('Y', strtotime($entryTime));
        $diaryEntry = $row['diary_entry'];
        $entryTitle = $entryDay . " - " . $entryDayNumber . "<span class='entryDateSuffix'>" . $entryDateSuffix . "</span> of " . $entryMonth . " " . $entryDayYear;
    
?>
    <article class="diary-entry animate" id="<?php echo $entryPosition; ?>">
        <div class="diary-entry-title">
            <div class="diary-entry-date">
                <p><?php echo $entryTitle; ?></p>
            </div>
            <div class="diary-action-container">
                <a href="entry.php?mode=get&action=view&post_id=<?php echo $entryID; ?>"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                <a href="entry.php?mode=get&action=edit&post_id=<?php echo $entryID; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="entry.php?mode=get&action=delete&post_id=<?php echo $entryID; ?>"><i class="fa-solid fa-trash-can"></i></a>
            </div>
        </div>
        <div class="diary-entry-text">
            <p><?php echo $diaryEntry; ?></p>
        </div>
    </article>
<?php
    $counter++;
}
} elseif (isset($_GET['date_from'])) {
    echo "<h3>You haven't got any entries from this time 😔</h3>";
} elseif(isset($_GET['search_term'])) {
    echo "<h3>You haven't got any entries with those words 😔</h3>";
} else {
    echo "<h3>You haven't got any entries yet 😔</h3>";
}
?>