<?php
// Gets the time of day so it says good morning or good afternoon to the user

$timeOfDay = date('a');
$welcomeMessage = '';

// create function that splits the users birthday and the current date in month and day, Then compare them and display a message if they are the same
$userDOB = $_COOKIE['user_dob'];
// echo $userDOB ."<br>";
$time = strtotime($userDOB);
$month = date("m", $time);
$year = date("d", $time);
$birthday = date("m", $time) . date("d", $time);

$today = date('m') . date('d');

if ($birthday === $today) {
    $welcomeMessage = 'Happy Birthday ' . $_COOKIE['user_name'] . "! 🎂";
} elseif ($timeOfDay == 'am') {
    $welcomeMessage =  'Good Morning ' . $_COOKIE["user_name"];
} else {
    $welcomeMessage = 'Good Afternoon ' . $_COOKIE["user_name"];
}

?>