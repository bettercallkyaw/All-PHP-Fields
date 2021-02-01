<?php

session_start();

// echo $name;

//unset($_SESSION['name']);
session_destroy();
print_r($_SESSION);
