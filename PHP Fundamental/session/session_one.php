<?php

session_start();

$_SESSION['name'] = 'htin kyaw';
$_SESSION['age'] = 22;

print_r($_SESSION);
