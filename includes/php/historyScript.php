<?php

    $userID = $_SESSION['user_id'];

    $get_user_entry_history_string = "SELECT entry_id, entry_time, entry_day, am_entry, pm_entry, diary_entry FROM user_entries_tbl WHERE user_id = '$userID'";
    $result = mysqli_query($connection, $get_user_entry_history_string); // With the query created above it ($validate_user_query_string) it executes the query with the database
    $count = mysqli_num_rows($result); // Gets the amount of rows returned from the database

    if ($count == 0) { // Checks if the amount of rows returned from the database is equal to zero
        echo "<h3>There are no posts that match your search</h3>"; // Outputs a message

    } elseif ($count > 0) { // Checks if the amount of rows returned from the database is more than zero
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) { // Goes through all of the rows of data returned from the database

            $_SESSION['entryPosition'] = $counter;
            $_SESSION['entryID'] = $row['entry_id']; // Declares the variable with the values returned from the database
            $_SESSION['entryTime'.$counter] = $row['entry_time'];
            $_SESSION['entryDay'.$counter] = $row['entry_day'];
            $_SESSION['amEntry'] = $row['am_entry'];
            $_SESSION['pmEntry'] = $row['pm_entry'];
            $_SESSION['diaryEntry'.$counter] = $row['diary_entry'];

            ?> 
                <article class="diary-entry" id="<?php echo $_SESSION['entryPosition']; ?>">
                    <div class="diary-entry-date">
                        <p><?php echo $_SESSION['entryDay'.$counter]; ?></p>
                        <p><?php echo $_SESSION['diaryEntry'.$counter]; ?></p>
                    </div>

                </article>
            <?php
            $counter++;
        }
    }
?>