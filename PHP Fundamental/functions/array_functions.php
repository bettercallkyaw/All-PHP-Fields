<?php 

$numbers=[123,456,789,1000,2000];

echo max($numbers).'<br>';

echo min($numbers).'<br>';

echo '<pre>'.print_r($numbers,true).'</pre>';

sort($numbers);
echo '<pre>' . print_r($numbers, true) . '</pre>'.'<hr>';

$text='laravel is a powerful framework';
echo strlen($text).'<br>';

$text_number=['Hello',223,456,'Goodbye','laravel is a powerful framework'];
$found=in_array($text,$text_number);

if($found){
    echo 'Found';
}else{
    echo 'Not Found';
}


