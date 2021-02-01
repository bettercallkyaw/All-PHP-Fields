<?php

$numbers = ['one', 'two', 'three', 'four', 'five'];

echo '<pre>' . print_r($numbers, true) . '</pre>';
echo '<br>';

unset($numbers[0]);
echo '<pre>' . print_r($numbers, true) . '</pre>';
echo '<br>';

unset($numbers[1]);
echo '<pre>' . print_r($numbers, true) . '</pre>';
echo '<br>';

$arr_set = array_values($numbers);
echo '<pre>' . print_r($arr_set, true) . '</pre>';
