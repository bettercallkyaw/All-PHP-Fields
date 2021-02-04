<?php
/**
 * Note
 * -There is no alternative-syntax or template syntax for a do-while-loop.
 */

# for loop (with curly braces)
for($i=0;$i<=10;$i++){
    echo $i.'<br>';
}

# for loop (without curly brackets)
for ($i = 0; $i <= 10; $i++):
    echo $i . '<br>';
endfor;

#while loop(with curly brackets)
$i=0;
while ($i<=10) {
    echo $i.'<br>';
    $i++;
}

#while loop(without curly brackets)
$i = 0;
while ($i <= 10):
    echo $i . '<br>';
    $i++;
endwhile;    

#foreach loop(with curly brackets)
$numbers=[12,34,56,234,55,34];
foreach($numbers as $num){
    echo $num.'<br>';
}

#foreach loop(without curly brackets)
$numbers = [12, 34, 56, 234, 55, 34];
foreach ($numbers as $num):
    echo $num . '<br>';
endforeach;

//do while loop
$i=0;
do {
    echo $i.'<br>';
    $i++;
} while ($i<=100);