<?php

function navBar() {

    $navbarHTML = "
    <link rel='stylesheet' href='static/css/navigationBar.css'> <!-- Imports the css style sheet createAccount.css -->
    <section class='navbar' id='navbar'>
        <div class='navbar-logo'>
            <img src='/static/images/logo/lotus-64.png' alt='lotus' />
        </div>
        <div class='navbar-links'>
            <a href='logout.php'>logout</a>
            <a href='account.php'>account</a>
            <a href='home.php'>home</a>
            <div class='navbar-links-mobile'>
                <i class='fa fa-bars'></i>
            </div>
        </div>

    </section>";

    echo $navbarHTML;
}

navBar();

?>