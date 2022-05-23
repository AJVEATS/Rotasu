<?php $currentPage = substr($_SERVER['PHP_SELF'], 1, -4); ?>

<link rel="stylesheet" href="static/css/navigationBar.css">
<section class="navbar" id="navbar">
    <div class="navbar-logo">
        <img src="/static/images/logo/lotus-64.png" alt="lotus" />
    </div>
    <div class="navbar-links">
        <?php
            if ($currentPage != "home") {
                echo "<a href='home.php'>home</a>";
            }
            if ($currentPage != "history") {
                echo "<a href='history.php'>past entires</a>";
            }
            if ($currentPage != "account") {
                echo "<a href='account.php'>account</a>";
            }
        ?>
        <a href="logout.php">logout</a>
        <div class="navbar-links-mobile">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</section>