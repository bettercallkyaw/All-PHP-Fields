<?php

$fullName='Robet Peter'; //string
$age=22; //int
$price=44.4; //float
$isMarried=true; //bool

echo "Hello My name is ".$fullName."<br>";
echo $age."<br>";
echo $price."<br>";
echo $isMarried."<br>";

//constant variables
$fruit='apple';
$fruit='mango';
echo $fruit.'<br>';

define('COLOR','green');
define('color','red'); //not work
echo COLOR;