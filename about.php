<!DOCTYPE html>
<?php
    include_once 'includes/php/databaseConnection.php';
    $sql = "INSERT INTO user_tbl (user_name, user_email, user_password, user_dob) VALUES ('Kermit', 'kamil@hotmail.com', '17b57ed6271f35bd4eb1f47271c2574af4f9ebc84e8ffc873f78a03700ab1f429edddc7f702ca0aaafa857948e9732c6197192848f568b78fd54b06bc9314bba', '2001-03-28');";
    mysqli_query($connection, $sql);



?>
<html lang="eng" style="background-image: url('/static/images/background/kirby-headphones.gif') !important;">
<head>
    <!-- Website Title -->
    <title>Wellbeing Website</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Wellbeing Tracker Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Veats">

    <!-- Stylesheet Styling -->
    <link rel="stylesheet" href="static/css/about.css"> <!-- Imports the css style sheet index.css -->
    <!-- <link rel="stylesheet" href="static/css/navigationBar.css"> Imports the css style sheet createAccount.css -->

    <!-- favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">

</head>
<body>
   
</body>
</html>