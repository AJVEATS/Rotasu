<!DOCTYPE html>
<?php
    $randomImage = random_int(1, 5); // Gets a random number from a range
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
    <link rel="stylesheet" href="static/css/index.css"> <!-- Imports the css style sheet index.css -->
    <!-- <link rel="stylesheet" href="static/css/navigationBar.css"> Imports the css style sheet createAccount.css -->

    <!-- Fonts -->
    

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>
<!-- <body style="background-image: url('/static/images/background/<?php echo $randomImage ?>.jpg');"> --> 
<body>
    <div class="title">
        <div class="title-container">
            <img class="logo" src="/static/images/logo/icons8-lotus-96.png" alt="lotus" />
            <div class="title-content">
                <h1 class="title-h1">how was your day?</h1>
                <div class="account-buttons">
                    <a href="#login"><button type="button" id="login" class="account-button">log in</button></a>
                    <a href="createAccount.php"><button type="button" id="new-here" class="account-button">new here?</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>