<?php

//normal array
$fruits=array('apple','orange','banana');

//indexed array
$numbers=[1,2,3,4,5,6,7];

//associative array
$companies=[
    'facebook'=>'social media',
    'google'=>'search engine',
    'apple'=>'smart phone'
];

//multidimensional array
$big_companies=[
    'twitter'=>'social media',
    'numbers'=>[33,45,56,78],
    'internet_companies'=>[
        'yahoo'=>'search engine',
        'reddit'=>'news site'
    ]
];

echo '<pre>'.print_r($fruits,true).'</pre>'.'<br>';
echo $fruits[0].'<br>';
echo '<pre>'.print_r($numbers,true).'</pre>'.'<br>';
echo $numbers[1].'<br>';
echo $companies['apple'].'<br>';
echo $big_companies['internet_companies']['yahoo'];

