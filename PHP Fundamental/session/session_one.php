<?php 

session_start();

$_SESSION['name']='john doe';
$_SESSION['age']=22;

print_r($_SESSION);