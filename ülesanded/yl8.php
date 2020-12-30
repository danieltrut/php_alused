<?php
/*Ülesanne 8 Daniil Tr 30.12.2020*/
echo date('d.m.Y G:i');

$dateOfBirth = "17-10-1985";
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo 'Age is '.$diff->format('%y');

// get today's date
$today = new DateTime();
echo 'Today is: ' . $today->format('m-d-Y') . '<br />';

// get the season dates
$spring = new DateTime('March 20');
$summer = new DateTime('June 20');
$fall = new DateTime('September 22');
$winter = new DateTime('December 21');

switch(true) {
    case $today >= $spring && $today < $summer:
        echo 'It\'s Spring!';
        break;

    case $today >= $summer && $today < $fall:
        echo 'It\'s Summer!';
        break;

    case $today >= $fall && $today < $winter:
        echo 'It\'s Fall!';
        break;

    default:
        echo 'It must be Winter!';
}
