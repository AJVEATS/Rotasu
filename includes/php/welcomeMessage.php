<?php
// Gets the time of day so it says good morning or good afternoon to the user

$timeOfDay = date('a');
$welcomeMessage = '';

// create function that splits the users birthday and the current date in month and day, Then compare them and display a message if they are the same
$userDOB = $_SESSION['user_dob'];
$userName = $_SESSION['user_name'];
$time = strtotime($userDOB);
$birthday = date("m", $time) . date("d", $time);

$today = date('m') . date('d');

date_default_timezone_set('Europe/London');
$timeNum=date('Hi'); 

if ($birthday === $today){ 
    $welcomeMessage = 'Happy Birthday ' . $userName . "! 🎂";

}elseif (($timeNum >= "0600") && ($timeNum <= "1200")) {
    $welcomeMessage = "Good Morning ". $userName;

} elseif (($timeNum >= "1201") && ($timeNum <= "1600")) {
    $welcomeMessage = 'Good Afternoon ' . $userName;
  
} elseif (($timeNum >= "1601") && ($timeNum <= "2100")) {
    $welcomeMessage = 'Good Evening ' . $userName;

} elseif (($timeNum >= "2101") && ($timeNum <= "2400")) {
    $welcomeMessage = 'Good Night ' . $userName;
}
