<?php

    $userID = $_SESSION['user_id'];

    $get_user_entry_history_string = "SELECT entry_id, entry_time, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE user_id = '$userID' ORDER BY entry_time DESC LIMIT 5";
    $result = mysqli_query($connection, $get_user_entry_history_string);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {

            $_entryPosition = $counter;
            // $_SESSION['entryID'.$counter] = $row['entry_id'];
            $entryTime = $row['entry_time'];
            $entryDay = date('l', strtotime($entryTime));
            $entryMonth = date('M', strtotime($entryTime));
            $entryDateSuffix = date('S', strtotime($entryTime));
            $entryDayNumber = date('d', strtotime($entryTime));
            $entryDayYear = date('Y', strtotime($entryTime));
            // $_SESSION['amEntry'.$counter] = $row['am_entry'];
            // $_SESSION['pmEntry'.$counter] = $row['pm_entry'];
            $diaryEntry = $row['diary_entry'];
            $delayPercentage = 12.5;

            $entryTitle = $entryDay." - ".$entryDayNumber."<span class='entryDateSuffix'>".$entryDateSuffix."</span> of ".$entryMonth." ".$entryDayYear;

            ?> 
                <article class="diary-entry animate fadeInLeft" style=" animation-delay: <?php echo ($delayPercentage / 100) * $counter; ?>s" id="<?php echo $entryPosition; ?>">
                    <div class="diary-entry-date">
                        <p><?php echo $entryTitle; ?></p>
                    </div>
                    <div class="diary-entry-text">
                        <p><?php echo $diaryEntry; ?></p>
                    </div>
                </article>
            <?php
            $counter++;
        }
    } else {
        echo "<h3>You haven't got any entries yet 😔</h3>";
    }
?>