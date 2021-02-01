<?php

//Arithmetic operators
$a = 33;
$b = 33;
echo $a + $b . '<br>';

$c = 44;
$d = 2;
echo $c - $d . '<br>';

$e = 22;
$f = 2;
echo $e * $f . '<br>';

$g = 50;
$h = 5;
echo $g / $h . '<br>';

$i = 100;
$j = 10;
echo $i % $j . '<hr>';

//Assignment operators
$x = 50;
echo $x . '<br>';

$x -= 2;
echo $x . '<br>';

$x += 3;
echo $x . '<br>';

$x /= 4;
echo $x . '<br>';

//Comparsion Operators
var_dump(1 == 1); //true
echo '<br>';
var_dump(1 != 4); //true
echo '<br>';
var_dump(1 > 2); //false
echo '<br>';
var_dump(1 < 2); //true
echo '<br>';
var_dump(1 >= 2); //false
echo '<br>';
var_dump(1 <= 2); //true
echo '<hr>';

//Increment And Decrement operators
//increment
$y = 4;
echo $y . '<br>';

$y += 1;
echo $y . '<br>';

$y++;
echo $y . '<br>';

++$y;
echo $y . '<br>';

//decrement
$z = 8;
echo $z . '<br>';

$z -= 1;
echo $z . '<br>';

$z--;
echo $z . '<br>';

--$z;
echo $z . '<hr>';

//logical operators
var_dump(false and true); //false
echo '<br>';
var_dump(true and false); //false
echo '<br>';
var_dump(false and false); //false
echo '<br>';
var_dump(true and true); //true
echo '<br>';
var_dump(false or true); //true
echo '<br>';
var_dump(true or false); //true
echo '<br>';
var_dump(false or false); //false
echo '<br>';
var_dump(true or true); //true
echo '<hr>';

//string operators
$text = 'Hello';
echo $text . '<br>';

$new_text = $text . 'World'; //now $new_text contains 'Hello World'
echo $new_text . '<br>';

$text = 'Goodbye'; //now $text contains 'Goodbye World'
$text .= 'World';
echo $text . '<hr>';

//ternary operators
$success = true;

if (isset($success)) {
    echo 'success' . '<br>';
} else {
    echo 'fail';
}

$result = isset($success) ? 'success' : 'fail';
echo $result . '<hr>';

//null coalescing operators
$success = 'Success';
$result = isset($success) ? 'Success' : 'Fail';
echo $result . '<br>';

$result = $success ?? 'Fail'; //php-7.0
echo $result;
