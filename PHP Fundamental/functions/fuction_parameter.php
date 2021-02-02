<?php 

function sayHello($name){
    echo "Hello ".$name.'<br>';
}

sayHello('Jack Peter');

function addValue($num1,$num2){
    $sum=$num1+$num2;
    echo $sum.'<br>';
}

addValue(4,4);

function totalValue($num3,$num4){
    $total=$num3+$num4;
    return $total;
}

$result=totalValue(3,3);
$result=totalValue($result,3);
echo $result;