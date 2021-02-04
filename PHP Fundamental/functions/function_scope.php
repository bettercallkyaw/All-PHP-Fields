<?php 

$text='Hello World'; //global variable

function saySomething(){
    global $text;
    $text='Goodbye World'; //local variable
}

echo $text.'<br>';
saySomething();

echo $text.'<br>';
echo $text;

