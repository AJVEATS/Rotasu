<?php

    $userID = $_SESSION['user_id'];

    $get_user_entry_history_string = "SELECT entry_id, entry_time, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE user_id = '$userID' ORDER BY entry_time DESC LIMIT 5";
    $result = mysqli_query($connection, $get_user_entry_history_string);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {

            $_SESSION['entryPosition'] = $counter;
            $_SESSION['entryID'.$counter] = $row['entry_id'];
            $_SESSION['entryTime'.$counter] = $row['entry_time'];
            $entryDay = date('l', strtotime($_SESSION['entryTime'.$counter]));
            $entryMonth = date('M', strtotime($_SESSION['entryTime'.$counter]));
            $entryDateSuffix = date('S', strtotime($_SESSION['entryTime'.$counter]));
            $entryDayNumber = date('d', strtotime($_SESSION['entryTime'.$counter]));
            $entryDayYear = date('Y', strtotime($_SESSION['entryTime'.$counter]));
            $_SESSION['amEntry'.$counter] = $row['am_entry'];
            $_SESSION['pmEntry'.$counter] = $row['pm_entry'];
            $_SESSION['diaryEntry'.$counter] = $row['diary_entry'];
            $delayPercentage = 12.5;

            $entryTitle = $entryDay." - ".$entryDayNumber."<span class='entryDateSuffix'>".$entryDateSuffix."</span> of ".$entryMonth." ".$entryDayYear;

            ?> 
                <article class="diary-entry animate fadeInLeft" style=" animation-delay: <?php echo ($delayPercentage / 100) * $counter; ?>s" id="<?php echo $_SESSION['entryPosition']; ?>">
                    <div class="diary-entry-date">
                        <p><?php echo $entryTitle; ?></p>
                    </div>
                    <div class="diary-entry-text">
                        <p><?php echo $_SESSION['diaryEntry'.$counter]; ?></p>
                    </div>
                </article>
            <?php
            $counter++;
        }
    } else {
        echo "<h3>You haven't got any entries yet 😔</h3>";
    }
?>