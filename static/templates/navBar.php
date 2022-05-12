<?php

function navBar() {

    $navbarHTML = "
    <section class='topnav' id='myTopnav'>
    <link rel='stylesheet' href='static/css/navigationBar.css'> <!-- Imports the css style sheet createAccount.css -->
        <div class='logo'>
            <img class='logo' src='/static/images/logo/lotus-64.png' alt='lotus' />
        </div>
        <a href='logout.php'>logout</a>
        <a href='account.php'>account</a>
        <a href='home.php'>home</a>
        <a href='javascript:void(0);'' class='icon' onclick='responsiveness()'>
            <i class='fa fa-bars'></i>
        </a>
    </section>";

    echo $navbarHTML;
}

navBar();

?>