<!DOCTYPE html>
<?php
    include_once 'includes/databaseConnection.php'
?>
<html lang="eng">
<head>
    <!-- Website Title -->
    <title>Wellbeing Website</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/index.css"> <!-- Imports the css style sheet index.css -->
    <link rel="stylesheet" href="static/css/indexContainer.css"> <!-- Imports the css style sheet indexContainer.css -->
    <!-- <link rel="stylesheet" href="static/css/navigationBar.css"> Imports the css style sheet createAccount.css -->

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>
<body>
    <div class="title">
        <div class="title-container">
            <img class="logo" src="/static/images/logo/icons8-lotus-96.png" alt="lotus" />
            <div class="title-content">
                <h1 class="title-h1">how was your day?</h1>
                <div class="account-buttons">
                    <a href="login.php"><button type="button" id="login" class="account-button">log in</button></a>
                    <a href="createAccount.php"><button type="button" id="new-here" class="account-button">new here?</button></a>
                </div>
            </div>
        </div>
    </div>

    <?php 
        $sql = "SELECT * FROM user_tbl;";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echp $row['user_name'];
            }
        }
    ?>
</body>
</html>