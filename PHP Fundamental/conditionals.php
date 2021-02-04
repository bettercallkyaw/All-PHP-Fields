<?php

$fruits = 'apple';

//if(with curly brackets)
if($fruits=='apple'){
    echo 'This is an apple'.'<br>';
}

//if(without curly brnckets)
if ($fruits == 'apple'):
    echo 'This is an apple' . '<br>';
endif;

//if/else(with curly brackets)
if ($fruits == 'apple') {
    echo 'This is an apple' . '<br>';
}else{
    echo 'This is not an apple';
}

//if/else(without curly brackets)
if ($fruits == 'apple'):
    echo 'This is an apple' . '<br>';
else:
    echo 'This is not an apple';
endif;

//if/elseif/else(with curly brackets)
if ($fruits == 'apple') {
    echo 'This is an apple' . '<br>';
}else if($fruits=='orange'){
    echo 'This is an orange';
}else {
    echo 'This is not an apple and orange';
}

//if/elseif/else(without curly brackets)
if ($fruits == 'apple'):
    echo 'This is an apple' . '<br>';
elseif ($fruits == 'orange'):
    echo 'This is an orange';
else:
    echo 'This is not an apple and orange';
endif;

//switch(with curly brackets)
switch ($fruits) {
    case 'apple':
        echo 'This is an apple'.'<br>';
        break;
    case 'orange':
        echo 'This is not an orange';
        break;
    default:
        echo 'This is not an apple and orange';
        break;
}

//switch(without curly brackets)
switch ($fruits):
    case 'apple':
        echo 'This is an apple';
        break;
    case 'orange':
        echo 'This is not an orange';
        break;
    default:
        echo 'This is not an apple and orange';
        break;
endswitch;

