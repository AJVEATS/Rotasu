<?php
    session_start();
    include_once 'static/templates/htmlHeader.php';
    include_once 'includes/php/databaseConnection.php';

    if (!isset($_COOKIE["user_id"])) {
        header('Location: index.php');
    }
?>
    <!-- Website Title -->
    <title><?php echo $_SESSION["user_name"] ?>'s history</title>

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/history.css">

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>

<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <main>
        <section class="diary-history-title">
            <h1>Your Diary Entry History</h1>
        </section>
        <section class="diary-history">
            <?php include_once 'includes/php/historyScript.php'; ?>
        </section>
    </main>
</body>

</html>