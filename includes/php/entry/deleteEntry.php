<?php
include_once "includes/php/entry/viewEntry.php";

if (isset($_POST['diary-delete'])) {
    $delete_entry_string = "DELETE FROM user_entries_tbl WHERE entry_id = '$entryID';";

    // if (mysqli_query($connection, $delete_entry_string)) {
    //     // $url = strtok($url, '?');
    //     header("location: ../../home");
    // }
    if ($connection->query($delete_entry_string) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
?>
<section class="delete-entry">
    <link rel="stylesheet" href="static/css/entry/delete.css">
    <form>
        <button name="diary-delete" class="diary-delete" type="submit">Delete entry</button>
    </form>
</section>