<!DOCTYPE html>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

session_start();
include_once 'includes/php/databaseConnection.php';
include_once 'includes/php/welcomeMessage.php';
include_once 'includes/php/diaryEntry.php';

if (!isset($_COOKIE["user_id"])) { // Checks if a users does not have a cookie in their browser
    header('Location: index.php'); // Redirects the user to the index page (index.php)
}

?>
<html lang="eng">

<head>
    <!-- Website Title -->
    <title><?php echo $_SESSION["user_name"] ?>'s homepage</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/home.css"> <!-- Imports the css style sheet index.css -->

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/dc3d6ef24d.js" crossorigin="anonymous"></script>

    <script src="/includes/js/dairy.js"></script>

</head>

<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <main>
        <section class="welcome-message">
            <p><?php echo $welcomeMessage; ?></p>
        </section>
        <form action="" method="POST"  class="your-day">
            <div class="your-day-question">
                <p>How did you feel this morning?</p>
            </div>
            <div class="your-morning">
                <a name="am-entry" onclick="saveAMEntry(1)" value="1"><i class="fa-solid fa-face-disappointed fa-2xl"></i></a>
                <a name="am-entry" onclick="saveAMEntry(2)" value="2"><i class="fa-solid fa-face-meh fa-2xl"></i></a>
                <a name="am-entry" onclick="saveAMEntry(3)" value="3"><i class="fa-solid fa-face-smile-relaxed fa-2xl"></i></a>
            </div>
            <div class="your-day-question">
                <p>How did you feel this afternoon?</p>
            </div>
            <div class="your-afternoon">
                <a name="pm-entry" onclick="savePMEntry(1)" value="1"><i class="fa-solid fa-face-disappointed fa-2xl"></i></a>
                <a name="pm-entry" onclick="savePMEntry(2)" value="2"><i class="fa-solid fa-face-meh fa-2xl"></i></a>
                <a name="pm-entry" onclick="savePMEntry(3)" value="3"><i class="fa-solid fa-face-smile-relaxed fa-2xl"></i></a>
            </div>
            <div class="your-day-question">
                <p>Tell me more about my day</p>
            </div>
            <div class="your-day">
                <textarea name="diary-entry" rows="4" cols="50"></textarea>
            </div>
            <button name="diary-submit" type="submit">click</button>
        </form>
    </main>
</body>

</html>