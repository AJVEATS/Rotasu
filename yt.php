<!DOCTYPE html>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    include_once 'includes/php/databaseConnection.php';

    session_start(); // Includes the session started in the session.php script

    if (isset($_COOKIE["user_name"])) { // Checks if a users does not have a cookie in their browser
        header('Location: home.php'); // Redirects the user to the index page (index.php)
    }

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
    <link rel="stylesheet" href="static/css/yt.css"> <!-- Imports the css style sheet index.css -->

    <!-- JavaScript scripts -->
    <script src="/static/js/yt.js"></script>

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet"> 

</head>

<body>

    <main>

        <section class="title">
            <h1>Link to video player</h1>
        </section>
        <section class="form">
            <form action="" method="POST">
                <h2 class="form-title">Form Title</h2>
                <input type="url" placeholder="Enter the video's link here" name="url" id="url" required>
                <button type="submit" value="submit" onclick="setCookie();">Submit</button>
            </form>

        </section>
    </main>
</body>

</html>