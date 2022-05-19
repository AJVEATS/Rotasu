<?php
    session_start();
    include_once 'static/templates/htmlHeader.php';
    include_once 'includes/php/databaseConnection.php';

    if (!isset($_COOKIE["user_id"])) { // Checks if a users does not have a cookie in their browser
        header('Location: index.php'); // Redirects the user to the index page (index.php)
    }
?>
    <!-- Website Title -->
    <title><?php echo $_SESSION["user_name"] ?>'s history</title>

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/history.css"> <!-- Imports the css style sheet index.css -->

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>

<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <main>
        <?php include_once 'includes/php/historyScript.php'; ?>
    </main>
</body>

</html>