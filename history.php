<?php

// TODO Add 'back to top' button
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
    <?php include_once 'static/templates/navBar.php';
    include_once 'static/templates/BackToTop.php';?>
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
        <section class="search-bar-mobile">

            <div class="ac">

                <input class="ac-input" id="ac-1" name="ac-1" type="checkbox" />
                <label class="ac-label" for="ac-1">Search</label>

                <article class="ac-text">

                    <div class="ac-sub">
                        <input class="ac-input" id="ac-2" name="ac-2" type="checkbox" />
                        <label class="ac-label" for="ac-2">Search by keywords</label>
                        <article class="ac-sub-text">
                            <form action="" class="search-form" method="GET">
                                <input type="text" placeholder="search" name="searchQuery">
                                <input type="submit" name="searchSubmit" value="search">
                            </form>
                        </article>
                    </div>

                    <div class="ac-sub">
                        <input class="ac-input" id="ac-3" name="ac-3" type="checkbox" />
                        <label class="ac-label" for="ac-3">Search by date</label>
                        <article class="ac-sub-text">
                            <form action="" class="search-date" method="GET">
                                <div class="date-inputs">
                                    <input type="date" placeholder="from" id="dateFrom" name="dateFrom">
                                    <input type="date" placeholder="to" id="dateTo" name="dateTo">
                                </div>
                                <input type="submit" name="searchDateSubmit" value="search">
                            </form>
                        </article>
                    </div>

                </article>

            </div>

        </section>
        <section class="diary-history">
            <?php include_once 'includes/php/historyScript.php'; ?>
        </section>
    </main>
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    </script>
</body>

</html>