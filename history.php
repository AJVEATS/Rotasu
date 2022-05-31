<?php
    session_start();
    include_once 'includes/php/validateUser.php';
    include_once 'static/templates/htmlHeader.php';
    include_once 'includes/php/databaseConnection.php';
?>
    <title><?php echo $_SESSION["user_name"] ?>'s history</title>
    <link rel="stylesheet" href="static/css/history.css">
    <link rel="stylesheet" href="static/css/entry/entryCard.css">
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>
<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <main>
        <section class="diary-history-title">
            <h1>Your Diary Entry History</h1>
        </section>
        <section class="search-bar">
            <form action="" class="search-form" method="GET">
                <input type="text" placeholder="search" name="searchQuery">
                <input type="submit" name="searchSubmit" value="search">
            </form>
            <form action="" class="search-date" method="GET">
                <div class="date-inputs">
                    <input type="date" placeholder="from" id="dateFrom" name="dateFrom">
                    <input type="date" placeholder="to" id="dateTo" name="dateTo">
                </div>
                <input type="submit" name="searchDateSubmit" value="search">
            </form>
        </section>
        <section class="diary-history">
            <?php include_once 'includes/php/historyScript.php'; ?>
        </section>
    </main>
</body>

</html>