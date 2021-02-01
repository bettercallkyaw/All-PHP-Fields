<?php

$fullName = 'william smith'; //string
$age = 22; //int
$isCool = true; //bool
$price = 44.4; //float

echo 'Hello My name is ' . $fullName;
echo '<br>';
echo $age;
echo '<br>';
echo $isCool;
echo '<br>';
echo $price;
echo '<br>';

//constant variables
$fruit = 'apple';
$fruit = 'mango';

echo $fruit;
echo '<br>';

define('COLOR', 'red');
define('color', 'blue'); //not work
echo COLOR;
