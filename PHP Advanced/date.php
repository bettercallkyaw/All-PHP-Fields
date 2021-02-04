<?php 
/*
d - Represent day of the month; two digits with leading zeros (01 or 31)
D - Represent day of the week in text as an abbreviation (Mon to Sun)
m - Represent month in numbers with leading zeros (01 or 12)
M - Represent month in text, abbreviated (Jan to Dec)
y - Represent year in two digits (08 or 14)
Y - Represent year in four digits (2008 or 2014)
*/

$today = date("d/m/Y");
echo $today.'<br>';

echo date("d/m/Y") . "<br>";
echo date("d-m-Y") . "<br>";
echo date("d.m.Y")."<br>";

/*
h - Represent hour in 12-hour format with leading zeros (01 to 12)
H - Represent hour in in 24-hour format with leading zeros (00 to 23)
i - Represent minutes with leading zeros (00 to 59)
s - Represent seconds with leading zeros (00 to 59)
a - Represent lowercase ante meridiem and post meridiem (am or pm)
A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)
 */

echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a");

// Executed at March 05, 2014 07:19:18
$timestamp = time();
echo ($timestamp)."<br>";

$timestamp = 1394003958;
echo (date("F d, Y h:i:s", $timestamp))."<br>";

// Create the timestamp for a particular date
echo mktime(15, 20, 12, 5, 10, 2014)."<br>";

// Get the weekday name of a particular date
echo date('l', mktime(0, 0, 0, 4, 1, 2014))."<br>";

//Executed at March 05, 2014
$futureDate = mktime(0, 0, 0, date("m")+30, date("d"), date("Y"));
echo date("d/m/Y", $futureDate);
