<?php $currentPage = substr($_SERVER['PHP_SELF'], 1, -4); ?>

<link rel="stylesheet" href="static/css/navigationBar.css">
<script src="/includes/js/navBar.js"></script>
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
    </div>
    <div class="navbar-links-mobile">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa-solid fa-bars"></i></span>
    </div>
</section>

<section id="myNav" class="overlay navbar-mobile">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href='home.php'>home</a>
        <a href='history.php'>past entires</a>
        <a href='account.php'>account</a>
        <a href="logout.php">logout</a>
    </div>
</section>