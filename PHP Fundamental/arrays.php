<?php

$fruits = array('apple', 'orange', 'banana');

//indexed array
$numbers = [1, 2, 3, 4, 5, 6];

//associative array
$internet_company = [
    'facebook' => 'social media',
    'google' => 'search engine',
    'apple' => 'laptop,smart phone',
];

//multidimensional array
$companies = [
    'twitter' => 'social media',
    'huawei' => ['smart phone', 'laptop', 'AI'],
    'company' => [
        'asus' => 'computer',
        'coca' => 'juice',
    ],
];

echo '<pre>' . print_r($fruits, true) . '</pre>' . '<br>';
echo $fruits[2] . '<br>';
echo $internet_company['facebook'] . '<br>';
echo $companies['huawei'][1] . '<br>';
echo $companies['company']['coca'];
