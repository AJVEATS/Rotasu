<?php
$currentYear = date ("Y");
$currentMonth = date ("m");

$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentMonth);

echo $daysInMonth;
?>